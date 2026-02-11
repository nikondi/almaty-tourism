import "swiper/css";
import "swiper/css/scrollbar";
import "swiper/css/pagination";

import Swiper from "swiper";
import {EffectFade, FreeMode, Mousewheel, Pagination, Scrollbar, Thumbs} from "swiper/modules";

export default function aboutPage() {
  initCapabilities();
}

function initCapabilities() {
  const wrapper = document.querySelector<HTMLElement>('.capabilities');
  if (!wrapper)
    return;

  const thumbsElem = wrapper.querySelector<HTMLElement>('.capabilities-texts');
  const sideSlider = wrapper.querySelector<HTMLElement>('.capabilities-side-slider');


  const thumbsSlider = new Swiper(thumbsElem, {
    modules: [Mousewheel, Scrollbar, FreeMode],
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: -1,
    mousewheel: {
      enabled: true,
      releaseOnEdges: true
    },
    freeMode: {
      enabled: true
    },
    scrollbar: {
      enabled: true,
      draggable: true,
      el: wrapper.querySelector<HTMLElement>('.swiper-scrollbar'),
    }
  });


  new Swiper(sideSlider, {
    modules: [EffectFade, Thumbs],
    effect: "fade",
    noSwiping: true,
    allowTouchMove: false,
    fadeEffect: {
      crossFade: true,
    },
    spaceBetween: 100,
    thumbs: {
      swiper: thumbsSlider
    }
  });

  wrapper.querySelectorAll<HTMLElement>('.capabilities-media-slider').forEach(el => {
    new Swiper(el, {
      modules: [Pagination],
      nested: true,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar"
      },
    });
  })

}