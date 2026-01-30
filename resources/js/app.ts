import "@fancyapps/ui/dist/fancybox/fancybox.css";

import {welcomePage} from "@/pages";
import {Fancybox} from "@fancyapps/ui";

document.addEventListener('DOMContentLoaded', function() {
  /* COMPONENTS */
  initFancybox();
  /* PAGES */
  welcomePage();
});

function initFancybox() {
  Fancybox.bind('[data-fancybox]');
}