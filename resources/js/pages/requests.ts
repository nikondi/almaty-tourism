export default function requestsPage() {
  initRequestsGrid();
}


type RequestGridType = 'default' | 'list';

function initRequestsGrid() {
  const gridElem = document.querySelector<HTMLElement>('.requests-grid');
  if (!gridElem)
    return;

  const types: RequestGridType[] = ['default', 'list'];
  const buttons = document.querySelectorAll<HTMLButtonElement>('.requests-grid-type');

  const setType = (type: RequestGridType) => {
    gridElem.classList.remove(...types.map((t) => `request-grid--${t}`));
    gridElem.classList.add(`request-grid--${type}`);
  }

  buttons.forEach((button) => {
    button.addEventListener('click', function () {
      buttons.forEach((b) => {
        if (b == button)
          b.classList.add('active');
        else
          b.classList.remove('active');
      })
      setType(button.dataset.type as RequestGridType);
    });
  });
}