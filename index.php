<?php get_header(); ?>

<main class="section-padding">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <?php if (have_posts()) : ?>
                    <div class="space-y-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="aspect-video overflow-hidden">
                                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="p-6">
                                    <div class="flex items-center text-sm text-secondary-500 mb-3">
                                        <time datetime="<?php echo get_the_date('c'); ?>">
                                            <?php echo get_the_date(); ?>
                                        </time>
                                        <span class="mx-2">•</span>
                                        <span><?php the_category(', '); ?></span>
                                    </div>
                                    
                                    <h2 class="text-2xl font-heading font-bold mb-3">
                                        <a href="<?php the_permalink(); ?>" class="text-secondary-900 hover:text-primary-600 transition-colors">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    
                                    <div class="text-secondary-700 mb-4">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>" class="text-primary-600 hover:text-primary-700 font-semibold inline-flex items-center">
                                        Read More
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12">
                        <?php
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('&laquo; Previous', 'sgs'),
                            'next_text' => __('Next &raquo;', 'sgs'),
                            'class'     => 'flex justify-center space-x-2',
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <div class="text-center py-12">
                        <h2 class="text-3xl font-heading font-bold mb-4">Nothing Found</h2>
                        <p class="text-secondary-600">Sorry, no posts matched your criteria.</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <?php if (is_active_sidebar('sidebar-1')) : ?>
                    <?php dynamic_sidebar('sidebar-1'); ?>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>
