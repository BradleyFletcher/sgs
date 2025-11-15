<?php

/**
 * Super Guttering Services Theme Functions
 * 
 * @package SGS
 * @version 1.0.0
 * @author Brad Fletcher
 * 
 * ============================================================================
 * IMPORTANT: When adding, removing, or modifying functions, UPDATE THE INDEX!
 * ============================================================================
 * 
 * TABLE OF CONTENTS
 * ============================================================================
 * 
 * 1. THEME SETUP & CONFIGURATION
 *    - sgs_theme_setup()                    Line ~24  | Theme support features
 *    - sgs_content_width()                  Line ~52  | Set content width
 * 
 * 2. IMAGE OPTIMIZATION
 *    - sgs_enable_webp_support()            Line ~67  | Enable WebP format
 *    - sgs_optimize_image_quality()         Line ~75  | Set JPEG quality to 85%
 *    - sgs_add_image_dimensions()           Line ~87  | Add width/height for CLS
 *    - sgs_set_max_image_size()             Line ~119 | 5MB upload limit
 *    - sgs_enable_responsive_images()       Line ~138 | Enable srcset
 *    - sgs_disable_unused_image_sizes()     Line ~151 | Remove unused sizes
 *    - sgs_image_optimization_notice()      Line ~165 | Admin notice
 * 
 * 3. ASSETS & ENQUEUE
 *    - sgs_enqueue_assets()                 Line ~177 | Scripts & styles
 * 
 * 4. WIDGET AREAS
 *    - sgs_widgets_init()                   Line ~211 | Register sidebars
 * 
 * 5. CUSTOM POST TYPES
 *    - sgs_register_custom_post_types()     Line ~239 | Reviews, News, Services
 * 
 * 6. CUSTOM TAXONOMIES
 *    - sgs_register_custom_taxonomies()     Line ~314 | Service categories
 * 
 * 7. CUSTOMIZER SETTINGS
 *    - sgs_customize_register()             Line ~339 | Theme customizer options
 * 
 * 8. NAVIGATION & MENUS
 *    - sgs_register_menus()                 Line ~363 | Menu locations
 * 
 * 9. REVIEWS FUNCTIONALITY
 *    - sgs_add_review_meta_boxes()          Line ~375 | Review rating meta box
 *    - sgs_save_review_meta()               Line ~403 | Save review data
 *    - sgs_display_stars()                  Line ~426 | Star rating display
 * 
 * 10. SEO META TAGS
 *     - sgs_add_meta_description()          Line ~447 | Meta descriptions
 *     - sgs_add_twitter_cards()             Line ~478 | Twitter Card tags
 *     - sgs_add_image_alt_text()            Line ~510 | Auto alt text
 * 
 * 11. PERFORMANCE OPTIMIZATIONS
 *     - Remove WordPress bloat              Line ~523 | Generator, RSD, etc.
 *     - sgs_disable_emojis()                Line ~529 | Remove emoji scripts
 *     - sgs_disable_embeds()                Line ~1212| Remove oEmbed
 *     - sgs_remove_query_strings()          Line ~1220| Better caching
 *     - sgs_add_async_defer_attribute()     Line ~1231| Defer JS loading
 *     - sgs_add_lazy_loading()              Line ~1245| Lazy load images
 *     - sgs_dns_prefetch()                  Line ~1257| DNS prefetch
 * 
 * 12. SEO ENHANCEMENTS
 *     - sgs_add_open_graph_tags()           Line ~1269| Open Graph meta
 *     - sgs_add_canonical()                 Line ~1313| Canonical URLs
 *     - sgs_custom_excerpt_length()         Line ~1324| Excerpt for SEO
 *     - sgs_add_schema_markup()             Line ~1331| Schema.org data
 * 
 * 13. UTILITY FUNCTIONS
 *     - sgs_breadcrumbs()                   Line ~541 | Breadcrumb navigation
 *     - sgs_estimated_reading_time()        Line ~693 | Reading time calc
 * 
 * 14. NEWS POST TYPE
 *     - sgs_add_news_meta_boxes()           Line ~713 | News meta boxes
 *     - sgs_render_news_featured_meta()     Line ~732 | Featured checkbox
 *     - sgs_render_news_seo_meta()          Line ~746 | SEO fields
 *     - sgs_save_news_meta()                Line ~781 | Save news meta
 *     - sgs_save_news_seo_meta()            Line ~801 | Save SEO meta
 *     - sgs_add_news_meta_tags()            Line ~815 | News meta tags
 * 
 * 15. SOCIAL MEDIA
 *     - sgs_social_icons()                  Line ~555 | Social icon links
 *     - sgs_footer_social_icons()           Line ~1290| Footer social icons
 * 
 * 16. SECURITY ENHANCEMENTS
 *     - Remove WP version                   Line ~1346| Hide WordPress version
 *     - Disable XML-RPC                     Line ~1352| Prevent brute force
 *     - sgs_add_security_headers()          Line ~1380| Security headers
 *     - sgs_check_login_attempts()          Line ~1417| Limit login attempts
 *     - sgs_hide_login_errors()             Line ~1459| Hide login errors
 *     - sgs_disable_user_enumeration()      Line ~1468| Prevent username discovery
 *     - sgs_sanitize_file_upload()          Line ~1513| Sanitize uploads
 *     - sgs_enforce_strong_passwords()      Line ~1532| Force strong passwords
 * 
 * 17. VERSION CONTROL
 *     - sgs_get_theme_version()             Line ~1590| Get version from file
 * 
 * ============================================================================
 * MAINTENANCE INSTRUCTIONS
 * ============================================================================
 * 
 * When modifying this file:
 * 1. Add new functions in the appropriate section
 * 2. Update the line numbers in the index above
 * 3. Add a brief description of the function's purpose
 * 4. Use clear, descriptive function names prefixed with 'sgs_'
 * 5. Add docblocks to all functions
 * 6. Follow WordPress coding standards
 * 
 * ============================================================================
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * ============================================================================
 * 1. THEME SETUP & CONFIGURATION
 * ============================================================================
 */

/**
 * Theme Setup
 */
