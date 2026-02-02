import "@fancyapps/ui/dist/fancybox/fancybox.css";

import {requestPage, requestsPage, welcomePage} from "@/pages";
import {Fancybox} from "@fancyapps/ui";

document.addEventListener('DOMContentLoaded', function() {
  /* COMPONENTS */
  initFancybox();
  /* PAGES */
  welcomePage();
  requestsPage();
  requestPage();
});

function initFancybox() {
  Fancybox.bind('[data-fancybox]');
}