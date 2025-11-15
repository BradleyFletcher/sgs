<?php get_header(); ?>

<!-- Hero Section with Video Background -->
<section class="relative min-h-[90vh] flex items-center overflow-hidden">
  <!-- Video Background -->
  <div class="absolute inset-0 z-0">
    <video
      autoplay
      muted
      loop
      playsinline
      class="object-cover absolute inset-0 w-full h-full">
      <source src="<?php echo get_template_directory_uri(); ?>/assets/img/drone-footage.mp4" type="video/mp4">
    </video>
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-primary-900/95 via-primary-900/85 to-primary-900/70"></div>
    <!-- Animated Pattern Overlay -->
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 py-20 container-custom">
    <div class="mx-auto max-w-4xl text-center">
      <!-- Badge -->
      <div class="inline-flex items-center px-4 py-2 mb-6 rounded-full border backdrop-blur-sm bg-secondary-400/20 border-secondary-400/30 animate-fade-in">
        <svg class="mr-2 w-5 h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span class="text-sm font-semibold text-secondary-400">Salisbury's Trusted Guttering Experts</span>
      </div>

      <!-- Main Heading -->
      <h1 class="mb-6 text-5xl font-bold leading-tight text-white font-heading md:text-6xl lg:text-7xl">
        Professional <span class="text-secondary-400">Guttering</span> Services
      </h1>

      <!-- Subheading -->
      <p class="mx-auto mb-8 max-w-2xl text-xl leading-relaxed md:text-2xl text-neutral-200">
        Expert gutter cleaning, repairs, and maintenance protecting homes and businesses across Salisbury and surrounding areas.
      </p>

      <!-- Features List -->
      <div class="grid grid-cols-1 gap-4 mx-auto mb-10 max-w-3xl md:grid-cols-3">
        <div class="flex justify-center items-center text-white">
          <svg class="flex-shrink-0 mr-3 w-6 h-6 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="font-medium">Fully Insured</span>
        </div>
        <div class="flex justify-center items-center text-white">
          <svg class="flex-shrink-0 mr-3 w-6 h-6 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="font-medium">24/7 Emergency Service</span>
        </div>
        <div class="flex justify-center items-center text-white">
          <svg class="flex-shrink-0 mr-3 w-6 h-6 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span class="font-medium">Free Quotes</span>
        </div>
      </div>

      <!-- CTA Buttons -->
      <div class="flex flex-col gap-4 justify-center sm:flex-row">
        <a href="<?php echo home_url('/contact-us/'); ?>" class="inline-flex justify-center items-center text-lg btn-primary group">
          <svg class="mr-2 w-5 h-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
          </svg>
          Get Free Quote
        </a>
        <a href="tel:07936764009" class="inline-flex justify-center items-center text-lg btn-secondary group">
          <svg class="mr-2 w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
          </svg>
          Call: 07936 764009
        </a>
      </div>
    </div>
  </div>

  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 z-10 animate-bounce transform -translate-x-1/2">
    <svg class="w-6 h-6 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
    </svg>
  </div>
</section>

