export default function initDropdowns() {
  document.querySelectorAll<HTMLElement>('.dropdown').forEach(dropdown => {
    const trigger = dropdown.querySelector<HTMLElement>('.dropdown__label');
    trigger.addEventListener('click', () => {
      dropdown.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
      if (e.target != trigger && !trigger.contains(e.target as HTMLElement)) {
        dropdown.classList.remove('active');
      }
    })
  })
}
