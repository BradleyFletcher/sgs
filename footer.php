<footer class="text-white bg-primary-900">
  <div class="py-12 container-custom md:py-16">
    <!-- Main Footer Content -->
    <div class="grid grid-cols-1 gap-12 mb-12 md:grid-cols-2 lg:grid-cols-3 lg:gap-16">
      <!-- Company Info -->
      <div>
        <h4 class="mb-4 text-2xl font-bold font-heading text-secondary-400">Super Guttering Services</h4>
        <p class="mb-6 leading-relaxed text-neutral-300">
          Professional guttering maintenance and repair services in Salisbury and surrounding areas. Protecting your property with quality workmanship since day one.
        </p>
        <div class="mb-6 space-y-3">
          <a href="tel:07936764009" class="flex items-center transition-colors text-neutral-300 hover:text-secondary-400">
            <svg class="flex-shrink-0 mr-3 w-5 h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            07936 764009
          </a>
          <a href="mailto:info@superguttering.co.uk" class="flex items-center transition-colors text-neutral-300 hover:text-secondary-400">
            <svg class="flex-shrink-0 mr-3 w-5 h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            info@superguttering.co.uk
          </a>
          <div class="flex items-start text-neutral-300">
            <svg class="flex-shrink-0 mt-0.5 mr-3 w-5 h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Salisbury, Wiltshire, UK
          </div>
        </div>
        <?php sgs_footer_social_icons(); ?>
      </div>

      <!-- Locations -->
      <div>
        <h4 class="mb-4 text-2xl font-bold font-heading text-secondary-400">Locations</h4>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'locations',
          'container'      => false,
          'menu_class'     => 'footer-links space-y-1',
          'fallback_cb'    => false,
          'depth'          => 1,
        ));
        ?>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="mb-4 text-2xl font-bold font-heading text-secondary-400">Quick Links</h4>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer',
          'container'      => false,
          'menu_class'     => 'footer-links space-y-1',
          'fallback_cb'    => false,
          'depth'          => 2,
        ));
        ?>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="pt-8 border-t border-primary-800">
      <div class="flex flex-col gap-4 justify-between items-center md:flex-row">
        <div class="flex flex-col gap-2 items-center sm:flex-row sm:gap-3">
          <p class="text-sm text-neutral-400">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
          <span class="hidden sm:inline text-neutral-600">|</span>
          <a href="/privacy-policy" class="text-sm transition-colors text-neutral-400 hover:text-secondary-400">Privacy Policy</a>
          <span class="hidden sm:inline text-neutral-600">|</span>
          <p class="text-sm text-neutral-400">Website by <a href="https://flowtide.ai" target="_blank" rel="noopener noreferrer" class="font-medium transition-colors text-secondary-400 hover:text-secondary-300">Brad Fletcher</a></p>
          <span class="hidden sm:inline text-neutral-600">|</span>
          <p class="text-xs text-neutral-500">v<?php echo sgs_get_theme_version(); ?></p>
        </div>
        <a href="<?php echo admin_url(); ?>" class="flex gap-2 items-center text-xs transition-colors text-neutral-400 hover:text-secondary-400 group" title="Admin Login">
          <svg class="w-3.5 h-3.5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
          </svg>
          Login
        </a>
      </div>
    </div>
  </div>
</footer>

<style>
  .footer-links {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .footer-links a {
    display: block;
    color: #d1d5db;
    font-size: 1rem;
    padding: 0.125rem 0;
    transition: color 0.2s;
    text-decoration: none;
  }

  .footer-links a:hover {
    color: #fbbf24;
  }

  .footer-links .sub-menu {
    list-style: none;
    margin-top: 0.5rem;
    margin-left: 0.5rem;
    padding: 0;
  }

  .footer-links .sub-menu li {
    margin-top: 0.25rem;
  }

  .footer-links .sub-menu a:before {
    content: '›';
    margin-right: 0.5rem;
    color: #fbbf24;
  }
</style>

<!-- Cookie Consent Banner -->
<div id="cookie-banner" class="fixed right-0 bottom-0 left-0 z-50 text-white shadow-2xl transition-transform duration-500 transform translate-y-full bg-primary-900" style="display: none;">
  <div class="py-4 container-custom md:py-6">
    <div class="flex flex-col gap-4 justify-between items-center md:flex-row">
      <div class="flex flex-1 gap-3 items-start">
        <svg class="flex-shrink-0 mt-0.5 w-6 h-6 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <div>
          <p class="text-sm md:text-base text-neutral-200">
            We use cookies to enhance your browsing experience and analyze our traffic. By clicking "Accept All", you consent to our use of cookies.
            <a href="/privacy-policy" class="underline text-secondary-400 hover:text-secondary-300">Learn more</a>
          </p>
        </div>
      </div>
      <div class="flex flex-shrink-0 gap-3">
        <button onclick="sgsCookieConsent('decline')" class="px-4 py-2 text-sm font-semibold rounded-lg border transition-colors text-neutral-300 hover:text-white border-neutral-600 hover:border-neutral-500">
          Decline
        </button>
        <button onclick="sgsCookieConsent('accept')" class="px-6 py-2 text-sm font-semibold rounded-lg shadow-md transition-colors bg-secondary-400 hover:bg-secondary-500 text-primary-900">
          Accept All
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  function sgsCookieConsent(action) {
    // Set cookie for 1 year
    const date = new Date();
    date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
    document.cookie = 'sgs_cookie_consent=' + action + '; expires=' + date.toUTCString() + '; path=/';

    // Hide banner with animation
    const banner = document.getElementById('cookie-banner');
    banner.classList.add('translate-y-full');
    setTimeout(() => {
      banner.style.display = 'none';
    }, 500);
  }

  // Check if consent already given
  function sgsCheckCookieConsent() {
    const consent = document.cookie.split('; ').find(row => row.startsWith('sgs_cookie_consent='));
    if (!consent) {
      // Show banner after 1 second delay
      setTimeout(() => {
        const banner = document.getElementById('cookie-banner');
        banner.style.display = 'block';
        setTimeout(() => {
          banner.classList.remove('translate-y-full');
        }, 100);
      }, 1000);
    }
  }

  // Run on page load
  document.addEventListener('DOMContentLoaded', sgsCheckCookieConsent);
</script>

<!-- Floating WhatsApp Button (Mobile) -->
<?php
$whatsapp_number = get_theme_mod('sgs_whatsapp_number');
if ($whatsapp_number) :
  $whatsapp_clean = sgs_sanitize_whatsapp_number($whatsapp_number);
?>
  <a href="https://wa.me/<?php echo esc_attr($whatsapp_clean); ?>"
    target="_blank"
    rel="noopener noreferrer"
    class="fixed right-6 bottom-6 z-50 p-4 text-white bg-green-500 rounded-full shadow-2xl transition-all duration-300 lg:hidden hover:bg-green-600 hover:shadow-green-500/50 hover:scale-110 group"
    aria-label="Contact us on WhatsApp">
    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
    </svg>
    <span class="flex absolute -top-0.5 -right-0.5 w-3.5 h-3.5">
      <span class="inline-flex absolute w-full h-full bg-green-400 rounded-full opacity-75 animate-ping"></span>
      <span class="inline-flex relative w-3.5 h-3.5 bg-green-400 rounded-full border-2 border-white"></span>
    </span>
  </a>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>