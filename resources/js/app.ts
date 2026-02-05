import "@fancyapps/ui/dist/fancybox/fancybox.css";

import {aboutPage, requestPage, requestsPage, welcomePage} from "@/pages";
import {Fancybox} from "@fancyapps/ui";
import {initFilters} from "@/components";

document.addEventListener('DOMContentLoaded', function () {
  /* COMPONENTS */
  initFancybox();
  initFilters();
  initDropdowns();
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