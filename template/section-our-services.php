<?php 
$post_id = 73297;
$post = get_post($post_id);

if ($post): 
?>

<section class="pt-100 bg-dark text-light">
  <div class="container">
    <div class="row g-4 align-items-end justify-content-between">

      <!-- Subtitle and Heading -->
      <div class="col-lg-5">
        <div class="subtitle">
          <?php echo esc_html($post->post_title); ?>
        </div>

        <?php
        $tagline = get_post_meta($post_id, 'tagline', true);
        if (!empty($tagline)): ?>
          <h2><?php echo esc_html($tagline); ?></h2>
        <?php endif; ?>
      </div>

      <!-- Post Content -->
      <div class="col-lg-4">
        <?php if (!empty($post->post_content)): ?>
          <p class="lead">
            <?php echo apply_filters('the_content', $post->post_content); ?>
          </p>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <div class="spacer-double"></div>
</section>

<?php endif; ?>


<?php

// OUR SERVICES TEMPLATE

echo do_shortcode('[our_services_grid]'); ?>
