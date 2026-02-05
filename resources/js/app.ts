import {aboutPage, requestPage, requestsPage, welcomePage} from "@/pages";
import {initDropdowns, initFancybox, initFilters, initReviews} from "@/components";

document.addEventListener('DOMContentLoaded', function () {
  /* COMPONENTS */
  initFancybox();
  initFilters();
  initDropdowns();
  initReviews();
  /* PAGES */
  welcomePage();
  requestPage();
  requestsPage();
  aboutPage();
});
