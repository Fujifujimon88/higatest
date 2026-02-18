(function () {
  'use strict';

  /* ---- Mobile Menu ---- */
  var hamburger = document.querySelector('.hamburger');
  var mobileMenu = document.querySelector('.mobile-menu');
  var overlay = document.querySelector('.mobile-menu__overlay');
  var menuLinks = document.querySelectorAll('.mobile-menu__link, .mobile-menu__cta .btn');

  function openMenu() {
    hamburger.classList.add('is-active');
    hamburger.setAttribute('aria-expanded', 'true');
    mobileMenu.classList.add('is-open');
    mobileMenu.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    hamburger.classList.remove('is-active');
    hamburger.setAttribute('aria-expanded', 'false');
    mobileMenu.classList.remove('is-open');
    mobileMenu.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function () {
      mobileMenu.classList.contains('is-open') ? closeMenu() : openMenu();
    });
    if (overlay) overlay.addEventListener('click', closeMenu);
    menuLinks.forEach(function (link) { link.addEventListener('click', closeMenu); });
  }

  /* ---- Header scroll shadow ---- */
  var header = document.querySelector('.header');
  var scrolled = false;
  window.addEventListener('scroll', function () {
    if (window.scrollY > 10 && !scrolled) {
      header.classList.add('is-scrolled');
      scrolled = true;
    } else if (window.scrollY <= 10 && scrolled) {
      header.classList.remove('is-scrolled');
      scrolled = false;
    }
  }, { passive: true });

  /* ---- Scroll fade-in (IntersectionObserver) ---- */
  var fadeEls = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');

  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    fadeEls.forEach(function (el) { observer.observe(el); });
  } else {
    fadeEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* ---- Hero wave SVG draw animation ---- */
  var wavePath = document.querySelector('.hero__wave path');
  if (wavePath) {
    var length = wavePath.getTotalLength();
    wavePath.style.strokeDasharray = length;
    wavePath.style.strokeDashoffset = length;
    wavePath.style.transition = 'stroke-dashoffset 1.5s ease 0.3s';
    requestAnimationFrame(function () {
      wavePath.style.strokeDashoffset = '0';
    });
  }
})();
