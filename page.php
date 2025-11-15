<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<?php sgs_breadcrumbs(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <!-- Page Header -->
    <header class="relative bg-primary-900 text-white py-16 md:py-20">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="container-custom relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-6">
                        <?php the_post_thumbnail('large', array('class' => 'rounded-xl shadow-2xl mx-auto')); ?>
                    </div>
                <?php endif; ?>
                
                <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-6">
                    <?php the_title(); ?>
                </h1>
                
                <?php if (get_the_excerpt()) : ?>
                    <p class="text-xl text-neutral-200 leading-relaxed max-w-2xl mx-auto">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="section-padding bg-white">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="service-content">
                        <?php the_content(); ?>
                    </div>
                </div>

                <!-- Sticky Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="sticky top-32">
                        <!-- Why Choose Us Card -->
                        <div class="bg-primary-900 rounded-xl p-6 shadow-lg mb-6">
                            <h3 class="text-xl font-heading font-bold text-white mb-4 flex items-center">
                                <svg class="w-5 h-5 text-secondary-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Why Choose Us?
                            </h3>
                            
                            <div class="space-y-3">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-secondary-400 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-white text-sm mb-0.5">Fully Insured & Certified</h4>
                                        <p class="text-neutral-300 text-xs">Complete peace of mind</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-secondary-400 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-white text-sm mb-0.5">Competitive Pricing</h4>
                                        <p class="text-neutral-300 text-xs">No hidden costs</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-secondary-400 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-white text-sm mb-0.5">Fast Response Times</h4>
                                        <p class="text-neutral-300 text-xs">Quick quotes & callouts</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-secondary-400 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-white text-sm mb-0.5">Quality Guaranteed</h4>
                                        <p class="text-neutral-300 text-xs">Satisfaction backed</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 bg-secondary-400 rounded-lg flex items-center justify-center mr-3">
                                        <svg class="w-4 h-4 text-primary-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-white text-sm mb-0.5">Friendly Service</h4>
                                        <p class="text-neutral-300 text-xs">Courteous team</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact CTA Card -->
                        <div class="bg-secondary-400 rounded-xl p-6 shadow-lg">
                            <h3 class="text-lg font-heading font-bold text-primary-900 mb-3">Ready to Get Started?</h3>
                            <p class="text-primary-900 text-sm mb-4">Get your free quote today!</p>
                            <a href="<?php echo home_url('/contact-us/'); ?>" class="block w-full bg-primary-900 hover:bg-primary-800 text-white text-center font-semibold py-3 px-4 rounded-lg transition-colors mb-3">
                                Get Free Quote
                            </a>
                            <a href="tel:07936764009" class="block w-full bg-white hover:bg-neutral-100 text-primary-900 text-center font-semibold py-3 px-4 rounded-lg transition-colors">
                                Call: 07936 764009
                            </a>
                        </div>
                    </div>
                </aside>
            </div>

            <!-- Move review section outside of grid -->
            <div class="max-w-4xl mx-auto mt-12">

                <!-- Random Review Section -->
                <?php
                $random_review = new WP_Query(array(
                    'post_type' => 'review',
                    'posts_per_page' => 1,
                    'orderby' => 'rand'
                ));

                if ($random_review->have_posts()) : 
                    while ($random_review->have_posts()) : $random_review->the_post();
                        $rating = get_post_meta(get_the_ID(), '_review_rating', true);
                        $reviewer_name = get_post_meta(get_the_ID(), '_reviewer_name', true);
                        $reviewer_location = get_post_meta(get_the_ID(), '_reviewer_location', true);
                ?>
                    <div class="mt-16 bg-primary-900 rounded-2xl p-8 md:p-10 relative overflow-hidden shadow-xl">
                        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                        <div class="absolute top-0 right-0 opacity-5">
                            <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        
                        <div class="relative z-10">
                            <!-- Stars -->
                            <div class="flex justify-center mb-6">
                                <?php echo sgs_display_stars($rating, 'large'); ?>
                            </div>

                            <!-- Review Text -->
                            <blockquote class="text-center mb-8">
                                <p class="text-xl md:text-2xl text-white font-medium leading-relaxed italic">
                                    "<?php echo esc_html(get_the_content()); ?>"
                                </p>
                            </blockquote>

                            <!-- Reviewer Info -->
                            <div class="flex items-center justify-center">
                                <div class="w-14 h-14 bg-secondary-400 rounded-full flex items-center justify-center text-primary-900 font-bold text-xl mr-4">
                                    <?php echo esc_html(substr($reviewer_name, 0, 1)); ?>
                                </div>
                                <div class="text-left">
                                    <p class="font-bold text-white text-lg"><?php echo esc_html($reviewer_name); ?></p>
                                    <?php if ($reviewer_location) : ?>
                                        <p class="text-neutral-300"><?php echo esc_html($reviewer_location); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    endwhile;
                    wp_reset_postdata();
                endif; 
                ?>

                <!-- CTA Section -->
                <div class="mt-16 bg-primary-900 rounded-2xl p-8 md:p-12 text-center relative overflow-hidden">
                    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl md:text-4xl font-heading font-bold text-white mb-4">Ready to Get Started?</h3>
                        <p class="text-xl text-neutral-200 mb-8 max-w-2xl mx-auto">Contact us today for a free, no-obligation quote. Our expert team is ready to help.</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="<?php echo home_url('/contact-us/'); ?>" class="btn-primary inline-flex items-center justify-center text-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                Get Free Quote
                            </a>
                            <a href="tel:07936764009" class="btn-secondary inline-flex items-center justify-center text-lg">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Call: 07936 764009
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</article>

<?php endwhile; // End of the loop ?>

<?php get_footer(); ?>
