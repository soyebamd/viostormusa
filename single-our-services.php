<?php get_header(); ?>


        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="bg-color section-dark text-light no-top no-bottom overflow-hidden">
                <div class="container-fluid position-relative half-fluid">
                  <div class="container">
                    <div class="row">
                      <!-- Image -->
                      <div class="col-lg-6 position-lg-absolute right-half h-100">
                        <div class="de-gradient-edge-top dark"></div>
                        <?php if ( has_post_thumbnail() ) : ?>
    <div class="image jarallax">
        <?php 
        // Get the URL of the full‑size featured image
        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' ); 
        ?>
        <img 
            src="<?php echo esc_url( $thumb_url ); ?>" 
            class="jarallax-img" 
            alt="<?php echo esc_attr( get_the_title() ); ?>"
        >
    </div>
<?php endif; ?>

                      </div>
                      <!-- Text -->
                      <div class="col-lg-6 relative">
                            <div class="me-lg-4">
                                <div class="spacer-double"></div>
                                <div class="spacer-double sm-hide"></div>
                                <div class="spacer-single sm-hide"></div>
                                <div class="spacer-single sm-hide"></div>
                                <div class="spacer-single sm-hide"></div>


                              <?php custom_global_breadcrumb(); ?>
                             
                                <h1 class="mb-2 wow fadeInUp" data-wow-delay=".2s"><?php the_title(); ?>  </h1>
                                <p class="col-lg-10 lead mb-0 wow fadeInUp" data-wow-delay=".3s">
                                
                                
                                <?php
                                // TAGLINE META
$tag_line = get_post_meta(get_the_ID(), '_tagline', true);
if ($tag_line) {
    echo  esc_html($tag_line) ;
}
?>



                                </p>
                                <div class="spacer-double"></div>
                                <div class="spacer-single sm-hide"></div>

                                <img src="<?php echo get_template_directory_uri(); ?>/images/misc/recycle-crop-2.webp" class="w-30 abs end-0 bottom-0 z-3" alt="">
                            </div>

                      </div>
                    </div>
                  </div>
                </div>
            </section>
            

            <section>
                <div class="container">
                    <div class="row g-5">
                      

                    <div class="col-lg-3">
    <?php
    $services = new WP_Query([
        'post_type' => 'our-services',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ]);

    if ($services->have_posts()) :
        while ($services->have_posts()) : $services->the_post();
            $is_active = (get_the_ID() === get_queried_object_id()) ? 'bg-color text-light' : 'bg-white';
            ?>
            <a href="<?php the_permalink(); ?>" class="<?php echo $is_active; ?> d-block p-3 px-4 mb-3 relative">
                <h4 class="mb-0"><?php the_title(); ?></h4>
                <?php if ($is_active === 'bg-color text-light') : ?>
                    <i class="icofont-long-arrow-right absolute abs-middle fs-24 end-20px"></i>
                <?php endif; ?>
            </a>
        <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
</div>




                        <div class="col-lg-9">
                           

                        <?php the_content(); ?>

                            <div class="spacer-double"></div>
                            <div class="spacer-double"></div>
                            <?php
// Get raw features meta
$features_raw = get_post_meta( get_the_ID(), '_service_features', true );

// Ensure it’s an array
$features = is_array( $features_raw ) ? $features_raw : [];

// Filter out entries where both title and desc are empty (or unset)
$features = array_filter( $features, function( $f ) {
    $has_title = isset( $f['title'] ) && trim( $f['title'] ) !== '';
    $has_desc  = isset( $f['desc']  ) && trim( $f['desc']  ) !== '';
    return $has_title || $has_desc;
} );

if ( ! empty( $features ) ) : ?>
    <div class="row g-4">
        <?php foreach ( $features as $i => $feature ) :
            // Grab values, defaulting to empty string
            $title = isset( $feature['title'] ) ? $feature['title'] : '';
            $desc  = isset( $feature['desc']  ) ? $feature['desc']  : '';

            // Only continue if at least one is non-empty
            if ( $title === '' && $desc === '' ) {
                continue;
            }

            // Calculate delay (e.g. “0s”, “0.2s”, “0.4s”…)
            $delay = sprintf( '%.1fs', $i * 0.2 );
        ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr( $delay ); ?>">
                <div class="relative">
                    <i class="bg-color text-light fs-48 p-2 absolute id-color icon_check"></i>
                    <div class="ps-80">
                        <?php if ( $title !== '' ) : ?>
                            <h4><?php echo esc_html( $title ); ?></h4>
                        <?php endif; ?>
                        <?php if ( $desc !== '' ) : ?>
                            <p class="mb-0"><?php echo esc_html( $desc ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>




                        </div>
                    </div>
                </div>
            </section>
            
            
        </div>
        <!-- content end -->
        

<?php get_footer(); ?>