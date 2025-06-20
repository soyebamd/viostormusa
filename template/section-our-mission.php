<?php 
$post_id = 73303;
$post = get_post($post_id);

if ($post) :
  $mission_title = get_post_meta($post_id, 'tagline', true); // Optional tagline/meta
  $list_items = get_post_meta($post_id, 'mission_list', true); // Repeater or comma-separated text
  ?>
  <section class="relative overflow-hidden">
    <img
      src="<?php echo get_template_directory_uri(); ?>/images/misc/recycle-crop.webp"
      class="w-20 abs end-0 bottom-0 z-3"
      alt=""
    />
    <div class="container relative z-2">
      <div class="row g-4 align-items-end">
        <div class="col-lg-4">
          <div class="subtitle"><?php echo esc_html($post->post_title); ?></div>
          <h2>
            <?php
            if (!empty($mission_title)) {
              echo esc_html($mission_title);
            } else {
              echo esc_html(get_the_excerpt($post)); // fallback to excerpt
            }
            ?>
          </h2>
        </div>
        <div class="col-lg-8">
          <ul class="ul-check fw-600">
            <?php
            if (!empty($list_items)) {
              // Case 1: if using comma-separated string in a custom field
              $items = explode("\n", $list_items); // or explode(',', $list_items);
              foreach ($items as $item) {
                echo '<li>' . esc_html(trim($item)) . '</li>';
              }
            } else {
              // Case 2: fallback to post content, split by lines or <br>
              $lines = explode("\n", strip_tags($post->post_content));
              foreach ($lines as $line) {
                $line = trim($line);
                if (!empty($line)) {
                  echo '<li>' . esc_html($line) . '</li>';
                }
              }
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