function sgs_theme_setup()
{
  // Add default posts and comments RSS feed links to head
  add_theme_support('automatic-feed-links');

  // Let WordPress manage the document title
  add_theme_support('title-tag');

  // Enable support for Post Thumbnails
  add_theme_support('post-thumbnails');

  // Add support for custom logo
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 300,
    'flex-height' => true,
    'flex-width'  => true,
  ));

  // Register navigation menus
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'sgs'),
    'footer'  => __('Footer Menu', 'sgs'),
  ));

  // Add support for HTML5 markup
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));

  // Add support for custom background
  add_theme_support('custom-background');

  // Add support for editor styles
  add_theme_support('editor-styles');

  // Set custom image sizes for optimization
  add_image_size('news-thumbnail', 400, 300, true); // For news listings
  add_image_size('news-featured', 1200, 600, true); // For single news posts
  add_image_size('service-card', 600, 400, true); // For service cards

  // Enable support for WebP images (WordPress 5.8+)
  add_filter('wp_image_editors', 'sgs_enable_webp_support');
}
add_action('after_setup_theme', 'sgs_theme_setup');

/**
 * ============================================================================
 * 2. IMAGE OPTIMIZATION
 * ============================================================================
 */

/**
 * Enable WebP Support
 */
function sgs_enable_webp_support($editors)
{
  return array('WP_Image_Editor_GD', 'WP_Image_Editor_Imagick');
}

/**
 * Optimize Image Quality
 */
function sgs_optimize_image_quality($quality, $mime_type)
{
  // Reduce JPEG quality to 85% for better file size
  if ($mime_type === 'image/jpeg') {
    return 85;
  }
  return $quality;
}
add_filter('wp_editor_set_quality', 'sgs_optimize_image_quality', 10, 2);
add_filter('jpeg_quality', 'sgs_optimize_image_quality', 10, 2);

/**
 * Add Width and Height Attributes to Images
 */
function sgs_add_image_dimensions($content)
{
  // This helps with Cumulative Layout Shift (CLS) - important for SEO
  if (preg_match_all('/<img[^>]+>/i', $content, $images)) {
    foreach ($images[0] as $image) {
      // Skip if already has width/height
      if (strpos($image, 'width=') !== false && strpos($image, 'height=') !== false) {
        continue;
      }

      // Get image URL
      if (preg_match('/src=["\']([^"\']+)["\']/', $image, $url)) {
        $image_url = $url[1];
        $attachment_id = attachment_url_to_postid($image_url);

        if ($attachment_id) {
          $metadata = wp_get_attachment_metadata($attachment_id);
          if (isset($metadata['width']) && isset($metadata['height'])) {
            $new_image = str_replace('<img', '<img width="' . $metadata['width'] . '" height="' . $metadata['height'] . '"', $image);
            $content = str_replace($image, $new_image, $content);
          }
        }
      }
    }
  }
  return $content;
}
add_filter('the_content', 'sgs_add_image_dimensions', 20);

/**
 * Set Maximum Image Upload Size
 */
function sgs_set_max_image_size($file)
{
  $size = $file['size'];
  $type = $file['type'];

  // 5MB limit for images
  $limit = 5 * 1024 * 1024;

  if (strpos($type, 'image/') === 0 && $size > $limit) {
    $file['error'] = 'Image files must be smaller than 5MB. Please optimize your image before uploading.';
  }

  return $file;
}
add_filter('wp_handle_upload_prefilter', 'sgs_set_max_image_size');

/**
 * Add Srcset for Responsive Images
 */
function sgs_enable_responsive_images()
{
  // WordPress handles this automatically, but ensure it's enabled
  add_filter('wp_calculate_image_srcset', '__return_true');
  add_filter('max_srcset_image_width', function () {
    return 2048; // Max width for srcset
  });
}
add_action('init', 'sgs_enable_responsive_images');

/**
 * Disable Unused Image Sizes (Save Server Space)
 */
