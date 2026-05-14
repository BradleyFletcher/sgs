/**
 * Mobile Menu Toggle
 */
(function() {
  'use strict';

  // Get elements
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuClose = document.getElementById('mobile-menu-close');
  const body = document.body;

  if (!mobileMenuButton || !mobileMenu || !mobileMenuClose) {
    return;
  }

  // Open mobile menu
  function openMobileMenu() {
    mobileMenu.hidden = false;
    mobileMenu.classList.remove('hidden');
    mobileMenuButton.classList.add('active');
    mobileMenuButton.setAttribute('aria-expanded', 'true');
    body.style.overflow = 'hidden';
    
    // Trigger animation after display
    setTimeout(() => {
      mobileMenu.classList.add('show');
    }, 10);
  }

  // Close mobile menu
  function closeMobileMenu() {
    mobileMenu.classList.remove('show');
    mobileMenuButton.classList.remove('active');
    mobileMenuButton.setAttribute('aria-expanded', 'false');
    body.style.overflow = '';
    
    // Wait for animation to complete before hiding
    setTimeout(() => {
      mobileMenu.classList.add('hidden');
      mobileMenu.hidden = true;
    }, 300);
  }

  // Toggle mobile menu
  function toggleMobileMenu() {
    if (mobileMenu.hidden || mobileMenu.classList.contains('hidden')) {
      openMobileMenu();
    } else {
      closeMobileMenu();
    }
  }

  // Event listeners
  mobileMenuButton.addEventListener('click', toggleMobileMenu);
  mobileMenuClose.addEventListener('click', closeMobileMenu);

  // Close menu when clicking backdrop
  mobileMenu.addEventListener('click', function(e) {
    if (e.target === mobileMenu) {
      closeMobileMenu();
    }
  });

  // Close menu on escape key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
      closeMobileMenu();
    }
  });

  // Close menu when window is resized to desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 1024 && !mobileMenu.classList.contains('hidden')) {
      closeMobileMenu();
    }
  });

  // Handle submenu toggles in mobile menu
  const menuItems = mobileMenu.querySelectorAll('.menu-item-has-children > a');
  menuItems.forEach(function(item) {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      const parent = this.parentElement;
      const submenu = parent.querySelector('.sub-menu');
      
      if (submenu) {
        // Toggle submenu visibility
        submenu.classList.toggle('show');
        // Toggle parent active state for chevron rotation
        parent.classList.toggle('active');
      }
    });
  });

})();
