import "swiper/css/pagination";

import Swiper from "swiper";
import {Navigation, Pagination} from "swiper/modules";

export default function requestPage() {
  initMoreSlider();
  initImageSlider();
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