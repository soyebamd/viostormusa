
<?php
$page_id = 73339;
$page = get_post($page_id);

if ($page) :
?>
<section class="relative overflow-hidden">
    <img src="<?php echo get_template_directory_uri(); ?>/images/misc/recycle-crop.webp" class="w-20 abs end-0 bottom-0 z-3" alt="">
    <div class="container relative z-2">
        <div class="row">
            <div class="col-lg-4">
                <h2><?php echo esc_html(get_the_title($page)); ?></h2>
            </div>
            <div class="col-lg-8">
                <div class="fw-600">
                    <?php echo apply_filters('the_content', $page->post_content); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
