import Swiper from "swiper";
import {Navigation} from "swiper/modules";

export default function initReviews() {
  const wrapper = document.querySelector<HTMLElement>('.reviews');
  if (!wrapper)
    return;

  const slider = wrapper.querySelector<HTMLElement>('.reviews-slider');

  new Swiper(slider, {
    modules: [Navigation],
    spaceBetween: 20,
    navigation: {
      prevEl: '.reviews-button--prev',
      nextEl: '.reviews-button--next',
    },
    breakpoints: {
      1144: {
        slidesPerView: 3
      }
    }
  });
}