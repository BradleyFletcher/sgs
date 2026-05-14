<?php

/**
 * Homepage Meta Boxes
 * Allows users to edit homepage sections directly in the page editor
 */

// Add meta boxes for homepage
function sgs_add_homepage_meta_boxes()
{
  global $post;

  // Only add meta boxes if this is the homepage
  if (!$post) {
    return;
  }

  $front_page_id = get_option('page_on_front');

  // Only show on the page set as the front page
  if ($post->ID != $front_page_id) {
    return;
  }

  add_meta_box(
    'sgs_hero_section',
    'Hero Section',
    'sgs_hero_section_callback',
    'page',
    'normal',
    'high'
  );

  add_meta_box(
    'sgs_about_section',
    'About Section',
    'sgs_about_section_callback',
    'page',
    'normal',
    'high'
  );

  add_meta_box(
    'sgs_video_section',
    'Video Section',
    'sgs_video_section_callback',
    'page',
    'normal',
    'high'
  );

  add_meta_box(
    'sgs_section_visibility',
    'Section Visibility',
    'sgs_section_visibility_callback',
    'page',
    'side',
    'default'
  );
}
add_action('add_meta_boxes', 'sgs_add_homepage_meta_boxes');

// Hero Section Meta Box
function sgs_hero_section_callback($post)
{
  wp_nonce_field('sgs_save_homepage_meta', 'sgs_homepage_meta_nonce');

  $hero_badge = get_post_meta($post->ID, '_sgs_hero_badge', true) ?: "Salisbury's Trusted Guttering Experts";
  $hero_title = get_post_meta($post->ID, '_sgs_hero_title', true) ?: 'Professional <span class="text-secondary-400">Guttering</span> Services';
  $hero_subtitle = get_post_meta($post->ID, '_sgs_hero_subtitle', true) ?: 'Expert gutter cleaning, repairs, and maintenance protecting homes and businesses across Salisbury and surrounding areas.';
?>
  <table class="form-table">
    <tr>
      <th><label for="sgs_hero_badge">Badge Text</label></th>
      <td>
        <input type="text" id="sgs_hero_badge" name="sgs_hero_badge" value="<?php echo esc_attr($hero_badge); ?>" class="large-text" />
        <p class="description">Text shown in the badge above the main heading</p>
      </td>
    </tr>
    <tr>
      <th><label for="sgs_hero_title">Main Heading</label></th>
      <td>
        <input type="text" id="sgs_hero_title" name="sgs_hero_title" value="<?php echo esc_attr($hero_title); ?>" class="large-text" />
        <p class="description">Main hero heading. Use HTML for styling (e.g., &lt;span class="text-secondary-400"&gt;Guttering&lt;/span&gt;)</p>
      </td>
    </tr>
    <tr>
      <th><label for="sgs_hero_subtitle">Subtitle</label></th>
      <td>
        <textarea id="sgs_hero_subtitle" name="sgs_hero_subtitle" rows="3" class="large-text"><?php echo esc_textarea($hero_subtitle); ?></textarea>
        <p class="description">Subtitle text below the main heading</p>
      </td>
    </tr>
  </table>
<?php
}