<!-- About Us Section -->
<section class="bg-white section-padding">
  <div class="container-custom">
    <div class="grid grid-cols-1 gap-12 items-center lg:grid-cols-2">
      <!-- Content -->
      <div class="fade-in-left">
        <h2 class="mb-6 text-4xl font-bold md:text-5xl font-heading text-primary-900">
          Hi, I'm <span class="text-secondary-400">Karl West</span>
        </h2>
        <p class="mb-6 text-lg leading-relaxed text-neutral-600">
          I'm a sole trader with over 10 years of experience serving Salisbury and the surrounding areas. When you contact Super Guttering Services, you're speaking directly to me – and I'll be the one doing the work on your property.
        </p>
        <p class="mb-6 text-lg leading-relaxed text-neutral-600">
          I understand that your gutters play a crucial role in protecting your property from water damage. That's why I'm committed to providing top-quality workmanship, using the best materials, and delivering exceptional results every time.
        </p>

        <!-- Warning Box -->
        <div class="p-6 mb-8 rounded-lg border-l-4 bg-secondary-400/10 border-secondary-400 fade-in-up">
          <div class="flex items-start">
            <svg class="flex-shrink-0 mt-0.5 mr-3 w-6 h-6 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
            <div>
              <h4 class="mb-2 font-bold text-primary-900">Beware of Fake "Local" Companies</h4>
              <p class="text-sm leading-relaxed text-neutral-700">
                Many gutter companies pose as small local businesses but actually send out third-party contractors to do the work – often at inflated prices. With me, you get a genuine local tradesman who takes pride in every job. No middlemen, no surprises, just honest work at fair prices.
              </p>
            </div>
          </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6 mb-8" data-stagger="150">
          <div class="p-4 text-center rounded-xl bg-neutral-50 scale-in">
            <div class="mb-1 text-3xl font-bold text-secondary-400" data-counter="10" data-suffix="+">10+</div>
            <div class="text-sm text-neutral-600">Years Experience</div>
          </div>
          <div class="p-4 text-center rounded-xl bg-neutral-50 scale-in">
            <div class="mb-1 text-3xl font-bold text-secondary-400" data-counter="500" data-suffix="+">500+</div>
            <div class="text-sm text-neutral-600">Happy Customers</div>
          </div>
          <div class="p-4 text-center rounded-xl bg-neutral-50">
            <div class="mb-1 text-3xl font-bold text-secondary-400">24/7</div>
            <div class="text-sm text-neutral-600">Emergency Service</div>
          </div>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col gap-4 sm:flex-row">
          <a href="<?php echo home_url('/contact-us/'); ?>" class="inline-flex justify-center items-center btn-primary">
            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            Get Free Quote
          </a>
          <a href="tel:07936764009" class="inline-flex justify-center items-center btn-secondary">
            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            Call: 07936 764009
          </a>
        </div>
      </div>

      <!-- Image/Features -->
      <div class="relative fade-in-right">
        <!-- Main Feature Card -->
        <div class="p-8 rounded-2xl shadow-2xl bg-primary-900">
          <h3 class="mb-6 text-2xl font-bold text-white font-heading">Why Choose Us?</h3>

          <div class="space-y-4" data-stagger="100">
            <div class="flex items-start fade-in-up">
              <div class="flex flex-shrink-0 justify-center items-center mr-4 w-10 h-10 rounded-lg bg-secondary-400">
                <svg class="w-5 h-5 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <div>
                <h4 class="mb-1 font-semibold text-white">Fully Insured & Certified</h4>
                <p class="text-sm text-neutral-300">Complete peace of mind with comprehensive insurance coverage</p>
              </div>
            </div>

            <div class="flex items-start fade-in-up">
              <div class="flex flex-shrink-0 justify-center items-center mr-4 w-10 h-10 rounded-lg bg-secondary-400">
                <svg class="w-5 h-5 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="mb-1 font-semibold text-white">Competitive Pricing</h4>
                <p class="text-sm text-neutral-300">Fair, transparent quotes with no hidden costs</p>
              </div>
            </div>

            <div class="flex items-start fade-in-up">
              <div class="flex flex-shrink-0 justify-center items-center mr-4 w-10 h-10 rounded-lg bg-secondary-400">
                <svg class="w-5 h-5 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
              </div>
              <div>
                <h4 class="mb-1 font-semibold text-white">Fast Response Times</h4>
                <p class="text-sm text-neutral-300">Quick quotes and emergency callouts available</p>
              </div>
            </div>

            <div class="flex items-start fade-in-up">
              <div class="flex flex-shrink-0 justify-center items-center mr-4 w-10 h-10 rounded-lg bg-secondary-400">
                <svg class="w-5 h-5 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="mb-1 font-semibold text-white">Quality Guaranteed</h4>
                <p class="text-sm text-neutral-300">All work backed by our satisfaction guarantee</p>
              </div>
            </div>

            <div class="flex items-start fade-in-up">
              <div class="flex flex-shrink-0 justify-center items-center mr-4 w-10 h-10 rounded-lg bg-secondary-400">
                <svg class="w-5 h-5 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <div>
                <h4 class="mb-1 font-semibold text-white">Friendly Service</h4>
                <p class="text-sm text-neutral-300">Professional, courteous team you can trust</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Floating Badge -->
        <div class="flex absolute -top-6 -right-6 justify-center items-center w-24 h-24 rounded-full shadow-xl transform rotate-12 bg-secondary-400">
          <div class="text-center transform -rotate-12">
            <div class="text-2xl font-bold text-primary-900">5★</div>
            <div class="text-xs font-semibold text-primary-900">Rated</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="section-padding bg-neutral-50">
  <div class="container-custom">
    <div class="mb-16 text-center fade-in-up">
      <span class="inline-block px-4 py-2 mb-4 text-sm font-semibold rounded-full bg-secondary-400/10 text-secondary-400">What We Do</span>
      <h2 class="mb-4 font-bold font-heading text-primary-900">Our Services</h2>
      <p class="mx-auto max-w-2xl text-xl text-neutral-600">Comprehensive guttering solutions to keep your property protected and looking its best</p>
    </div>

    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3" data-stagger="150">
      <!-- Service Card 1 -->
      <div class="overflow-hidden bg-white rounded-2xl border shadow-md transition-all duration-300 group hover:shadow-2xl border-neutral-200 hover:border-secondary-400 fade-in-up">
        <div class="p-8">
          <div class="flex justify-center items-center mb-6 w-16 h-16 rounded-xl transition-transform bg-secondary-400 group-hover:scale-110">
            <svg class="w-8 h-8 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold font-heading text-primary-900">Gutter Cleaning</h3>
          <p class="mb-6 leading-relaxed text-neutral-600">Professional cleaning to remove debris, leaves, and blockages. Keep your gutters flowing freely.</p>
          <a href="<?php echo home_url('/gutter-cleaning/'); ?>" class="inline-flex items-center font-semibold transition-colors text-secondary-400 hover:text-secondary-500">
            Learn More
            <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Service Card 2 -->
      <div class="overflow-hidden bg-white rounded-2xl border shadow-md transition-all duration-300 group hover:shadow-2xl border-neutral-200 hover:border-secondary-400 fade-in-up">
        <div class="p-8">
          <div class="flex justify-center items-center mb-6 w-16 h-16 rounded-xl transition-transform bg-secondary-400 group-hover:scale-110">
            <svg class="w-8 h-8 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold font-heading text-primary-900">Gutter Repairs</h3>
          <p class="mb-6 leading-relaxed text-neutral-600">Expert repairs for leaks, cracks, and damaged sections. Fast, reliable service to protect your property.</p>
          <a href="<?php echo home_url('/gutter-installations/'); ?>" class="inline-flex items-center font-semibold transition-colors text-secondary-400 hover:text-secondary-500">
            Learn More
            <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>

      <!-- Service Card 3 -->
      <div class="overflow-hidden bg-white rounded-2xl border shadow-md transition-all duration-300 group hover:shadow-2xl border-neutral-200 hover:border-secondary-400 fade-in-up">
        <div class="p-8">
          <div class="flex justify-center items-center mb-6 w-16 h-16 rounded-xl transition-transform bg-secondary-400 group-hover:scale-110">
            <svg class="w-8 h-8 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
          </div>
          <h3 class="mb-3 text-2xl font-bold font-heading text-primary-900">Drone Services</h3>
          <p class="mb-6 leading-relaxed text-neutral-600">Advanced drone inspections for hard-to-reach areas. Get a complete view of your guttering system.</p>
          <a href="<?php echo home_url('/drone-services/'); ?>" class="inline-flex items-center font-semibold transition-colors text-secondary-400 hover:text-secondary-500">
            Learn More
            <svg class="ml-2 w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Customer Reviews Section -->
