import "swiper/css";
import "swiper/css/effect-fade";
import Swiper from "swiper";
import {Autoplay, EffectFade, Navigation, Thumbs} from "swiper/modules";

export default function welcomePage() {
  initWelcomeSlider();
  initPlatformSlider();
  initAccordion();
}

function initWelcomeSlider() {
  const thumbsElem = document.querySelector<HTMLElement>('.welcome-first-steps-slider');
  const background = document.querySelector<HTMLElement>('.welcome-first-background');
  if (!background)
    return;


  const thumbs = new Swiper(thumbsElem, {
    spaceBetween: 20,
    breakpoints: {
      1144: {
        slidesPerView: 4
      }
    }
  });

  const swiper = new Swiper(background, {
    modules: [Autoplay, Thumbs, EffectFade],
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 6000
    },
    thumbs: {
      swiper: thumbs,
      slideThumbActiveClass: "welcome-first-step--active"
    }
  });

  thumbs.on('slideChange', function (sw) {
    swiper.slideTo(sw.activeIndex);
  });
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
    slidesPerView: 1,
    navigation: {
      prevEl: prevButton,
      nextEl: nextButton
    },
    breakpoints: {
      1143: {
        slidesPerView: "auto",
        centeredSlides: false,
        slidesOffsetAfter: 2 * 270 + 40,
      }
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