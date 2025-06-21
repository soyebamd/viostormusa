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
                        <div class="image jarallax">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/background/10.webp" class="jarallax-img" alt="">
                        </div>
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
                             
                               
                              
                                <p class="col-lg-10 lead mb-0 wow fadeInUp" data-wow-delay=".3s">
                            
                                <?php
$tagline = get_post_meta(get_the_ID(), 'tagline', true);
if (!empty($tagline)) :
?>
  <p><?php echo esc_html($tagline); ?></p>
<?php endif; ?>

                            
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
                    <div class="row gy-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="bg-body w-90 overflow-hidden wow zoomIn">
                                   

                                <?php if ( has_post_thumbnail() ) : 
    // Get URL of the featured image (you can change 'full' to another size)
    $page_thumb = get_the_post_thumbnail_url( get_the_ID(), 'full' ); 
else : 
    // Fallback image if no featured image is set
    $page_thumb = get_template_directory_uri() . '/images/misc/3.webp';
endif;
?>
<img
    src="<?php echo esc_url( $page_thumb ); ?>"
    class="w-100 wow scaleIn"
    alt="<?php echo esc_attr( get_the_title() ); ?>"
>



                                </div>
                                <!-- <div class="bg-body w-50 abs mb-min-50 end-0 bottom-0 z-2 overflow-hidden wow zoomIn" data-wow-delay=".2s">
                                    <img src="<?php //echo get_template_directory_uri(); ?>/images/misc/2.webp" class="w-100 wow scaleIn" data-wow-delay=".2s" alt="">
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            

                            <div class="wow fadeInUp"><?php the_content(); ?></div>

                                </div>
                    </div>
                </div>
            </section>
            <?php get_template_part('template/section', 'our-vision'); ?>

            <?php get_template_part('template/section', 'our-mission-2'); ?>



            
            
                        <?php get_template_part('template/section', 'why-choose-us'); ?>
            
        </div>
        <!-- content end -->
 <?php get_footer(); ?>