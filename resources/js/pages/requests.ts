import {Feature, LngLat} from "@yandex/ymaps3-types";
import {YMapClustererProps} from "@yandex/ymaps3-types/packages/clusterer/YMapClusterer/YMapClusterer";
import {MapEventUpdateHandler} from "@yandex/ymaps3-types/imperative/YMapListener";

export default function requestsPage() {
  initRequestRow();
  initRequestCard();

  initMapWrap();
}


function initRequestRow() {
  document.querySelectorAll<HTMLElement>('.request-row').forEach((elem) => {
    const button = elem.querySelector<HTMLElement>('.request-row-trigger');
    const full = elem.querySelector<HTMLElement>('.request-row-full');
    const short = elem.querySelector<HTMLElement>('.request-row-short');

    let timeout: number = null;
    button.addEventListener('click', function () {
      full.style.overflow = 'hidden';
      short.style.overflow = 'hidden';
      elem.classList.toggle('active');

      if (elem.classList.contains('active')) {
        full.style.maxHeight = 0 + 'px';
        full.style.maxHeight = full.scrollHeight + 'px';

        short.style.maxHeight = short.scrollHeight + 'px';
        clearTimeout(timeout);
        timeout = setTimeout(function () {
          short.style.maxHeight = 0 + 'px';
        })
      } else {
        full.style.maxHeight = full.scrollHeight + 'px';
        full.style.maxHeight = 0 + 'px';

        short.style.maxHeight = 0 + 'px';
        short.style.maxHeight = short.scrollHeight + 'px';
      }
    });

    elem.addEventListener('transitionend', function (e) {
      if (elem.classList.contains('active')) {
        if (e.target == full)
          full.style.overflow = null;
        if (e.target == short)
          short.style.overflow = null;
      } else {
        if (e.target == short)
          short.style.maxHeight = null;
      }
    });

    let totalTagLength = 0;
    let additionalTags = 0;
    short.querySelectorAll<HTMLElement>('.request-row-tag').forEach((tag, i) => {
      totalTagLength += tag.innerText.length;
      if (i > 0 && totalTagLength > 12) {
        additionalTags++;
        tag.remove();
      }
    });
    if (additionalTags > 0)
      short.querySelector('.request-row-tags').innerHTML += `<div class="request-row-tag tag"><span>+${additionalTags}</span></div>`;
  })
}

function initRequestCard() {
  document.querySelectorAll<HTMLElement>('.request-card').forEach((elem) => {
    let totalTagLength = 0;
    let additionalTags = 0;
    elem.querySelectorAll<HTMLElement>('.request-card-tag').forEach((tag, i) => {
      totalTagLength += tag.innerText.length;
      if (i > 0 && totalTagLength > 16) {
        additionalTags++;
        tag.remove();
      }
    });
    if (additionalTags > 0)
      elem.querySelector('.request-card-top').innerHTML += `<div class="request-card-tag">+${additionalTags}</div>`;
  })
}

// Source - https://stackoverflow.com/a/51851844
// Posted by jcalz, modified by community. See post 'Timeline' for change history
// Retrieved 2026-02-07, License - CC BY-SA 4.0

type ArgumentTypes<F extends Function> = F extends (...args: infer A) => any ? A : never;

function throttle(callee: Function, timeout: number) {
  let timer: number = null

  return function perform(...args: ArgumentTypes<typeof callee>) {
    if (timer) return

    timer = setTimeout(() => {
      // @ts-ignore
      callee(...args);

      clearTimeout(timer)
      timer = null
    }, timeout)
  }
}

type MapItem = {
  id: number,
  coords: LngLat,
  title: string
  description: string
  link: string
  tags: string
  short: string
  image: string
}

type MapData = {
  items: MapItem[]
}


