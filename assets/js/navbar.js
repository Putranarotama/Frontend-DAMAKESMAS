/**
 * navbar.js
 * Handles: mobile hamburger menu, sticky behavior, active link highlighting
 */
(function () {
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.getElementById('nav-menu');

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
      navMenu.classList.toggle('open');
      hamburger.setAttribute('aria-expanded', navMenu.classList.contains('open'));
    });
    // Close on outside click
    document.addEventListener('click', (e) => {
      if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // Active link based on current page
  const links = document.querySelectorAll('.nav-link');
  const current = window.location.pathname.split('/').pop() || 'index.php';
  links.forEach(link => {
    const href = link.getAttribute('href');
    if (href && (href === current || href.includes(current))) {
      link.classList.add('active');
    }
  });
})();
