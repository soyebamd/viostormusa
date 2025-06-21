<?php 
// Ensure post ID is available
$post_id = get_queried_object_id(); // This is safer than using global $post directly

$features_raw = get_post_meta($post_id, '_service_features', true);
$features = is_array($features_raw) ? array_filter($features_raw, function ($f) {
    return !empty(trim($f['title'])) || !empty(trim($f['desc']));
}) : [];
?>

<?php if (!empty($features)) : ?>
<section class="bg-color-op-1">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h2 class="mb-4">Why Choose Us?</h2>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($features as $i => $feature) :
                $title = $feature['title'] ?? '';
                $desc  = $feature['desc'] ?? '';
                $delay = sprintf('%.1fs', $i * 0.2);
                $icon_class = $i < 3 ? 'bg-color' : 'bg-dark';
            ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                    <div class="p-40 overlay-white-5">
                        <i class="<?php echo esc_attr($icon_class); ?> text-light fs-48 p-2 absolute id-color icon_check"></i>
                        <div class="ps-80">
                            <?php if ($title) : ?>
                                <h4><?php echo esc_html($title); ?></h4>
                            <?php endif; ?>
                            <?php if ($desc) : ?>
                                <p class="mb-0"><?php echo esc_html($desc); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>