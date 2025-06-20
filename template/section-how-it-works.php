<section class="pt-80">
  <div class="container">
    <div class="row g-4 align-items-end justify-content-between">
      <?php
      $post = get_post(73290);
      if ($post) :
      ?>
        <div class="col-lg-5">
          <div class="subtitle">
            <?php echo esc_html($post->post_title); ?>
          </div>
          <h2>
            <?php
            $tagline = get_post_meta(73290, 'tagline', true);
            if (!empty($tagline)) {
              echo '<p class="page-tagline">' . esc_html($tagline) . '</p>';
            }
            ?>
          </h2>
        </div>

        <div class="col-lg-4">
          <p class="lead">
            <?php echo apply_filters('the_content', $post->post_content); ?>
          </p>
        </div>
      <?php endif; ?>
    </div>

    <div class="spacer-single"></div>

    <?php echo do_shortcode('[how_it_works_grid]'); ?>
  </div>
</section>