async function initMap(wrapper: HTMLElement) {
  ymaps3.strictMode = true;

  const data: MapData = JSON.parse(wrapper.dataset.data);
  const sidebar = wrapper.querySelector<HTMLElement>('.map-sidebar');
  const template = document.getElementById('map-item') as HTMLTemplateElement;

  const {YMap, YMapListener, YMapDefaultSchemeLayer, YMapFeatureDataSource, YMapLayer, YMapMarker} = ymaps3;
  const {YMapClusterer, clusterByGrid} = await ymaps3.import('@yandex/ymaps3-clusterer@0.0.1');

  // Иницилиазируем карту
  const map = new YMap(wrapper.querySelector('.map__map'), {
    location: {
      // Координаты центра карты
      center: [76.945645, 43.237163],
      // Уровень масштабирования
      zoom: 12
    },
  });

  const renderItems = (items: MapItem[]) => {
    sidebar.innerHTML = '';
    items.forEach((item) => {
      const elem = template.content.firstElementChild.cloneNode(true) as HTMLElement;
      /*
                <div class="map-side-item-image">img</div>
                <div class="map-side-item-content">
                    <div class="map-side-item-date tags"></div>
                    <a href="" class="map-side-item-title"></a>
                    <div class="map-side-item-description"></div>
                </div>
      * */

      elem.querySelector<HTMLImageElement>('.map-side-item-image img').src = item.image;

      const link = elem.querySelector<HTMLLinkElement>('.map-side-item-title');
      link.href = item.link;
      link.innerText = item.title;

      elem.querySelector<HTMLDivElement>('.map-side-item-description').innerHTML = item.short;

      sidebar.append(elem);

      elem.dataset.id = item.id+'';
    })

  }

  const updateHandler: MapEventUpdateHandler = ({location}) => {
    const visibleItems = data.items.filter((item) => {
      return item.coords[0] > location.bounds[0][0] && item.coords[1] < location.bounds[0][1]
        && item.coords[1] < location.bounds[1][0] && item.coords[1] > location.bounds[1][1];
    });
    renderItems(visibleItems);
  };


  const mapListener = new YMapListener({
    layer: 'any',
    onUpdate: throttle(updateHandler, 100) as MapEventUpdateHandler,
  });

  const markerElement = () => {
    const marker = document.createElement('div');
    marker.className = 'map-marker';
    marker.style.cursor = 'pointer';
    marker.innerHTML = `<div class="map-marker__inner"></div>`;
    return marker;
  }

  // @ts-ignore
  const marker: YMapClustererProps['marker'] = (feature: Feature) => new YMapMarker(
    {
      coordinates: feature.geometry.coordinates,
      source: 'my-source',
      onClick: (e) => {
        console.log(e.target)
      }
    },
    markerElement()
  );

// @ts-ignore
  const cluster: YMapClustererProps['cluster'] = (coordinates: LngLat, features: Feature[]) => new ymaps3.YMapMarker(
    {
      coordinates,
      source: 'my-source'
    },
    circle(features.length)
  );

  function circle(count: number) {
    const circle = document.createElement('div');
    circle.className = 'map-marker map-marker--circle';
    circle.innerHTML = `<div class="map-marker__inner">${count}</div>`;
    return circle;
  }

  // @ts-ignore
  const points: Feature[] = data.items.map((item) => ({
    id: item.id,
    geometry: {coordinates: item.coords},
  }));

  const clusterer = new YMapClusterer({
    method: clusterByGrid({gridSize: 66}),
// @ts-ignore
    features: points,
    marker,
    cluster
  });

// Добавляем слой для отображения схематической карты
  map
    // @ts-ignore
    .addChild(new YMapDefaultSchemeLayer())
    .addChild(mapListener)
    .addChild(new YMapFeatureDataSource({id: 'my-source'}))
    .addChild(new YMapLayer({source: 'my-source', type: 'markers', zIndex: 1800}))
    .addChild(clusterer)
}

function initMapWrap() {
  const mapWrapper = document.querySelector<HTMLElement>('.map-wrapper');
  if (!mapWrapper)
    return;

  ymaps3.ready.then(() => initMap(mapWrapper))
}
