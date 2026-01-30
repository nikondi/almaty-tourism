import "swiper/css";
import Swiper from "swiper";
import {Navigation} from "swiper/modules";

export default function welcomePage() {
  initWelcomeSlider();
  initPlatformSlider();
  initAccordion();
}

function initWelcomeSlider() {
  const wrapper = document.querySelector<HTMLElement>('.welcome-first-steps-slider');
  if (!wrapper)
    return;

  let swiper: Swiper = null;
  const media = window.matchMedia('(max-width: 1143px)');

  const checkMedia = () => {
    if (media.matches) {
      swiper = new Swiper(wrapper, {
        spaceBetween: 20
      })
    } else {
      swiper?.destroy();
    }
  }

  checkMedia();
  media.addEventListener('change', checkMedia);
}

function initPlatformSlider() {
  const wrapper = document.querySelector<HTMLElement>('.platform-slider');
  if (!wrapper)
    return;

  const prevButton = wrapper.querySelector<HTMLElement>('.platform-nav-arrow--prev');
  const nextButton = wrapper.querySelector<HTMLElement>('.platform-nav-arrow--next');
  const current = wrapper.querySelector<HTMLElement>('.platform-nav-indicator__current');
  const slider = wrapper.querySelector<HTMLElement>('.platform-slides');

  const handleChange = (swiper: Swiper) => {
    swiper.slides.forEach((elem, i) => {
      if (i < swiper.activeIndex)
        elem.classList.add('platform-slide-hide');
      else
        elem.classList.remove('platform-slide-hide');
    });
    const currentSlide = swiper.activeIndex + 1;
    current.innerHTML = (currentSlide < 10 ? '0' : '') + currentSlide;
  }

  new Swiper(slider, {
    modules: [Navigation],
    spaceBetween: 20,
    slidesPerView: "auto",
    centeredSlides: false,
    slidesOffsetAfter: 2 * 270 + 40,
    navigation: {
      prevEl: prevButton,
      nextEl: nextButton
    },
    on: {
      slideChange: handleChange,
      init: handleChange
    }
  })
}

function initAccordion() {
  document.querySelectorAll<HTMLElement>('.faq-item').forEach((elem) => {
    const answer = elem.querySelector<HTMLElement>('.faq-item-answer');
    elem.addEventListener('click', function () {
      answer.style.overflow = 'hidden';
      if (elem.classList.contains('active')) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
        answer.style.maxHeight = 0 + 'px';
        elem.classList.remove('active');
      } else {
        answer.style.maxHeight = 0 + 'px';
        answer.style.maxHeight = answer.scrollHeight + 'px';
        elem.classList.add('active');
      }
    });

    answer.addEventListener('transitionend', function () {
      if (elem.classList.contains('active'))
        answer.style.overflow = null;
    });

    answer.addEventListener('click', function (e) {
      e.stopPropagation();
    })
  });
}