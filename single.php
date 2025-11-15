<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<?php sgs_breadcrumbs(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <!-- Post Header -->
    <header class="relative bg-primary-900 text-white py-24 md:py-32 lg:py-40">
        <?php if (has_post_thumbnail()) : ?>
            <!-- Featured Image Background -->
            <div class="absolute inset-0 z-0">
                <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
            </div>
            <!-- Dark Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-primary-900/80 via-primary-900/70 to-primary-900/90 z-10"></div>
        <?php else : ?>
            <!-- Pattern Background Fallback -->
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <?php endif; ?>
        
        <div class="container-custom relative z-20">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="font-heading font-bold text-4xl md:text-5xl lg:text-6xl text-white mb-6 drop-shadow-lg">
                    <?php the_title(); ?>
                </h1>
                
                <div class="flex items-center justify-center gap-4 text-white/90">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <time datetime="<?php echo get_the_date('c'); ?>">
                            <?php echo get_the_date(); ?>
                        </time>
                    </div>
                    <span>•</span>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <?php the_author(); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>
                    
                    <?php if (get_the_tags()) : ?>
                        <div class="mt-12 pt-8 border-t border-neutral-200">
                            <h3 class="text-sm font-semibold text-neutral-600 mb-4">Tags</h3>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach (get_the_tags() as $tag) : ?>
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="inline-flex items-center px-4 py-2 bg-neutral-100 hover:bg-secondary-400 hover:text-white text-neutral-700 rounded-full text-sm font-medium transition-all">
                                        #<?php echo esc_html($tag->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="sticky top-32">
                        <!-- Share Card -->
                        <div class="bg-primary-900 rounded-xl p-6 shadow-lg mb-6">
                            <h3 class="text-lg font-heading font-bold text-white mb-4">Share Article</h3>
                            <div class="flex gap-3">
                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" class="flex-1 flex items-center justify-center py-3 bg-blue-400 hover:bg-blue-500 text-white rounded-lg transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" class="flex-1 flex items-center justify-center py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                                </a>
                            </div>
                        </div>

                        <!-- Back to News -->
                        <a href="<?php echo get_post_type_archive_link('news'); ?>" class="block bg-white border-2 border-primary-900 hover:bg-primary-900 text-primary-900 hover:text-white rounded-xl p-6 transition-all text-center font-semibold">
                            ← Back to News
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

</article>

<?php endwhile; ?>

<?php get_footer(); ?>
