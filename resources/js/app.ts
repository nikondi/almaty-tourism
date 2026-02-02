import "@fancyapps/ui/dist/fancybox/fancybox.css";

import {requestsPage, welcomePage} from "@/pages";
import {Fancybox} from "@fancyapps/ui";

document.addEventListener('DOMContentLoaded', function() {
  /* COMPONENTS */
  initFancybox();
  /* PAGES */
  welcomePage();
  requestsPage();
});

function initFancybox() {
  Fancybox.bind('[data-fancybox]');
}