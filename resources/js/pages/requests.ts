export default function requestsPage() {
  initRequestRow();
  initRequestCard();
}


function initRequestRow() {
  document.querySelectorAll<HTMLElement>('.request-row').forEach((elem) => {
    const button = elem.querySelector<HTMLElement>('.request-row-trigger');
    const full = elem.querySelector<HTMLElement>('.request-row-full');
    const short = elem.querySelector<HTMLElement>('.request-row-short');

    let timeout: number = null;
    button.addEventListener('click', function () {
      full.style.overflow = 'hidden';
      short.style.overflow = 'hidden';
      elem.classList.toggle('active');

      if (elem.classList.contains('active')) {
        full.style.maxHeight = 0 + 'px';
        full.style.maxHeight = full.scrollHeight + 'px';

        short.style.maxHeight = short.scrollHeight + 'px';
        clearTimeout(timeout);
        timeout = setTimeout(function () {
          short.style.maxHeight = 0 + 'px';
        })
      } else {
        full.style.maxHeight = full.scrollHeight + 'px';
        full.style.maxHeight = 0 + 'px';

        short.style.maxHeight = 0 + 'px';
        short.style.maxHeight = short.scrollHeight + 'px';
      }
    });

    elem.addEventListener('transitionend', function (e) {
      if (elem.classList.contains('active')) {
        if (e.target == full)
          full.style.overflow = null;
        if (e.target == short)
          short.style.overflow = null;
      } else {
        if (e.target == short)
          short.style.maxHeight = null;
      }
    });

    let totalTagLength = 0;
    let additionalTags = 0;
    short.querySelectorAll<HTMLElement>('.request-row-tag').forEach((tag, i) => {
      totalTagLength += tag.innerText.length;
      if(i > 0 && totalTagLength > 12) {
        additionalTags++;
        tag.remove();
      }
    });
    if(additionalTags > 0)
      short.querySelector('.request-row-tags').innerHTML += `<div class="request-row-tag tag"><span>+${additionalTags}</span></div>`;
  })
}
function initRequestCard() {
  document.querySelectorAll<HTMLElement>('.request-card').forEach((elem) => {
    let totalTagLength = 0;
    let additionalTags = 0;
    elem.querySelectorAll<HTMLElement>('.request-card-tag').forEach((tag, i) => {
      totalTagLength += tag.innerText.length;
      if(i > 0 && totalTagLength > 16) {
        additionalTags++;
        tag.remove();
      }
    });
    if(additionalTags > 0)
      elem.querySelector('.request-card-top').innerHTML += `<div class="request-card-tag">+${additionalTags}</div>`;
  })
}