// About Section Meta Box
function sgs_about_section_callback($post)
{
  $about_heading = get_post_meta($post->ID, '_sgs_about_heading', true) ?: 'Hi, I\'m <span class="text-secondary-400">Karl West</span>';
  $about_intro = get_post_meta($post->ID, '_sgs_about_intro', true) ?: 'I\'m a sole trader with over 10 years of experience serving Salisbury and the surrounding areas. When you contact Super Guttering Services, you\'re speaking directly to me – and I\'ll be the one doing the work on your property.';
  $about_content = get_post_meta($post->ID, '_sgs_about_content', true) ?: 'I understand that your gutters play a crucial role in protecting your property from water damage. That\'s why I\'m committed to providing top-quality workmanship, using the best materials, and delivering exceptional results every time.';
  $about_warning_title = get_post_meta($post->ID, '_sgs_about_warning_title', true) ?: 'Beware of Fake "Local" Companies';
  $about_warning_text = get_post_meta($post->ID, '_sgs_about_warning_text', true) ?: 'Many gutter companies pose as small local businesses but actually send out third-party contractors to do the work – often at inflated prices. With me, you get a genuine local tradesman who takes pride in every job. No middlemen, no surprises, just honest work at fair prices.';
  $stat_years = get_post_meta($post->ID, '_sgs_stat_years', true) ?: '10+';
  $stat_customers = get_post_meta($post->ID, '_sgs_stat_customers', true) ?: '500+';
  $stat_service = get_post_meta($post->ID, '_sgs_stat_service', true) ?: '24/7';
?>
  <table class="form-table">
    <tr>
      <th><label for="sgs_about_heading">Section Heading</label></th>
      <td>
        <input type="text" id="sgs_about_heading" name="sgs_about_heading" value="<?php echo esc_attr($about_heading); ?>" class="large-text" />
        <p class="description">Use HTML for styling</p>
      </td>
    </tr>
    <tr>
      <th><label for="sgs_about_intro">Introduction Paragraph</label></th>
      <td>
        <textarea id="sgs_about_intro" name="sgs_about_intro" rows="3" class="large-text"><?php echo esc_textarea($about_intro); ?></textarea>
      </td>
    </tr>
    <tr>
      <th><label for="sgs_about_content">Second Paragraph</label></th>
      <td>
        <textarea id="sgs_about_content" name="sgs_about_content" rows="3" class="large-text"><?php echo esc_textarea($about_content); ?></textarea>
      </td>
    </tr>
    <tr>
      <th><label for="sgs_about_warning_title">Warning Box Title</label></th>
      <td>
        <input type="text" id="sgs_about_warning_title" name="sgs_about_warning_title" value="<?php echo esc_attr($about_warning_title); ?>" class="large-text" />
      </td>
    </tr>
    <tr>
      <th><label for="sgs_about_warning_text">Warning Box Text</label></th>
      <td>
        <textarea id="sgs_about_warning_text" name="sgs_about_warning_text" rows="3" class="large-text"><?php echo esc_textarea($about_warning_text); ?></textarea>
      </td>
    </tr>
    <tr>
      <th colspan="2"><strong>Statistics</strong></th>
    </tr>
    <tr>
      <th><label for="sgs_stat_years">Years Experience</label></th>
      <td>
        <input type="text" id="sgs_stat_years" name="sgs_stat_years" value="<?php echo esc_attr($stat_years); ?>" class="regular-text" />
      </td>
    </tr>
    <tr>
      <th><label for="sgs_stat_customers">Happy Customers</label></th>
      <td>
        <input type="text" id="sgs_stat_customers" name="sgs_stat_customers" value="<?php echo esc_attr($stat_customers); ?>" class="regular-text" />
      </td>
    </tr>
    <tr>
      <th><label for="sgs_stat_service">Service Availability</label></th>
      <td>
        <input type="text" id="sgs_stat_service" name="sgs_stat_service" value="<?php echo esc_attr($stat_service); ?>" class="regular-text" />
      </td>
    </tr>
  </table>
<?php
}

