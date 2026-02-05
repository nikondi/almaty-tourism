import "@fancyapps/ui/dist/fancybox/fancybox.css";

import {aboutPage, requestPage, requestsPage, welcomePage} from "@/pages";
import {Fancybox} from "@fancyapps/ui";
import {initFilters} from "@/components";
import Swiper from "swiper";
import {Navigation} from "swiper/modules";

document.addEventListener('DOMContentLoaded', function () {
  /* COMPONENTS */
  initFancybox();
  initFilters();
  initDropdowns();
  initReviews();
  /* PAGES */
  welcomePage();
  requestsPage();
  requestPage();
  aboutPage();
});

function initFancybox() {
  Fancybox.bind('[data-fancybox]');
}

function initDropdowns() {
  document.querySelectorAll<HTMLElement>('.dropdown').forEach(dropdown => {
    const trigger = dropdown.querySelector<HTMLElement>('.dropdown__label');
    trigger.addEventListener('click', () => {
      dropdown.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
      if (e.target != trigger && !trigger.contains(e.target as HTMLElement)) {
        dropdown.classList.remove('active');
      }
    })
  })
}

function initReviews() {
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