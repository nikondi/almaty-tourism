import "@fancyapps/ui/dist/fancybox/fancybox.css";

import {aboutPage, requestPage, requestsPage, welcomePage} from "@/pages";
import {Fancybox} from "@fancyapps/ui";
import {initFilters} from "@/components";

document.addEventListener('DOMContentLoaded', function() {
  /* COMPONENTS */
  initFancybox();
  initFilters();
  /* PAGES */
  welcomePage();
  requestsPage();
  requestPage();
  aboutPage();
});

function initFancybox() {
  Fancybox.bind('[data-fancybox]');
}