// Video Section Meta Box
function sgs_video_section_callback($post)
{
  $video_badge = get_post_meta($post->ID, '_sgs_video_badge', true) ?: 'See Us In Action';
  $video_heading = get_post_meta($post->ID, '_sgs_video_heading', true) ?: 'Serving <span class="text-secondary-400">Wiltshire</span> & Surrounding Areas';
  $video_description = get_post_meta($post->ID, '_sgs_video_description', true) ?: 'Watch how we deliver professional guttering services across Wiltshire and the surrounding areas';
  $video_url = get_post_meta($post->ID, '_sgs_video_url', true) ?: 'https://www.youtube.com/watch?v=VuGl4LfWVVk';
?>
  <table class="form-table">
    <tr>
      <th><label for="sgs_video_badge">Badge Text</label></th>
      <td>
        <input type="text" id="sgs_video_badge" name="sgs_video_badge" value="<?php echo esc_attr($video_badge); ?>" class="large-text" />
      </td>
    </tr>
    <tr>
      <th><label for="sgs_video_heading">Section Heading</label></th>
      <td>
        <input type="text" id="sgs_video_heading" name="sgs_video_heading" value="<?php echo esc_attr($video_heading); ?>" class="large-text" />
        <p class="description">Use HTML for styling</p>
      </td>
    </tr>
    <tr>
      <th><label for="sgs_video_description">Description</label></th>
      <td>
        <textarea id="sgs_video_description" name="sgs_video_description" rows="2" class="large-text"><?php echo esc_textarea($video_description); ?></textarea>
      </td>
    </tr>
    <tr>
      <th><label for="sgs_video_url">YouTube URL</label></th>
      <td>
        <input type="url" id="sgs_video_url" name="sgs_video_url" value="<?php echo esc_url($video_url); ?>" class="large-text" />
        <p class="description">Full YouTube URL (e.g., https://www.youtube.com/watch?v=VIDEO_ID)</p>
      </td>
    </tr>
  </table>
<?php
}

// Section Visibility Meta Box
function sgs_section_visibility_callback($post)
{
  $show_about = get_post_meta($post->ID, '_sgs_show_about', true) !== '0';
  $show_video = get_post_meta($post->ID, '_sgs_show_video', true) !== '0';
  $show_services = get_post_meta($post->ID, '_sgs_show_services', true) !== '0';
  $show_reviews = get_post_meta($post->ID, '_sgs_show_reviews', true) !== '0';
  $show_news = get_post_meta($post->ID, '_sgs_show_news', true) !== '0';
?>
  <p><strong>Show/Hide Homepage Sections:</strong></p>
  <p>
    <label>
      <input type="checkbox" name="sgs_show_about" value="1" <?php checked($show_about, true); ?> />
      Show About Section
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="sgs_show_video" value="1" <?php checked($show_video, true); ?> />
      Show Video Section
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="sgs_show_services" value="1" <?php checked($show_services, true); ?> />
      Show Services Section
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="sgs_show_reviews" value="1" <?php checked($show_reviews, true); ?> />
      Show Reviews Section
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="sgs_show_news" value="1" <?php checked($show_news, true); ?> />
      Show News Section
    </label>
  </p>
<?php
}

// Save meta box data
function sgs_save_homepage_meta($post_id)
{
  // Check nonce
  if (!isset($_POST['sgs_homepage_meta_nonce']) || !wp_verify_nonce($_POST['sgs_homepage_meta_nonce'], 'sgs_save_homepage_meta')) {
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

  // Save Hero Section
  if (isset($_POST['sgs_hero_badge'])) {
    update_post_meta($post_id, '_sgs_hero_badge', sanitize_text_field($_POST['sgs_hero_badge']));
  }
  if (isset($_POST['sgs_hero_title'])) {
    update_post_meta($post_id, '_sgs_hero_title', wp_kses_post($_POST['sgs_hero_title']));
  }
  if (isset($_POST['sgs_hero_subtitle'])) {
    update_post_meta($post_id, '_sgs_hero_subtitle', sanitize_textarea_field($_POST['sgs_hero_subtitle']));
  }

  // Save About Section
  if (isset($_POST['sgs_about_heading'])) {
    update_post_meta($post_id, '_sgs_about_heading', wp_kses_post($_POST['sgs_about_heading']));
  }
  if (isset($_POST['sgs_about_intro'])) {
    update_post_meta($post_id, '_sgs_about_intro', sanitize_textarea_field($_POST['sgs_about_intro']));
  }
  if (isset($_POST['sgs_about_content'])) {
    update_post_meta($post_id, '_sgs_about_content', sanitize_textarea_field($_POST['sgs_about_content']));
  }
  if (isset($_POST['sgs_about_warning_title'])) {
    update_post_meta($post_id, '_sgs_about_warning_title', sanitize_text_field($_POST['sgs_about_warning_title']));
  }
  if (isset($_POST['sgs_about_warning_text'])) {
    update_post_meta($post_id, '_sgs_about_warning_text', sanitize_textarea_field($_POST['sgs_about_warning_text']));
  }
  if (isset($_POST['sgs_stat_years'])) {
    update_post_meta($post_id, '_sgs_stat_years', sanitize_text_field($_POST['sgs_stat_years']));
  }
  if (isset($_POST['sgs_stat_customers'])) {
    update_post_meta($post_id, '_sgs_stat_customers', sanitize_text_field($_POST['sgs_stat_customers']));
  }
  if (isset($_POST['sgs_stat_service'])) {
    update_post_meta($post_id, '_sgs_stat_service', sanitize_text_field($_POST['sgs_stat_service']));
  }

  // Save Video Section
  if (isset($_POST['sgs_video_badge'])) {
    update_post_meta($post_id, '_sgs_video_badge', sanitize_text_field($_POST['sgs_video_badge']));
  }
  if (isset($_POST['sgs_video_heading'])) {
    update_post_meta($post_id, '_sgs_video_heading', wp_kses_post($_POST['sgs_video_heading']));
  }
  if (isset($_POST['sgs_video_description'])) {
    update_post_meta($post_id, '_sgs_video_description', sanitize_textarea_field($_POST['sgs_video_description']));
  }
  if (isset($_POST['sgs_video_url'])) {
    update_post_meta($post_id, '_sgs_video_url', esc_url_raw($_POST['sgs_video_url']));
  }

  // Save Section Visibility
  update_post_meta($post_id, '_sgs_show_about', isset($_POST['sgs_show_about']) ? '1' : '0');
  update_post_meta($post_id, '_sgs_show_video', isset($_POST['sgs_show_video']) ? '1' : '0');
  update_post_meta($post_id, '_sgs_show_services', isset($_POST['sgs_show_services']) ? '1' : '0');
  update_post_meta($post_id, '_sgs_show_reviews', isset($_POST['sgs_show_reviews']) ? '1' : '0');
  update_post_meta($post_id, '_sgs_show_news', isset($_POST['sgs_show_news']) ? '1' : '0');
}
add_action('save_post', 'sgs_save_homepage_meta');
