<?php

/**
 * Template Name: Contact Us
 * Description: Custom contact page template
 */

get_header(); ?>

<?php sgs_breadcrumbs(); ?>

<!-- Contact Hero Section -->
<section class="relative bg-primary-900 text-white py-16 md:py-24">
  <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

  <div class="container-custom relative z-10">
    <div class="max-w-3xl mx-auto text-center">
      <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl mb-6 text-white">
        Get Your <span class="text-secondary-400">Free Quote</span>
      </h1>
      <p class="text-xl text-neutral-200">
        Ready to protect your property? Contact us today for a free, no-obligation quote. Our friendly team is here to help.
      </p>
    </div>
  </div>
</section>

<!-- Contact Content Section -->
<section class="section-padding bg-white">
  <div class="container-custom">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Contact Form -->
      <div class="bg-neutral-50 rounded-2xl p-8 md:p-10 shadow-lg">
        <h2 class="text-3xl font-heading font-bold mb-6 text-primary-900">Send Us a Message</h2>

        <?php
        // Display success/error messages
        if (isset($_GET['contact'])) {
          $status = $_GET['contact'];
          if ($status === 'success') {
            echo '<div class="mb-6 border-l-4 border-green-500 bg-green-50 text-green-800 px-6 py-4 rounded-lg shadow-md">
                                <strong>✓ Success!</strong> Your message has been sent. We\'ll get back to you soon!
                              </div>';
          } elseif ($status === 'error') {
            echo '<div class="mb-6 border-l-4 border-red-500 bg-red-50 text-red-800 px-6 py-4 rounded-lg shadow-md">
                                <strong>⚠️ Error!</strong> Please fill in all required fields.
                              </div>';
          } elseif ($status === 'invalid_email') {
            echo '<div class="mb-6 border-l-4 border-red-500 bg-red-50 text-red-800 px-6 py-4 rounded-lg shadow-md">
                                <strong>⚠️ Error!</strong> Please enter a valid email address.
                              </div>';
          } elseif ($status === 'failed') {
            echo '<div class="mb-6 border-l-4 border-red-500 bg-red-50 text-red-800 px-6 py-4 rounded-lg shadow-md">
                                <strong>✗ Error!</strong> Failed to send message. Please try again or contact us directly.
                              </div>';
          } elseif ($status === 'spam') {
            echo '<div class="mb-6 border-l-4 border-red-500 bg-red-50 text-red-800 px-6 py-4 rounded-lg shadow-md">
                                <strong>⚠️ Error!</strong> Please wait a moment and try again, or contact us directly.
                              </div>';
          }
        }
        ?>

        <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" class="space-y-6">
          <input type="hidden" name="action" value="sgs_contact_form">
          <?php wp_nonce_field('sgs_contact_form', 'contact_nonce'); ?>
          <input type="hidden" name="contact_started_at" value="<?php echo esc_attr(time()); ?>">
          <div class="absolute left-[-9999px] top-auto w-px h-px overflow-hidden" aria-hidden="true">
            <label for="contact_website">Website</label>
            <input type="text" id="contact_website" name="contact_website" value="" tabindex="-1" autocomplete="off">
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-semibold mb-2 text-primary-900">Name *</label>
              <input type="text" name="contact_name" class="w-full px-4 py-3 border-2 border-neutral-300 rounded-lg focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400 transition-all" required>
            </div>
            <div>
              <label class="block text-sm font-semibold mb-2 text-primary-900">Phone *</label>
              <input type="tel" name="contact_phone" class="w-full px-4 py-3 border-2 border-neutral-300 rounded-lg focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400 transition-all" required>
            </div>
          </div>

          <div>
            <label class="block text-sm font-semibold mb-2 text-primary-900">Email *</label>
            <input type="email" name="contact_email" class="w-full px-4 py-3 border-2 border-neutral-300 rounded-lg focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400 transition-all" required>
          </div>

          <div>
            <label class="block text-sm font-semibold mb-2 text-primary-900">Service Required</label>
            <select name="contact_service" class="w-full px-4 py-3 border-2 border-neutral-300 rounded-lg focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400 transition-all">
              <option>Gutter Cleaning</option>
              <option>Gutter Repairs</option>
              <option>Gutter Installation</option>
              <option>Maintenance Plan</option>
              <option>Fascia & Soffit</option>
              <option>Emergency Repair</option>
              <option>Drone Inspection</option>
              <option>Other</option>
            </select>
          </div>

          <div>
            <label class="block text-sm font-semibold mb-2 text-primary-900">Message</label>
            <textarea name="contact_message" rows="5" class="w-full px-4 py-3 border-2 border-neutral-300 rounded-lg focus:ring-2 focus:ring-secondary-400 focus:border-secondary-400 transition-all" placeholder="Tell us about your project..."></textarea>
          </div>

          <button type="submit" class="bg-secondary-400 hover:bg-secondary-500 text-primary-900 font-semibold py-3 px-8 rounded-lg transition-colors duration-200 shadow-md hover:shadow-lg w-full sm:w-auto inline-flex items-center justify-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            Send Message
          </button>
        </form>
      </div>

      <!-- Contact Information -->
      <div class="space-y-8">
        <div>
          <h2 class="text-3xl font-heading font-bold mb-6 text-primary-900">Get In Touch</h2>
          <p class="text-lg text-neutral-600 mb-8">
            Have a question or ready to schedule a service? We're here to help! Reach out to us using any of the methods below.
          </p>
        </div>

        <!-- Contact Cards -->
        <div class="space-y-4">
          <a href="tel:07936764009" class="flex items-start p-6 bg-primary-900 hover:bg-primary-800 rounded-xl transition-all group shadow-md hover:shadow-lg">
            <div class="flex-shrink-0 w-12 h-12 bg-secondary-400 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
              <svg class="w-6 h-6 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm text-secondary-400 font-semibold mb-1">Call Us</p>
              <p class="text-2xl font-bold text-white mb-2">07936 764009</p>
              <p class="text-neutral-300 text-sm mt-1">Mon-Sat: 8am-6pm</p>
            </div>
          </a>

          <a href="mailto:info@superguttering.co.uk" class="flex items-start p-6 bg-primary-900 hover:bg-primary-800 rounded-xl transition-all group shadow-md hover:shadow-lg">
            <div class="flex-shrink-0 w-12 h-12 bg-secondary-400 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
              <svg class="w-6 h-6 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm text-secondary-400 font-semibold mb-1">Email Us</p>
              <p class="text-white font-bold text-lg break-all">info@superguttering.co.uk</p>
              <p class="text-neutral-300 text-sm mt-1">We'll respond within 24 hours</p>
            </div>
          </a>

          <div class="flex items-start p-6 bg-primary-900 rounded-xl shadow-md">
            <div class="flex-shrink-0 w-12 h-12 bg-secondary-400 rounded-lg flex items-center justify-center">
              <svg class="w-6 h-6 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm text-secondary-400 font-semibold mb-1">Visit Us</p>
              <p class="text-white font-bold">Salisbury, Wiltshire</p>
              <p class="text-neutral-300 text-sm mt-1">Serving Salisbury & surrounding areas</p>
            </div>
          </div>
        </div>

        <!-- Emergency Notice -->
        <div class="bg-secondary-400 rounded-xl p-6 shadow-lg">
          <div class="flex items-start">
            <svg class="w-6 h-6 text-primary-900 mr-3 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div>
              <h3 class="font-bold text-primary-900 mb-2">24/7 Emergency Service</h3>
              <p class="text-primary-900 text-sm">
                Gutter emergency? We're here to help! Call us anytime for urgent repairs and emergency services.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>