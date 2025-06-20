<?php 
$post_id = 73295;
$post = get_post($post_id);

if ($post): 
?>

<section class="pt-0">
  <div class="container">
    <div class="row gy-4 gx-5 align-items-center">

      <!-- Text Content -->
      <div class="col-lg-5">
        <div class="subtitle wow fadeInUp mb-3">
          <?php echo esc_html($post->post_title); ?>
        </div>

        <?php
        $tagline = get_post_meta($post_id, 'tagline', true);
        if (!empty($tagline)): ?>
          <h2 class="wow fadeInUp"><?php echo esc_html($tagline); ?></h2>
        <?php endif; ?>

        <?php if (!empty($post->post_content)): ?>
          <p class="wow fadeInUp">
            <?php echo apply_filters('the_content', $post->post_content); ?>
          </p>
        <?php endif; ?>
      </div>

      <!-- Image Section -->
      <div class="col-lg-7">
        <div class="relative text-center">
          <?php
          if (has_post_thumbnail($post_id)) :
            $image_url = get_the_post_thumbnail_url($post_id, 'large');
          ?>
            <img src="<?php echo esc_url($image_url); ?>" class="w-80 wow fadeIn" alt="<?php echo esc_attr($post->post_title); ?>" />
          <?php else: ?>
            <!-- Optional Fallback Image -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" class="w-80 wow fadeIn" alt="Placeholder" />
          <?php endif; ?>

          <!-- Optional Decorative Image -->
          <!--
          <img src="<?php echo get_template_directory_uri(); ?>/images/misc/2.webp" class="w-30 abs top-10 end-0" alt="" />
          -->
        </div>

        <div class="spacer-double"></div>
      </div>

    </div>
  </div>
</section>

<?php endif; ?>