<section class="bg-white section-padding">
  <div class="container-custom">
    <div class="mb-12 text-center fade-in-up">
      <h2 class="mb-4 text-4xl font-bold md:text-5xl font-heading text-primary-900">
        What Our <span class="text-secondary-400">Customers Say</span>
      </h2>
      <p class="mx-auto max-w-2xl text-xl text-neutral-600">
        Don't just take our word for it. See what our satisfied customers have to say about our services.
      </p>
    </div>

    <?php
    $reviews = new WP_Query(array(
      'post_type' => 'review',
      'posts_per_page' => 6,
      'orderby' => 'date',
      'order' => 'DESC'
    ));

    if ($reviews->have_posts()) : ?>
      <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3" data-stagger="150">
        <?php while ($reviews->have_posts()) : $reviews->the_post();
          $rating = get_post_meta(get_the_ID(), '_review_rating', true);
          $reviewer_name = get_post_meta(get_the_ID(), '_reviewer_name', true);
          $reviewer_location = get_post_meta(get_the_ID(), '_reviewer_location', true);
        ?>
          <div class="p-6 bg-white rounded-xl shadow-md transition-shadow hover:shadow-xl fade-in-up">
            <!-- Rating Stars -->
            <div class="mb-4">
              <?php echo sgs_display_stars($rating); ?>
            </div>

            <!-- Review Content -->
            <div class="mb-6">
              <p class="italic leading-relaxed text-neutral-700">
                "<?php echo esc_html(get_the_content()); ?>"
              </p>
            </div>

            <!-- Reviewer Info -->
            <div class="flex items-center pt-4 border-t border-neutral-200">
              <div class="flex justify-center items-center mr-3 w-12 h-12 text-lg font-bold rounded-full bg-secondary-400 text-primary-900">
                <?php echo esc_html(substr($reviewer_name, 0, 1)); ?>
              </div>
              <div>
                <p class="font-semibold text-primary-900"><?php echo esc_html($reviewer_name); ?></p>
                <?php if ($reviewer_location) : ?>
                  <p class="text-sm text-neutral-500"><?php echo esc_html($reviewer_location); ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <div class="py-12 text-center">
        <p class="text-neutral-500">No reviews yet. Check back soon!</p>
      </div>
    <?php endif;
    wp_reset_postdata(); ?>

  </div>
