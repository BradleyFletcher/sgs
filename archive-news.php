<?php get_header(); ?>

<?php sgs_breadcrumbs(); ?>

<!-- News Archive Header -->
<header class="relative bg-primary-900 text-white py-16 md:py-20">
    <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-6">
                Latest News
            </h1>
            <p class="text-xl text-neutral-200 leading-relaxed max-w-2xl mx-auto">
                Stay up to date with the latest news and insights from Super Guttering Services
            </p>
        </div>
    </div>
</header>

<!-- News Grid -->
<section class="section-padding bg-white">
    <div class="container-custom">
        
        <?php if (have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group border border-neutral-200 flex flex-col h-full">
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="relative overflow-hidden aspect-video">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('news-featured', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-500')); ?>
                                </a>
                                <div class="absolute top-4 left-4">
                                    <span class="inline-block px-3 py-1 bg-secondary-400 text-primary-900 text-xs font-bold rounded-full">
                                        <?php echo get_the_date('M j, Y'); ?>
                                    </span>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="relative overflow-hidden aspect-video bg-gradient-to-br from-primary-900 to-primary-700 flex items-center justify-center">
                                <svg class="w-20 h-20 text-secondary-400 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                                <div class="absolute top-4 left-4">
                                    <span class="inline-block px-3 py-1 bg-secondary-400 text-primary-900 text-xs font-bold rounded-full">
                                        <?php echo get_the_date('M j, Y'); ?>
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <!-- Categories -->
                            <?php
                            $categories = get_the_category();
                            if ($categories) :
                            ?>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <?php foreach ($categories as $category) : ?>
                                        <span class="text-xs text-secondary-600 font-semibold">
                                            <?php echo esc_html($category->name); ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <h2 class="font-heading font-bold text-xl mb-3 text-primary-900 group-hover:text-secondary-400 transition-colors min-h-[3.5rem]">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <p class="text-neutral-600 mb-4 leading-relaxed flex-grow min-h-[4.5rem]">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </p>
                            
                            <div class="flex items-center justify-between pt-4 border-t border-neutral-200 mt-auto">
                                <div class="flex items-center text-sm text-neutral-500">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <?php the_author(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-secondary-400 hover:text-secondary-500 font-semibold text-sm group/link">
                                    Read More
                                    <svg class="w-4 h-4 ml-1 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="mt-12">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg><span class="ml-2">Previous</span>',
                    'next_text' => '<span class="mr-2">Next</span><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                    'class'     => 'flex justify-center items-center space-x-2',
                ));
                ?>
            </div>
            
        <?php else : ?>
            
            <!-- No Posts Found -->
            <div class="text-center py-16">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-neutral-100 rounded-full mb-6">
                    <svg class="w-10 h-10 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-heading font-bold text-primary-900 mb-4">No News Articles Yet</h2>
                <p class="text-neutral-600 mb-8">Check back soon for the latest updates and news!</p>
                <a href="<?php echo home_url(); ?>" class="btn-primary inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Back to Home
                </a>
            </div>
            
        <?php endif; ?>
        
    </div>
</section>

<?php get_footer(); ?>
