import {aboutPage, authPage, requestPage, requestsPage, welcomePage} from "@/pages";
import {initDropdowns, initFancybox, initFilters, initReviews} from "@/components";
import IMask from 'imask';
import eventBus from "@/libs/EventBus";

document.addEventListener('DOMContentLoaded', function () {
  /* COMPONENTS */
  initFancybox();
  initFilters();
  initDropdowns();
  initReviews();
  initTels();
  initMiceFormTriggers();
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

function initMiceFormTriggers() {
  document.querySelectorAll<HTMLElement>('.mice-form-trigger').forEach((el) => {
    el.addEventListener('click', () => {
      eventBus.emit('mice-form:open');
    })
  })
}