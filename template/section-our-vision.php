<?php 
$post_id = 73337;
$post = get_post($post_id);

if ($post) :
?>
<section class="bg-dark text-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h2><?php echo esc_html(get_the_title($post)); ?></h2>
            </div>
            <div class="col-lg-8">
                <h3><?php echo apply_filters('the_content', $post->post_content); ?></h3>
            </div>
        </div>
    </div>
</section>            
<?php 
endif;
?>
