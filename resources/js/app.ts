import {aboutPage, authPage, requestPage, requestsPage, welcomePage} from "@/pages";
import {initDropdowns, initFancybox, initFilters, initReviews} from "@/components";
import IMask from 'imask';

document.addEventListener('DOMContentLoaded', function () {
  /* COMPONENTS */
  initFancybox();
  initFilters();
  initDropdowns();
  initReviews();
  initTels();
  /* PAGES */
  welcomePage();
  requestPage();
  requestsPage();
  aboutPage();
  authPage();
});

function initTels() {
  document.querySelectorAll<HTMLInputElement>('input[type=tel]').forEach((input) => {
    IMask(input, {
      mask: '+{7} (000) 000-00-00'
    })
  })
}