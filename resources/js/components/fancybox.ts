import {Fancybox} from "@fancyapps/ui";

export default function initFancybox() {
  Fancybox.bind('[data-fancybox]', {
    Carousel: {
      Toolbar: {
        display: {
          left: ["counter"],
          middle: [],
          right: ["download", "thumbs", "close"],
        },
      },
    },
  });
}