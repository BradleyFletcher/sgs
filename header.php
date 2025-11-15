<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white'); ?>>
  <?php wp_body_open(); ?>

  <!-- Top Info Bar -->
  <div class="bg-secondary-400 border-b border-secondary-500 relative z-50">
    <div class="container-custom">
      <div class="flex items-center justify-between py-2 text-sm">
        <div class="hidden md:flex items-center space-x-6 text-primary-900">
          <a href="tel:07936764009" class="flex items-center hover:text-primary-700 transition-colors group">
            <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            <span class="font-medium">07936 764009</span>
          </a>
          <a href="mailto:info@superguttering.co.uk" class="flex items-center hover:text-primary-700 transition-colors group">
            <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span class="font-medium">info@superguttering.co.uk</span>
          </a>
        </div>
        <div class="flex items-center space-x-4">
          <span class="text-primary-800 hidden sm:block font-medium">Follow Us:</span>
          <?php sgs_social_icons(); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Header -->
  <header class="bg-primary-900 shadow-xl sticky top-0 z-50 backdrop-blur-sm bg-opacity-95 relative">
    <div class="container-custom">
      <div class="flex items-center justify-between py-4">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-heading font-bold text-white hover:text-secondary-400 transition-colors">
              <?php bloginfo('name'); ?>
            </a>
          <?php endif; ?>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center space-x-1">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex items-center space-x-1',
            'fallback_cb'    => false,
            'depth'          => 2,
          ));
          ?>
        </nav>
        
        <style>
        /* Modern Dark Dropdown Navigation */
        header nav > ul > li { position: relative; }
        header nav > ul > li > a { 
          display: flex; 
          align-items: center; 
          padding: 0.5rem 1rem; 
          color: white; 
          font-weight: 500; 
          border-radius: 0.5rem; 
          transition: all 0.2s; 
          text-decoration: none; 
        }
        header nav > ul > li > a:hover { background-color: rgba(255, 255, 255, 0.1); }
        
        /* Add chevron to parent items */
        header nav > ul > li.menu-item-has-children > a::after {
          content: '';
          width: 0;
          height: 0;
          border-left: 4px solid transparent;
          border-right: 4px solid transparent;
          border-top: 5px solid currentColor;
          margin-left: 0.5rem;
          transition: transform 0.2s;
        }
        header nav > ul > li.menu-item-has-children:hover > a::after {
          transform: rotate(180deg);
        }
        
        /* Dark Modern Dropdown */
        header nav > ul > li > ul.sub-menu {
          position: absolute;
          top: 100%;
          left: 0;
          min-width: 240px;
          background: #0a0f1a;
          border-radius: 0.75rem;
          box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
          opacity: 0;
          visibility: hidden;
          transform: translateY(-10px);
          transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
          z-index: 100;
          margin-top: 0.5rem;
          padding: 0.5rem;
          list-style: none;
          border: 1px solid rgba(251, 191, 36, 0.1);
        }
        header nav > ul > li:hover > ul.sub-menu {
          opacity: 1;
          visibility: visible;
          transform: translateY(0);
        }
        
        /* Dropdown Items */
        header nav ul.sub-menu li a {
          display: flex;
          align-items: center;
          padding: 0.75rem 1rem;
          color: #e5e7eb;
          text-decoration: none;
          transition: all 0.2s;
          font-size: 0.9rem;
          border-radius: 0.5rem;
          position: relative;
        }
        header nav ul.sub-menu li a::before {
          content: '';
          position: absolute;
          left: 0;
          top: 50%;
          transform: translateY(-50%);
          width: 3px;
          height: 0;
          background: #fbbf24;
          transition: height 0.2s;
          border-radius: 0 2px 2px 0;
        }
        header nav ul.sub-menu li a:hover {
          background-color: rgba(251, 191, 36, 0.1);
          color: #fbbf24;
          padding-left: 1.25rem;
        }
        header nav ul.sub-menu li a:hover::before {
          height: 60%;
        }
        
        /* Mobile Menu Styles */
        #mobile-menu nav > ul > li > a {
          display: block;
          padding: 0.75rem 1rem;
          color: white;
          font-weight: 500;
          border-radius: 0.5rem;
          transition: all 0.2s;
          text-decoration: none;
        }
        #mobile-menu nav > ul > li > a:hover {
          background-color: rgba(251, 191, 36, 0.1);
          color: #fbbf24;
        }
        
        /* Mobile Menu Parent Items with Chevron */
        #mobile-menu nav > ul > li.menu-item-has-children > a {
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        #mobile-menu nav > ul > li.menu-item-has-children > a::after {
          content: '';
          width: 0;
          height: 0;
          border-left: 4px solid transparent;
          border-right: 4px solid transparent;
          border-top: 5px solid currentColor;
          margin-left: 0.5rem;
          transition: transform 0.2s;
        }
        #mobile-menu nav > ul > li.menu-item-has-children.active > a::after {
          transform: rotate(180deg);
        }
        
        /* Mobile Menu Submenus */
        #mobile-menu nav ul.sub-menu {
          list-style: none;
          margin-top: 0.5rem;
          margin-left: 1rem;
          padding: 0;
          display: none;
        }
        #mobile-menu nav ul.sub-menu.show {
          display: block;
        }
        #mobile-menu nav ul.sub-menu li a {
          display: flex;
          align-items: center;
          padding: 0.5rem 1rem;
          color: #e5e7eb;
          text-decoration: none;
          font-size: 0.9rem;
          border-radius: 0.375rem;
          transition: all 0.2s;
        }
        #mobile-menu nav ul.sub-menu li a::before {
          content: '›';
          margin-right: 0.5rem;
          color: #fbbf24;
          font-weight: bold;
        }
        #mobile-menu nav ul.sub-menu li a:hover {
          background-color: rgba(251, 191, 36, 0.1);
          color: #fbbf24;
          padding-left: 1.25rem;
        }
        
        /* Hamburger Animation */
        .hamburger.active .hamburger-line:nth-child(1) {
          transform: rotate(45deg) translate(5px, 5px) !important;
        }
        .hamburger.active .hamburger-line:nth-child(2) {
          opacity: 0;
        }
        .hamburger.active .hamburger-line:nth-child(3) {
          transform: rotate(-45deg) translate(6px, -6px) !important;
        }
        
        /* Mobile Menu Slide Animation */
        #mobile-menu {
          opacity: 0;
          transition: opacity 0.3s ease-in-out;
        }
        #mobile-menu.show {
          opacity: 1;
        }
        #mobile-menu > div:last-child {
          transform: translateX(100%);
          transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        #mobile-menu.show > div:last-child {
          transform: translateX(0);
        }
        </style>

        <!-- CTA Button -->
        <div class="hidden lg:block">
          <a href="<?php echo home_url('/contact-us/'); ?>" class="btn-primary inline-flex items-center group">
            <svg class="w-4 h-4 mr-2 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            Get Free Quote
          </a>
        </div>

        <!-- Modern Mobile Menu Button -->
        <button id="mobile-menu-button" class="lg:hidden relative w-10 h-10 text-white hover:text-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-400 rounded-lg transition-all hamburger">
          <span class="sr-only">Open menu</span>
          <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <span class="hamburger-line block w-6 h-0.5 bg-current transform transition-all duration-300 ease-in-out" style="transform: translateY(-6px);"></span>
            <span class="hamburger-line block w-6 h-0.5 bg-current transform transition-all duration-300 ease-in-out"></span>
            <span class="hamburger-line block w-6 h-0.5 bg-current transform transition-all duration-300 ease-in-out" style="transform: translateY(6px);"></span>
          </div>
        </button>
      </div>
    </div>
  </header>

  <!-- Modern Mobile Menu Overlay -->
  <div id="mobile-menu" class="fixed inset-0 z-[60] lg:hidden hidden">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-primary-900 bg-opacity-95 backdrop-blur-sm transition-opacity"></div>

    <!-- Menu Content -->
    <div class="fixed inset-y-0 right-0 max-w-sm w-full bg-primary-900 shadow-2xl transform transition-transform">
      <div class="h-full flex flex-col">
        <!-- Menu Header -->
        <div class="flex items-center justify-between p-6 border-b border-primary-800">
          <span class="text-xl font-heading font-bold text-secondary-400">Menu</span>
          <button id="mobile-menu-close" class="text-white hover:text-secondary-400 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>

        <!-- Menu Items -->
        <div class="flex-1 overflow-y-auto p-6">
          <nav class="space-y-2">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'space-y-2',
              'fallback_cb'    => false,
              'depth'          => 2,
            ));
            ?>
          </nav>

          <!-- Contact Cards -->
          <div class="mt-8 space-y-3">
            <a href="tel:07936764009" class="flex items-center p-4 bg-primary-800 hover:bg-primary-700 rounded-lg transition-all group">
              <div class="flex-shrink-0 w-10 h-10 bg-secondary-400 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                <svg class="w-5 h-5 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-xs text-neutral-400">Call Us</p>
                <p class="text-white font-semibold text-sm">07936 764009</p>
              </div>
            </a>

            <a href="mailto:info@superguttering.co.uk" class="flex items-center p-4 bg-primary-800 hover:bg-primary-700 rounded-lg transition-all group">
              <div class="flex-shrink-0 w-10 h-10 bg-secondary-400 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                <svg class="w-5 h-5 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <div class="ml-4">
                <p class="text-xs text-neutral-400">Email Us</p>
                <p class="text-white font-semibold text-sm">info@superguttering.co.uk</p>
              </div>
            </a>
          </div>

          <!-- CTA Buttons -->
          <div class="mt-6 space-y-3">
            <a href="<?php echo home_url('/contact-us/'); ?>" class="btn-primary w-full text-center inline-flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              Get Free Quote
            </a>

            <a href="https://wa.me/447936764009" target="_blank" rel="noopener noreferrer" class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg inline-flex items-center justify-center group">
              <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
              </svg>
              Contact on WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>