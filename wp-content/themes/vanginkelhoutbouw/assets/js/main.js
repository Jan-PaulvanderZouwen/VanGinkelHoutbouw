(function () {
  const header = document.querySelector('.site-header');
  if (!header) return;

  const setScrolled = () => {
    header.classList.toggle('is-scrolled', window.scrollY > 12);
  };

  setScrolled();
  window.addEventListener('scroll', setScrolled, { passive: true });
})();