</section>

<!-- Latest News Section -->
<section class="section-padding bg-neutral-50">
  <div class="container-custom">
    <div class="mb-12 text-center fade-in-up">
      <div class="inline-flex items-center px-4 py-2 mb-4 rounded-full border bg-secondary-400/10 border-secondary-400/20">
        <svg class="mr-2 w-5 h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
        </svg>
        <span class="text-sm font-semibold text-secondary-600">News & Insights</span>
      </div>
      <h2 class="mb-4 text-3xl font-bold md:text-4xl lg:text-5xl font-heading text-primary-900">Latest Updates</h2>
      <p class="mx-auto max-w-2xl text-lg md:text-xl text-neutral-600">Stay informed with expert tips, industry news, and helpful insights</p>
    </div>

    <?php
    $news_query = new WP_Query(array(
      'post_type'      => 'news',
      'posts_per_page' => 3,
      'orderby'        => 'rand',
      'post_status'    => 'publish'
    ));

    if ($news_query->have_posts()) : ?>
      <div class="grid grid-cols-1 gap-8 md:grid-cols-3" data-stagger="150">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <article class="overflow-hidden bg-white rounded-xl border shadow-lg transition-all duration-300 hover:shadow-2xl group border-neutral-200 fade-in-up">

            <?php if (has_post_thumbnail()) : ?>
              <div class="overflow-hidden relative aspect-video">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500')); ?>
                </a>
                <div class="absolute top-4 left-4">
                  <span class="inline-block px-3 py-1 text-xs font-bold rounded-full bg-secondary-400 text-primary-900">
                    <?php echo get_the_date('M j, Y'); ?>
                  </span>
                </div>
              </div>
            <?php else : ?>
              <div class="flex overflow-hidden relative justify-center items-center bg-gradient-to-br aspect-video from-primary-900 to-primary-700">
                <svg class="w-20 h-20 opacity-50 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <div class="absolute top-4 left-4">
                  <span class="inline-block px-3 py-1 text-xs font-bold rounded-full bg-secondary-400 text-primary-900">
                    <?php echo get_the_date('M j, Y'); ?>
                  </span>
                </div>
              </div>
            <?php endif; ?>

            <div class="p-6">
              <h3 class="mb-3 text-xl font-bold transition-colors font-heading text-primary-900 group-hover:text-secondary-400">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>

              <p class="mb-4 leading-relaxed text-neutral-600">
                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
              </p>

              <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-semibold text-secondary-400 hover:text-secondary-500 group/link">
                Read More
                <svg class="ml-1 w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="mt-10 text-center">
        <a href="<?php echo get_post_type_archive_link('news'); ?>" class="inline-flex items-center px-6 py-3 font-semibold text-white rounded-lg transition-colors bg-primary-900 hover:bg-primary-800">
          View All News
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </div>
    <?php endif;
    wp_reset_postdata(); ?>
  </div>
</section>

<!-- CTA Banner Section -->
<section class="bg-white section-padding">
  <div class="container-custom">
    <!-- CTA Banner -->
    <div class="overflow-hidden relative p-8 text-center rounded-2xl bg-primary-900 md:p-12 scale-in">
      <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
      <div class="relative z-10">
        <h3 class="mb-4 text-3xl font-bold text-white md:text-4xl font-heading">Need a Custom Solution?</h3>
        <p class="mx-auto mb-8 max-w-2xl text-xl text-neutral-200">Every property is unique. Contact us for a personalized quote tailored to your specific guttering needs.</p>
        <a href="<?php echo home_url('/contact-us/'); ?>" class="inline-flex items-center text-lg btn-primary">
          <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
          </svg>
          Get Your Free Quote
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>