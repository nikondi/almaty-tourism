import "swiper/css";
import "swiper/css/scrollbar";

import Swiper from "swiper";
import {FreeMode, Mousewheel, Scrollbar, Thumbs} from "swiper/modules";

export default function aboutPage() {
  initCapabilities();
}

function initCapabilities() {
  const wrapper = document.querySelector<HTMLElement>('.capabilities');
  if(!wrapper)
    return;

  const thumbsElem = wrapper.querySelector<HTMLElement>('.capabilities-texts');
  const sliderElem = wrapper.querySelector<HTMLElement>('.capabilities-media-slider');

  const thumbsSlider  = new Swiper(thumbsElem, {
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

  new Swiper(sliderElem, {
    modules: [Thumbs],
    thumbs: {
      swiper: thumbsSlider
    }
  });

}