function sgs_disable_unused_image_sizes($sizes)
{
  // Remove medium_large if not needed
  unset($sizes['medium_large']);
  unset($sizes['1536x1536']);
  unset($sizes['2048x2048']);

  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgs_disable_unused_image_sizes');

/**
 * Add Image Optimization Notice to Media Library
 */
function sgs_image_optimization_notice()
{
  $screen = get_current_screen();
  if ($screen && $screen->id === 'upload') {
    echo '<div class="notice notice-info"><p><strong>Image Optimization Tips:</strong> For best performance, upload images under 5MB. Images are automatically optimized to 85% quality and lazy-loaded on the frontend.</p></div>';
  }
}
add_action('admin_notices', 'sgs_image_optimization_notice');

/**
 * ============================================================================
 * 3. ASSETS & ENQUEUE
 * ============================================================================
 */

/**
 * Enqueue scripts and styles
 */
function sgs_enqueue_assets()
{
  // Enqueue Tailwind CSS with cache busting
  wp_enqueue_style('sgs-tailwind', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/css/style.css'));

  // Enqueue Article CSS for single posts only
  if (is_singular()) {
    wp_enqueue_style('sgs-article', get_template_directory_uri() . '/assets/css/article.css', array('sgs-tailwind'), '1.0.0');
  }

  // Preconnect to Google Fonts for faster loading
  add_action('wp_head', function () {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
  }, 1);

  // Enqueue Google Fonts with display=swap for better performance
  wp_enqueue_style('sgs-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@600;700;800&display=swap', array(), null);

  // Enqueue mobile menu script with defer
  wp_enqueue_script('sgs-mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), '1.0.0', true);
  wp_script_add_data('sgs-mobile-menu', 'defer', true);

  // Enqueue scroll animations script with defer
  wp_enqueue_script('sgs-scroll-animations', get_template_directory_uri() . '/assets/js/scroll-animations.js', array(), '1.0.0', true);
  wp_script_add_data('sgs-scroll-animations', 'defer', true);

  // Enqueue comment reply script
  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'sgs_enqueue_assets');

/**
 * ============================================================================
 * 4. WIDGET AREAS
 * ============================================================================
 */

/**
 * Register widget areas
 */
function sgs_widgets_init()
{
  register_sidebar(array(
    'name'          => __('Sidebar', 'sgs'),
    'id'            => 'sidebar-1',
    'description'   => __('Add widgets here to appear in your sidebar.', 'sgs'),
    'before_widget' => '<section id="%1$s" class="widget mb-8 %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="mb-4 text-xl font-bold widget-title">',
    'after_title'   => '</h3>',
  ));

  register_sidebar(array(
    'name'          => __('Footer 1', 'sgs'),
    'id'            => 'footer-1',
    'description'   => __('Add widgets here to appear in your footer.', 'sgs'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="mb-4 text-lg font-bold">',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => __('Footer 2', 'sgs'),
    'id'            => 'footer-2',
    'description'   => __('Add widgets here to appear in your footer.', 'sgs'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="mb-4 text-lg font-bold">',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => __('Footer 3', 'sgs'),
    'id'            => 'footer-3',
    'description'   => __('Add widgets here to appear in your footer.', 'sgs'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="mb-4 text-lg font-bold">',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init', 'sgs_widgets_init');

/**
 * ============================================================================
 * 5. CUSTOM POST TYPES
 * ============================================================================
 */

/**
 * Register News Custom Post Type
 */
function sgs_register_news_post_type()
{
  $labels = array(
    'name'               => 'News',
    'singular_name'      => 'News Article',
    'menu_name'          => 'News',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Article',
    'edit_item'          => 'Edit Article',
    'new_item'           => 'New Article',
    'view_item'          => 'View Article',
    'search_items'       => 'Search News',
    'not_found'          => 'No articles found',
    'not_found_in_trash' => 'No articles found in trash'
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'has_archive'         => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_rest'        => true, // Enable Gutenberg editor
    'menu_icon'           => 'dashicons-megaphone',
    'menu_position'       => 5,
    'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'revisions'),
    'rewrite'             => array(
      'slug'       => 'news',
      'with_front' => false,
    ),
    'capability_type'     => 'post',
    'taxonomies'          => array('category', 'post_tag'),
  );

  register_post_type('news', $args);
}
add_action('init', 'sgs_register_news_post_type');

/**
 * Flush rewrite rules on theme activation
 */
function sgs_flush_rewrites()
{
  sgs_register_news_post_type();
  flush_rewrite_rules();
}
add_action('after_switch_theme', 'sgs_flush_rewrites');

/**
 * ============================================================================
 * 6. EXCERPT CUSTOMIZATION
 * ============================================================================
 */

/**
 * Custom excerpt length
 */
function sgs_excerpt_length($length)
{
  return 30;
}
add_filter('excerpt_length', 'sgs_excerpt_length');

/**
 * Custom excerpt more
 */
function sgs_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'sgs_excerpt_more');

/**
 * ============================================================================
 * 7. CUSTOMIZER SETTINGS
 * ============================================================================
 */

/**
 * Theme Customizer - Social Media Links
 */
function sgs_customize_register($wp_customize)
{
  // Add Social Media Section
  $wp_customize->add_section('sgs_social_media', array(
    'title'    => __('Social Media Links', 'sgs'),
    'priority' => 30,
  ));

  // Facebook URL
  $wp_customize->add_setting('sgs_facebook_url', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('sgs_facebook_url', array(
    'label'    => __('Facebook URL', 'sgs'),
    'section'  => 'sgs_social_media',
    'type'     => 'url',
    'priority' => 10,
  ));

  // Twitter URL
  $wp_customize->add_setting('sgs_twitter_url', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('sgs_twitter_url', array(
    'label'    => __('Twitter URL', 'sgs'),
    'section'  => 'sgs_social_media',
    'type'     => 'url',
    'priority' => 20,
  ));

  // Instagram URL
  $wp_customize->add_setting('sgs_instagram_url', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('sgs_instagram_url', array(
    'label'    => __('Instagram URL', 'sgs'),
    'section'  => 'sgs_social_media',
    'type'     => 'url',
    'priority' => 30,
  ));

  // TikTok URL
  $wp_customize->add_setting('sgs_tiktok_url', array(
    'default'           => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('sgs_tiktok_url', array(
    'label'    => __('TikTok URL', 'sgs'),
    'section'  => 'sgs_social_media',
    'type'     => 'url',
    'priority' => 40,
  ));

  // WhatsApp Number
  $wp_customize->add_setting('sgs_whatsapp_number', array(
    'default'           => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('sgs_whatsapp_number', array(
    'label'       => __('WhatsApp Number', 'sgs'),
    'description' => __('Enter with country code (e.g., 447936764009 for UK)', 'sgs'),
    'section'     => 'sgs_social_media',
    'type'        => 'text',
    'priority'    => 50,
  ));
}
add_action('customize_register', 'sgs_customize_register');

/**
 * ============================================================================
 * 8. NAVIGATION & MENUS
 * ============================================================================
 */

/**
 * Display Social Media Icons
 */
function sgs_social_icons($classes = '')
{
  $facebook = get_theme_mod('sgs_facebook_url');
  $twitter = get_theme_mod('sgs_twitter_url');
  $instagram = get_theme_mod('sgs_instagram_url');
  $tiktok = get_theme_mod('sgs_tiktok_url');
  $whatsapp = get_theme_mod('sgs_whatsapp_number');

  if (!$facebook && !$twitter && !$instagram && !$tiktok && !$whatsapp) {
    return;
  }

  echo '<div class="flex space-x-3' . esc_attr($classes) . '">';

  if ($facebook) : ?>
    <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" class="transition-colors transform text-primary-900 hover:text-primary-700 hover:scale-110" aria-label="Facebook">
      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
      </svg>
    </a>
  <?php endif;

  if ($twitter) : ?>
    <a href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener noreferrer" class="transition-colors transform text-primary-900 hover:text-primary-700 hover:scale-110" aria-label="Twitter">
      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
      </svg>
    </a>
  <?php endif;

  if ($instagram) : ?>
    <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer" class="transition-colors transform text-primary-900 hover:text-primary-700 hover:scale-110" aria-label="Instagram">
      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
      </svg>
    </a>
  <?php endif;

  if ($tiktok) : ?>
    <a href="<?php echo esc_url($tiktok); ?>" target="_blank" rel="noopener noreferrer" class="transition-colors transform text-primary-900 hover:text-primary-700 hover:scale-110" aria-label="TikTok">
      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
        <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z" />
      </svg>
    </a>
  <?php endif;

  if ($whatsapp) : ?>
    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener noreferrer" class="transition-colors transform text-primary-900 hover:text-primary-700 hover:scale-110" aria-label="WhatsApp">
      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
      </svg>
    </a>
  <?php endif;

  echo '</div>';
}

/**
 * ============================================================================
 * 9. REVIEWS FUNCTIONALITY
 * ============================================================================
 */

/**
 * Register Reviews Custom Post Type
 */
function sgs_register_reviews_post_type()
{
  $labels = array(
    'name'               => 'Reviews',
    'singular_name'      => 'Review',
    'menu_name'          => 'Reviews',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Review',
    'edit_item'          => 'Edit Review',
    'new_item'           => 'New Review',
    'view_item'          => 'View Review',
    'search_items'       => 'Search Reviews',
    'not_found'          => 'No reviews found',
    'not_found_in_trash' => 'No reviews found in trash'
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'has_archive'         => false,
    'publicly_queryable'  => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_icon'           => 'dashicons-star-filled',
    'supports'            => array('title', 'editor'),
    'capability_type'     => 'post',
    'rewrite'             => false,
  );

  register_post_type('review', $args);
}
add_action('init', 'sgs_register_reviews_post_type');

/**
 * Add Review Meta Boxes
 */
function sgs_add_review_meta_boxes()
{
  add_meta_box(
    'review_details',
    'Review Details',
    'sgs_review_meta_box_callback',
    'review',
    'normal',
    'high'
  );
}
add_action('add_meta_boxes', 'sgs_add_review_meta_boxes');

/**
 * Review Meta Box Callback
 */
function sgs_review_meta_box_callback($post)
{
  wp_nonce_field('sgs_save_review_meta', 'sgs_review_meta_nonce');

  $rating = get_post_meta($post->ID, '_review_rating', true);
  $reviewer_name = get_post_meta($post->ID, '_reviewer_name', true);
  $reviewer_location = get_post_meta($post->ID, '_reviewer_location', true);
  ?>
  <div style="margin: 15px 0;">
    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Reviewer Name:</label>
    <input type="text" name="reviewer_name" value="<?php echo esc_attr($reviewer_name); ?>" style="width: 100%; padding: 8px;" placeholder="John Smith">
  </div>

  <div style="margin: 15px 0;">
    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Location:</label>
    <input type="text" name="reviewer_location" value="<?php echo esc_attr($reviewer_location); ?>" style="width: 100%; padding: 8px;" placeholder="Salisbury, Wiltshire">
  </div>

  <div style="margin: 15px 0;">
    <label style="display: block; margin-bottom: 5px; font-weight: 600;">Rating (1-5 stars):</label>
    <select name="review_rating" style="width: 100%; padding: 8px;">
      <option value="">Select Rating</option>
      <?php for ($i = 1; $i <= 5; $i++) : ?>
        <option value="<?php echo $i; ?>" <?php selected($rating, $i); ?>>
          <?php echo $i; ?> Star<?php echo $i > 1 ? 's' : ''; ?>
        </option>
      <?php endfor; ?>
    </select>
  </div>
<?php
}

/**
 * Save Review Meta Data
 */
function sgs_save_review_meta($post_id)
{
  if (!isset($_POST['sgs_review_meta_nonce']) || !wp_verify_nonce($_POST['sgs_review_meta_nonce'], 'sgs_save_review_meta')) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  if (isset($_POST['review_rating'])) {
    update_post_meta($post_id, '_review_rating', sanitize_text_field($_POST['review_rating']));
  }

  if (isset($_POST['reviewer_name'])) {
    update_post_meta($post_id, '_reviewer_name', sanitize_text_field($_POST['reviewer_name']));
  }

  if (isset($_POST['reviewer_location'])) {
    update_post_meta($post_id, '_reviewer_location', sanitize_text_field($_POST['reviewer_location']));
  }
}
add_action('save_post_review', 'sgs_save_review_meta');

/**
 * Display Star Rating
 */
function sgs_display_stars($rating, $size = 'default')
{
  $size_class = $size === 'large' ? 'w-6 h-6' : 'w-5 h-5';
  $output = '<div class="flex gap-1">';

  for ($i = 1; $i <= 5; $i++) {
    if ($i <= $rating) {
      // Full star
      $output .= '<svg class="' . $size_class . ' text-secondary-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>';
    } else {
      // Empty star
      $output .= '<svg class="' . $size_class . ' text-neutral-300" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>';
    }
  }

  $output .= '</div>';
  return $output;
}

/**
 * ============================================================================
 * 10. SEO META TAGS
 * ============================================================================
 */

/**
 * Add Meta Description to Head
 */
function sgs_add_meta_description()
{
  if (is_singular()) {
    global $post;
    if ($post->post_excerpt) {
      $description = wp_strip_all_tags($post->post_excerpt);
    } else {
      $description = wp_trim_words(wp_strip_all_tags($post->post_content), 30);
    }
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
  } elseif (is_home() || is_front_page()) {
    echo '<meta name="description" content="' . esc_attr(get_bloginfo('description')) . '">' . "\n";
  } elseif (is_category()) {
    $description = category_description();
    if ($description) {
      echo '<meta name="description" content="' . esc_attr(wp_strip_all_tags($description)) . '">' . "\n";
    }
  }
}
add_action('wp_head', 'sgs_add_meta_description', 1);

/**
 * Add Open Graph meta tags
 */
function sgs_add_og_tags()
{
  $default_image = get_template_directory_uri() . '/assets/img/social.png';

  if (is_singular()) {
    global $post;
    echo '<meta property="og:type" content="article">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr(get_the_title()) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";

    if (has_post_thumbnail()) {
      $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
      echo '<meta property="og:image" content="' . esc_url($thumbnail[0]) . '">' . "\n";
    } else {
      echo '<meta property="og:image" content="' . esc_url($default_image) . '">' . "\n";
    }

    if ($post->post_excerpt) {
      $description = wp_strip_all_tags($post->post_excerpt);
    } else {
      $description = wp_trim_words(wp_strip_all_tags($post->post_content), 30);
    }
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
  } elseif (is_home() || is_front_page()) {
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(home_url('/')) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr(get_bloginfo('description')) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($default_image) . '">' . "\n";
  }
  echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
  echo '<meta property="og:image:width" content="1200">' . "\n";
  echo '<meta property="og:image:height" content="630">' . "\n";
}
add_action('wp_head', 'sgs_add_og_tags', 2);

/**
 * Add Twitter Card meta tags
 */
function sgs_add_twitter_cards()
{
  $default_image = get_template_directory_uri() . '/assets/img/social.png';

  echo '<meta name="twitter:card" content="summary_large_image">' . "\n";

  if (is_singular()) {
    echo '<meta name="twitter:title" content="' . esc_attr(get_the_title()) . '">' . "\n";

    if (has_post_thumbnail()) {
      $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
      echo '<meta name="twitter:image" content="' . esc_url($thumbnail[0]) . '">' . "\n";
    } else {
      echo '<meta name="twitter:image" content="' . esc_url($default_image) . '">' . "\n";
    }

    global $post;
    if ($post->post_excerpt) {
      $description = wp_strip_all_tags($post->post_excerpt);
    } else {
      $description = wp_trim_words(wp_strip_all_tags($post->post_content), 30);
    }
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
  } elseif (is_home() || is_front_page()) {
    echo '<meta name="twitter:title" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr(get_bloginfo('description')) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($default_image) . '">' . "\n";
  }
}
add_action('wp_head', 'sgs_add_twitter_cards', 3);

/**
 * Improve image SEO
 */
function sgs_add_image_alt_text($attr, $attachment)
{
  if (empty($attr['alt'])) {
    $attr['alt'] = get_the_title($attachment->ID);
  }
  return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'sgs_add_image_alt_text', 10, 2);

/**
 * ============================================================================
 * 11. PERFORMANCE OPTIMIZATIONS
 * ============================================================================
 */

/**
 * Remove unnecessary WordPress features
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

/**
 * Disable emojis for better performance
 */
function sgs_disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'sgs_disable_emojis');

/**
 * ============================================================================
 * 12. UTILITY FUNCTIONS
 * ============================================================================
 */

/**
 * Breadcrumbs Function
 */
function sgs_breadcrumbs()
{
  // Settings
  $separator = '<svg class="mx-2 w-4 h-4 text-neutral-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
  $home_title = 'Home';

  // Don't show on homepage
  if (is_front_page()) {
    return;
  }

  // Get the query & post information
  global $post;

  // Build the breadcrumbs
  echo '<nav class="py-4" style="background-color: #0a0f1a;" aria-label="Breadcrumb">';
  echo '<div class="container-custom">';
  echo '<ol class="flex flex-wrap items-center text-sm" itemscope itemtype="https://schema.org/BreadcrumbList">';

  // Home page
  echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">';
  echo '<a href="' . home_url('/') . '" itemprop="item" class="font-medium text-white transition-colors hover:text-secondary-400">';
  echo '<span itemprop="name">' . $home_title . '</span></a>';
  echo '<meta itemprop="position" content="1" />';
  echo '</li>';

  if (is_home()) {
    echo $separator;
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">';
    echo '<span itemprop="name" class="text-neutral-300">Blog</span>';
    echo '<meta itemprop="position" content="2" />';
    echo '</li>';
  } elseif (is_category()) {
    echo $separator;
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">';
    echo '<span itemprop="name" class="text-neutral-300">' . single_cat_title('', false) . '</span>';
    echo '<meta itemprop="position" content="2" />';
    echo '</li>';
  } elseif (is_single()) {
    $category = get_the_category();
    if ($category) {
      echo $separator;
      echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">';
      echo '<a href="' . get_category_link($category[0]->term_id) . '" itemprop="item" class="text-white transition-colors hover:text-secondary-400">';
      echo '<span itemprop="name">' . $category[0]->name . '</span></a>';
      echo '<meta itemprop="position" content="2" />';
      echo '</li>';
    }
    echo $separator;
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">';
    echo '<span itemprop="name" class="text-neutral-300">' . get_the_title() . '</span>';
    echo '<meta itemprop="position" content="3" />';
    echo '</li>';
  } elseif (is_page()) {
    $breadcrumbs = array();

    if ($post->post_parent) {
      $parent_id = $post->post_parent;

      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center"><a href="' . get_permalink($page->ID) . '" itemprop="item" class="text-white transition-colors hover:text-secondary-400"><span itemprop="name">' . get_the_title($page->ID) . '</span></a><meta itemprop="position" content="2" /></li>';
        $parent_id = $page->post_parent;
      }

      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) {
        echo $separator . $crumb;
      }
    }
    echo $separator;
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">';
    echo '<span itemprop="name" class="text-neutral-300">' . get_the_title() . '</span>';
    echo '<meta itemprop="position" content="' . (count($breadcrumbs) + 2) . '" />';
    echo '</li>';
  } elseif (is_search()) {
    echo $separator;
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">';
    echo '<span itemprop="name" class="text-neutral-300">Search results for: ' . get_search_query() . '</span>';
    echo '<meta itemprop="position" content="2" />';
    echo '</li>';
  } elseif (is_404()) {
    echo $separator;
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="flex items-center">';
    echo '<span itemprop="name" class="text-neutral-300">404 Not Found</span>';
    echo '<meta itemprop="position" content="2" />';
    echo '</li>';
  }

  echo '</ol>';
  echo '</div>';
  echo '</nav>';
}

/**
 * ============================================================================
 * 13. NEWS POST TYPE
 * ============================================================================
 */

/**
 * Add News Meta Boxes
 */
function sgs_add_news_meta_boxes()
{
  add_meta_box(
    'sgs_news_seo',
    'SEO Settings',
    'sgs_news_seo_callback',
    'news',
    'normal',
    'high'
  );
}
add_action('add_meta_boxes', 'sgs_add_news_meta_boxes');

/**
 * SEO Meta Box Callback
 */
function sgs_news_seo_callback($post)
{
  wp_nonce_field('sgs_news_seo_nonce', 'sgs_news_seo_nonce_field');

  $meta_description = get_post_meta($post->ID, '_sgs_meta_description', true);
  $focus_keyword = get_post_meta($post->ID, '_sgs_focus_keyword', true);
?>
  <div style="margin-bottom: 15px;">
    <label for="sgs_meta_description" style="display: block; margin-bottom: 5px; font-weight: bold;">Meta Description</label>
    <textarea id="sgs_meta_description" name="sgs_meta_description" rows="3" style="width: 100%;" maxlength="160"><?php echo esc_textarea($meta_description); ?></textarea>
    <p class="description">Recommended: 150-160 characters. <span id="meta-char-count">0</span>/160</p>
  </div>

  <div>
    <label for="sgs_focus_keyword" style="display: block; margin-bottom: 5px; font-weight: bold;">Focus Keyword</label>
    <input type="text" id="sgs_focus_keyword" name="sgs_focus_keyword" value="<?php echo esc_attr($focus_keyword); ?>" style="width: 100%;">
    <p class="description">Main keyword for this article (e.g., "gutter cleaning tips")</p>
  </div>

  <script>
    jQuery(document).ready(function($) {
      var textarea = $('#sgs_meta_description');
      var counter = $('#meta-char-count');

      function updateCount() {
        counter.text(textarea.val().length);
        if (textarea.val().length > 160) {
          counter.css('color', 'red');
        } else if (textarea.val().length > 150) {
          counter.css('color', 'orange');
        } else {
          counter.css('color', 'green');
        }
      }

      textarea.on('input', updateCount);
      updateCount();
    });
  </script>
  <?php
}

/**
 * Save News SEO Meta
 */
function sgs_save_news_seo_meta($post_id)
{
  // Check nonce
  if (!isset($_POST['sgs_news_seo_nonce_field']) || !wp_verify_nonce($_POST['sgs_news_seo_nonce_field'], 'sgs_news_seo_nonce')) {
    return;
  }

  // Check autosave
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  // Check permissions
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  // Save meta description
  if (isset($_POST['sgs_meta_description'])) {
    update_post_meta($post_id, '_sgs_meta_description', sanitize_textarea_field($_POST['sgs_meta_description']));
  }

  // Save focus keyword
  if (isset($_POST['sgs_focus_keyword'])) {
    update_post_meta($post_id, '_sgs_focus_keyword', sanitize_text_field($_POST['sgs_focus_keyword']));
  }
}
add_action('save_post_news', 'sgs_save_news_seo_meta');

/**
 * Add News Meta Tags to Head
 */
function sgs_add_news_meta_tags()
{
  if (is_singular('news')) {
    global $post;

    $meta_description = get_post_meta($post->ID, '_sgs_meta_description', true);
    if (!$meta_description) {
      $meta_description = wp_trim_words(strip_tags($post->post_content), 25);
    }

    $focus_keyword = get_post_meta($post->ID, '_sgs_focus_keyword', true);

    // Meta description
    echo '<meta name="description" content="' . esc_attr($meta_description) . '">' . "\n";

    // Keywords
    if ($focus_keyword) {
      echo '<meta name="keywords" content="' . esc_attr($focus_keyword) . '">' . "\n";
    }

    // Open Graph
    echo '<meta property="og:type" content="article">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr(get_the_title()) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($meta_description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";

    if (has_post_thumbnail()) {
      $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
      echo '<meta property="og:image" content="' . esc_url($image[0]) . '">' . "\n";
    }

    // Article specific
    echo '<meta property="article:published_time" content="' . esc_attr(get_the_date('c')) . '">' . "\n";
    echo '<meta property="article:modified_time" content="' . esc_attr(get_the_modified_date('c')) . '">' . "\n";
    echo '<meta property="article:author" content="' . esc_attr(get_the_author()) . '">' . "\n";

    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr(get_the_title()) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($meta_description) . '">' . "\n";

    if (has_post_thumbnail()) {
      echo '<meta name="twitter:image" content="' . esc_url($image[0]) . '">' . "\n";
    }
  }
}
add_action('wp_head', 'sgs_add_news_meta_tags', 5);

/**
 * Add Article Schema for News
 */
function sgs_add_news_schema()
{
  if (is_singular('news')) {
    global $post;

    $meta_description = get_post_meta($post->ID, '_sgs_meta_description', true);
    if (!$meta_description) {
      $meta_description = wp_trim_words(strip_tags($post->post_content), 25);
    }

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'Article',
      'headline' => get_the_title(),
      'description' => $meta_description,
      'datePublished' => get_the_date('c'),
      'dateModified' => get_the_modified_date('c'),
      'author' => array(
        '@type' => 'Person',
        'name' => get_the_author()
      ),
      'publisher' => array(
        '@type' => 'Organization',
        'name' => get_bloginfo('name'),
        'logo' => array(
          '@type' => 'ImageObject',
          'url' => get_theme_file_uri('/assets/images/logo.png')
        )
      )
    );

    if (has_post_thumbnail()) {
      $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
      $schema['image'] = $image[0];
    }

    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
  }
}
add_action('wp_head', 'sgs_add_news_schema', 10);

/**
 * Handle Custom Contact Form Submission
 */
function sgs_handle_contact_form()
{
  // Verify nonce
  if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'sgs_contact_form')) {
    wp_die('Security check failed');
  }

  // Sanitize form data
  $name = sanitize_text_field($_POST['contact_name']);
  $email = sanitize_email($_POST['contact_email']);
  $phone = sanitize_text_field($_POST['contact_phone']);
  $service = sanitize_text_field($_POST['contact_service']);
  $message = sanitize_textarea_field($_POST['contact_message']);

  // Validate required fields
  if (empty($name) || empty($email) || empty($phone)) {
    wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    exit;
  }

  // Validate email
  if (!is_email($email)) {
    wp_redirect(add_query_arg('contact', 'invalid_email', wp_get_referer()));
    exit;
  }

  // Prepare email
  $to = 'info@superguttering.co.uk';
  $subject = 'New Contact Form Submission from ' . $name;

  // Get domain from site URL for proper email headers
  $domain = parse_url(home_url(), PHP_URL_HOST);

  $headers = array(
    'Content-Type: text/html; charset=UTF-8',
    'From: Super Guttering Services <wordpress@' . $domain . '>',
    'Reply-To: ' . $name . ' <' . $email . '>'
  );

  // Email body
  $body = '<html><body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">';
  $body .= '<div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 10px;">';
  $body .= '<h2 style="color: #1e3a8a; border-bottom: 3px solid #fbbf24; padding-bottom: 10px;">New Contact Form Submission</h2>';
  $body .= '<div style="background-color: white; padding: 20px; border-radius: 8px; margin-top: 20px;">';
  $body .= '<p><strong style="color: #1e3a8a;">Name:</strong> ' . esc_html($name) . '</p>';
  $body .= '<p><strong style="color: #1e3a8a;">Email:</strong> <a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a></p>';
  $body .= '<p><strong style="color: #1e3a8a;">Phone:</strong> <a href="tel:' . esc_attr($phone) . '">' . esc_html($phone) . '</a></p>';
  $body .= '<p><strong style="color: #1e3a8a;">Service Required:</strong> ' . esc_html($service) . '</p>';
  $body .= '<p><strong style="color: #1e3a8a;">Message:</strong></p>';
  $body .= '<div style="background-color: #f3f4f6; padding: 15px; border-radius: 5px; border-left: 4px solid #fbbf24;">';
  $body .= nl2br(esc_html($message));
  $body .= '</div>';
  $body .= '</div>';
  $body .= '<p style="margin-top: 20px; font-size: 12px; color: #666;">Submitted from: ' . get_bloginfo('name') . ' (' . home_url() . ')</p>';
  $body .= '</div></body></html>';

  // Send email
  $sent = wp_mail($to, $subject, $body, $headers);

  // Redirect with success or error message
  if ($sent) {
    wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
  } else {
    wp_redirect(add_query_arg('contact', 'failed', wp_get_referer()));
  }
  exit;
}
add_action('admin_post_nopriv_sgs_contact_form', 'sgs_handle_contact_form');
add_action('admin_post_sgs_contact_form', 'sgs_handle_contact_form');

/**
 * Display Footer Social Media Icons
 */
function sgs_footer_social_icons()
{
  $facebook = get_theme_mod('sgs_facebook_url');
  $twitter = get_theme_mod('sgs_twitter_url');
  $instagram = get_theme_mod('sgs_instagram_url');
  $tiktok = get_theme_mod('sgs_tiktok_url');
  $whatsapp = get_theme_mod('sgs_whatsapp_number');

  if (!$facebook && !$twitter && !$instagram && !$tiktok && !$whatsapp) {
    return;
  }

  echo '<div class="flex space-x-4">';

  if ($facebook) : ?>
    <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center w-10 h-10 rounded-full transition-colors bg-primary-800 hover:bg-secondary-400 group" aria-label="Facebook">
      <svg class="w-5 h-5 text-white group-hover:text-primary-900" fill="currentColor" viewBox="0 0 24 24">
        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
      </svg>
    </a>
  <?php endif;

  if ($twitter) : ?>
    <a href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center w-10 h-10 rounded-full transition-colors bg-primary-800 hover:bg-secondary-400 group" aria-label="Twitter">
      <svg class="w-5 h-5 text-white group-hover:text-primary-900" fill="currentColor" viewBox="0 0 24 24">
        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
      </svg>
    </a>
  <?php endif;

  if ($instagram) : ?>
    <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center w-10 h-10 rounded-full transition-colors bg-primary-800 hover:bg-secondary-400 group" aria-label="Instagram">
      <svg class="w-5 h-5 text-white group-hover:text-primary-900" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
      </svg>
    </a>
  <?php endif;

  if ($tiktok) : ?>
    <a href="<?php echo esc_url($tiktok); ?>" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center w-10 h-10 rounded-full transition-colors bg-primary-800 hover:bg-secondary-400 group" aria-label="TikTok">
      <svg class="w-5 h-5 text-white group-hover:text-primary-900" fill="currentColor" viewBox="0 0 24 24">
        <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z" />
      </svg>
    </a>
  <?php endif;

  if ($whatsapp) : ?>
    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener noreferrer" class="flex justify-center items-center w-10 h-10 bg-green-500 rounded-full transition-colors hover:bg-green-600 group" aria-label="WhatsApp">
      <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
      </svg>
    </a>
<?php endif;

  echo '</div>';
}

/**
 * ============================================================================
 * 16. SECURITY ENHANCEMENTS
 * ============================================================================
 */

/**
 * Remove WordPress version from head and feeds
 * Prevents attackers from knowing which version you're running
 */
remove_action('wp_head', 'wp_generator');
add_filter('the_generator', '__return_empty_string');

/**
 * Disable XML-RPC (prevents brute force attacks)
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove WordPress version from scripts and styles
 */
function sgs_remove_wp_version_strings($src)
{
  global $wp_version;
  parse_str(parse_url($src, PHP_URL_QUERY), $query);
  if (!empty($query['ver']) && $query['ver'] === $wp_version) {
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter('script_loader_src', 'sgs_remove_wp_version_strings');
add_filter('style_loader_src', 'sgs_remove_wp_version_strings');

/**
 * Disable file editing from WordPress admin
 * Prevents hackers from editing theme/plugin files if they gain admin access
 */
if (!defined('DISALLOW_FILE_EDIT')) {
  define('DISALLOW_FILE_EDIT', true);
}

/**
 * Add security headers
 */
function sgs_add_security_headers()
{
  // Prevent clickjacking
  header('X-Frame-Options: SAMEORIGIN');

  // Prevent MIME type sniffing
  header('X-Content-Type-Options: nosniff');

  // Enable XSS protection
  header('X-XSS-Protection: 1; mode=block');

  // Referrer policy
  header('Referrer-Policy: strict-origin-when-cross-origin');

  // Permissions policy (formerly Feature-Policy)
  header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
}
add_action('send_headers', 'sgs_add_security_headers');

/**
 * Disable directory browsing
 */
function sgs_disable_directory_browsing()
{
  $htaccess_file = ABSPATH . '.htaccess';
  if (file_exists($htaccess_file) && is_writable($htaccess_file)) {
    $htaccess_content = file_get_contents($htaccess_file);
    if (strpos($htaccess_content, 'Options -Indexes') === false) {
      // Note: This is already in .htaccess, just ensuring it's there
    }
  }
}

/**
 * Limit login attempts (basic protection)
 * For production, consider using a plugin like Wordfence or Limit Login Attempts
 */
function sgs_check_login_attempts($user, $username, $password)
{
  $ip = $_SERVER['REMOTE_ADDR'];
  $attempts = get_transient('login_attempts_' . $ip);

  if ($attempts && $attempts >= 5) {
    $wait_time = 15; // minutes
    return new WP_Error('too_many_attempts', sprintf(
      __('Too many failed login attempts. Please try again in %d minutes.', 'sgs'),
      $wait_time
    ));
  }

  return $user;
}
add_filter('authenticate', 'sgs_check_login_attempts', 30, 3);

/**
 * Track failed login attempts
 */
function sgs_login_failed($username)
{
  $ip = $_SERVER['REMOTE_ADDR'];
  $attempts = get_transient('login_attempts_' . $ip);
  $attempts = $attempts ? $attempts + 1 : 1;
  set_transient('login_attempts_' . $ip, $attempts, 15 * MINUTE_IN_SECONDS);
}
add_action('wp_login_failed', 'sgs_login_failed');

/**
 * Reset login attempts on successful login
 */
function sgs_login_success($username)
{
  $ip = $_SERVER['REMOTE_ADDR'];
  delete_transient('login_attempts_' . $ip);
}
add_action('wp_login', 'sgs_login_success');

/**
 * Hide login errors (don't tell attackers if username exists)
 */
function sgs_hide_login_errors()
{
  return __('Invalid credentials. Please try again.', 'sgs');
}
add_filter('login_errors', 'sgs_hide_login_errors');

/**
 * Disable user enumeration (prevents username discovery)
 */
function sgs_disable_user_enumeration()
{
  if (!is_admin() && isset($_REQUEST['author']) && intval($_REQUEST['author'])) {
    wp_redirect(home_url(), 301);
    exit;
  }
}
add_action('template_redirect', 'sgs_disable_user_enumeration');

/**
 * Remove author archives from REST API
 */
function sgs_remove_author_rest_endpoint($endpoints)
{
  if (isset($endpoints['/wp/v2/users'])) {
    unset($endpoints['/wp/v2/users']);
  }
  if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
    unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
  }
  return $endpoints;
}
add_filter('rest_endpoints', 'sgs_remove_author_rest_endpoint');

/**
 * Add Content Security Policy (CSP) header
 */
function sgs_add_csp_header()
{
  $csp = "default-src 'self'; ";
  $csp .= "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://fonts.googleapis.com; ";
  $csp .= "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; ";
  $csp .= "font-src 'self' https://fonts.gstatic.com; ";
  $csp .= "img-src 'self' data: https:; ";
  $csp .= "connect-src 'self'; ";
  $csp .= "frame-ancestors 'self';";

  header("Content-Security-Policy: " . $csp);
}
// Uncomment when ready to implement (may need adjustments for your specific needs)
// add_action('send_headers', 'sgs_add_csp_header');

/**
 * Sanitize file uploads
 */
function sgs_sanitize_file_upload($file)
{
  $file['name'] = sanitize_file_name($file['name']);

  // Check file extension
  $allowed_types = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'webp');
  $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

  if (!in_array($file_ext, $allowed_types)) {
    $file['error'] = 'File type not allowed. Allowed types: ' . implode(', ', $allowed_types);
  }

  return $file;
}
add_filter('wp_handle_upload_prefilter', 'sgs_sanitize_file_upload');

/**
 * Force strong passwords for administrators
 */
function sgs_enforce_strong_passwords($errors, $update, $user)
{
  $password = isset($_POST['pass1']) ? $_POST['pass1'] : '';

  if (!$update && in_array('administrator', $user->roles)) {
    if (strlen($password) < 12) {
      $errors->add('password_length', __('Administrator passwords must be at least 12 characters long.', 'sgs'));
    }
    if (!preg_match('/[A-Z]/', $password)) {
      $errors->add('password_uppercase', __('Password must contain at least one uppercase letter.', 'sgs'));
    }
    if (!preg_match('/[a-z]/', $password)) {
      $errors->add('password_lowercase', __('Password must contain at least one lowercase letter.', 'sgs'));
    }
    if (!preg_match('/[0-9]/', $password)) {
      $errors->add('password_number', __('Password must contain at least one number.', 'sgs'));
    }
    if (!preg_match('/[^A-Za-z0-9]/', $password)) {
      $errors->add('password_special', __('Password must contain at least one special character.', 'sgs'));
    }
  }

  return $errors;
}
add_action('user_profile_update_errors', 'sgs_enforce_strong_passwords', 10, 3);

/**
 * Disable pingbacks and trackbacks
 */
function sgs_disable_pingbacks(&$links)
{
  foreach ($links as $l => $link) {
    if (strpos($link, get_option('home')) === 0) {
      unset($links[$l]);
    }
  }
}
add_action('pre_ping', 'sgs_disable_pingbacks');

/**
 * Remove WordPress version from RSS feeds
 */
function sgs_remove_version_rss()
{
  return '';
}
add_filter('the_generator', 'sgs_remove_version_rss');

/**
 * ============================================================================
 * 17. VERSION CONTROL
 * ============================================================================
 */

/**
 * Get theme version from VERSION file
 * Returns the current version number for display in footer
 */
function sgs_get_theme_version()
{
  $version_file = get_template_directory() . '/VERSION';

  if (file_exists($version_file)) {
    $version = file_get_contents($version_file);
    return trim($version);
  }

  return '1.0.0'; // Fallback version
}

/**
 * ============================================================================
 * 11. PERFORMANCE OPTIMIZATIONS (CONTINUED)
 * ============================================================================
 */

// Remove unnecessary WordPress features for better performance
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Disable embeds for better performance
function sgs_disable_embeds()
{
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'sgs_disable_embeds');

// Remove query strings from static resources for better caching
function sgs_remove_query_strings($src)
{
  if (strpos($src, '?ver=')) {
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter('style_loader_src', 'sgs_remove_query_strings', 10, 2);
add_filter('script_loader_src', 'sgs_remove_query_strings', 10, 2);

// Add async/defer to scripts
function sgs_add_async_defer_attribute($tag, $handle)
{
  // Scripts to defer
  $defer_scripts = array('sgs-mobile-menu', 'sgs-scroll-animations');

  if (in_array($handle, $defer_scripts)) {
    return str_replace(' src', ' defer src', $tag);
  }

  return $tag;
}
add_filter('script_loader_tag', 'sgs_add_async_defer_attribute', 10, 2);

// Enable lazy loading for images
function sgs_add_lazy_loading($content)
{
  if (is_admin()) {
    return $content;
  }

  $content = preg_replace('/<img(.*?)src=/i', '<img$1loading="lazy" src=', $content);
  return $content;
}
add_filter('the_content', 'sgs_add_lazy_loading');

// DNS Prefetch for external resources
function sgs_dns_prefetch()
{
  echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">';
  echo '<link rel="dns-prefetch" href="//fonts.gstatic.com">';
}
add_action('wp_head', 'sgs_dns_prefetch', 1);

/**
 * ============================================================================
 * 12. SEO ENHANCEMENTS
 * ============================================================================
 */

// Add Open Graph meta tags
function sgs_add_open_graph_tags()
{
  if (is_singular()) {
    global $post;

    $title = get_the_title();
    $description = get_the_excerpt() ? get_the_excerpt() : wp_trim_words(strip_tags($post->post_content), 30);
    $image = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'large') : get_template_directory_uri() . '/assets/img/social.png';
    $url = get_permalink();

    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:type" content="article">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";

    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
  } else {
    // Homepage or archive
    $title = get_bloginfo('name');
    $description = get_bloginfo('description');
    $image = get_template_directory_uri() . '/assets/img/social.png';
    $url = home_url('/');

    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";

    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
  }
}
add_action('wp_head', 'sgs_add_open_graph_tags', 5);

// Add canonical URL
function sgs_add_canonical()
{
  if (is_singular()) {
    echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">' . "\n";
  } else if (is_home() || is_front_page()) {
    echo '<link rel="canonical" href="' . esc_url(home_url('/')) . '">' . "\n";
  }
}
add_action('wp_head', 'sgs_add_canonical', 5);

// Improve excerpt length for SEO
function sgs_custom_excerpt_length($length)
{
  return 30; // ~155 characters for meta descriptions
}
add_filter('excerpt_length', 'sgs_custom_excerpt_length');

// Add schema.org structured data for local business
function sgs_add_schema_markup()
{
  if (is_front_page()) {
    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'LocalBusiness',
      'name' => 'Super Guttering Services',
      'description' => 'Professional guttering maintenance and repair services in Salisbury and surrounding areas',
      'url' => home_url('/'),
      'telephone' => '07936764009',
      'email' => 'info@superguttering.co.uk',
      'address' => array(
        '@type' => 'PostalAddress',
        'addressLocality' => 'Salisbury',
        'addressRegion' => 'Wiltshire',
        'addressCountry' => 'GB'
      ),
      'areaServed' => array(
        '@type' => 'City',
        'name' => 'Salisbury'
      ),
      'priceRange' => '££',
      'image' => get_template_directory_uri() . '/assets/img/social.png'
    );

    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
  }
}
add_action('wp_head', 'sgs_add_schema_markup', 10);
