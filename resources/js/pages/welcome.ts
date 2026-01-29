import "swiper/css";
import Swiper from "swiper";

export default function welcomePage() {
  initWelcomeSlider();
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