export default function initFilters() {
  const wrapper = document.querySelector<HTMLElement>('.filters-wrapper');
  if (!wrapper)
    return;

  const toggleButton = wrapper.querySelector('.filters-toggle');
  toggleButton.addEventListener('click', () => {
    if (wrapper.classList.contains('active'))
      wrapper.classList.remove('active');
    else
      wrapper.classList.add('active');
  });
}