document.addEventListener('DOMContentLoaded', () => {
  const mobileToggleItems = document.querySelectorAll('.sidebar-link');
  mobileToggleItems.forEach((item) => item.addEventListener('click', (event) => event.preventDefault()));
});
