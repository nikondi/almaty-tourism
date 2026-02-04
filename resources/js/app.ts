import "@fancyapps/ui/dist/fancybox/fancybox.css";

import {aboutPage, requestPage, requestsPage, welcomePage} from "@/pages";
import {Fancybox} from "@fancyapps/ui";

document.addEventListener('DOMContentLoaded', function() {
  /* COMPONENTS */
  initFancybox();
  /* PAGES */
  welcomePage();
  requestsPage();
  requestPage();
  aboutPage();
});

function initFancybox() {
  Fancybox.bind('[data-fancybox]');
}