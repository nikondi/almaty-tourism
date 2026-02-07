import "swiper/css/pagination";

import Swiper from "swiper";
import {Navigation, Pagination} from "swiper/modules";
import {LngLat} from "@yandex/ymaps3-types";

export default function requestPage() {
  initMoreSlider();
  initImageSlider();

  initMapWrap();
}


function initMoreSlider() {
  const wrapper = document.querySelector<HTMLElement>('.more-requests');
  if (!wrapper)
    return;

  const slider = wrapper.querySelector<HTMLElement>('.more-requests-slider');

  new Swiper(slider, {
    modules: [Navigation],
    spaceBetween: 20,
    navigation: {
      prevEl: '.more-requests-button--prev',
      nextEl: '.more-requests-button--next',
    },
    breakpoints: {
      1144: {
        slidesPerView: 4
      }
    }
  });
}

function initImageSlider() {
  const slider = document.querySelector<HTMLElement>('.request-image-slider');
  if (!slider)
    return;

  new Swiper(slider, {
    modules: [Pagination],
    spaceBetween: 20,
    pagination: {
      enabled: true,
      el: slider.querySelector<HTMLElement>('.swiper-pagination'),
      clickable: true,
    }
  });
}

type MapData = {
  coords: LngLat
}

async function initMap(wrapper: HTMLElement) {
  ymaps3.strictMode = true;

  const data: MapData = JSON.parse(wrapper.dataset.data);

  const {YMap, YMapDefaultSchemeLayer, YMapFeatureDataSource, YMapLayer, YMapMarker} = ymaps3;

  // Иницилиазируем карту
  const map = new YMap(wrapper, {
    location: {
      // Координаты центра карты
      center: [76.945645, 43.237163],
      // Уровень масштабирования
      zoom: 12
    },
  });


  const markerElement = () => {
    const marker = document.createElement('div');
    marker.className = 'map-marker';
    marker.innerHTML = `<div class="map-marker__inner"></div>`;
    return marker;
  }

// Добавляем слой для отображения схематической карты
  map
    // @ts-ignore
    .addChild(new YMapDefaultSchemeLayer())
    .addChild(new YMapFeatureDataSource({id: 'my-source'}))
    .addChild(new YMapLayer({source: 'my-source', type: 'markers', zIndex: 1800}))
    .addChild(new YMapMarker(
      {
        coordinates: data.coords,
        source: 'my-source'
      },
      markerElement()
    ))
}

function initMapWrap() {
  const mapWrapper = document.querySelector<HTMLElement>('.request-info-map__map');
  if (!mapWrapper)
    return;

  ymaps3.ready.then(() => initMap(mapWrapper))
}
