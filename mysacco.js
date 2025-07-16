// Toggle mobile navigation
const navToggle = document.querySelector('.nav-toggle');
const siteNav = document.querySelector('.site-nav');
navToggle.addEventListener('click', () => {
  siteNav.classList.toggle('open');
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
    if (siteNav.classList.contains('open')) {
      siteNav.classList.remove('open');
    }
  });
});

// Basic form handling (demo only)
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Thanks, ' + this.name.value + '! We will get back to you soon.');
  this.reset();
});
