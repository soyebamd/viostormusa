<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wastewise — Waste Management and Recycling Website Template">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.webp" type="image/webp" sizes="16x16" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <div id="wrapper">
      <a href="#" id="back-to-top"></a>

      <!-- preloader begin -->
      <div id="de-loader"></div>
      <!-- preloader end -->

      <!-- header begin -->
      <header class="transparent">
       


 <div id="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex justify-content-between xs-hide">
          <div class="d-flex">
            <div class="topbar-widget me-3">
              <a href="#"><i class="icofont-clock-time"></i>
                <?php echo get_theme_mod('topbar_hours'); ?>
              </a>
            </div>
            <div class="topbar-widget me-3">
              <a href="mailto:<?php echo get_theme_mod('topbar_email'); ?>">
                <i class="icofont-envelope"></i>
                <?php echo get_theme_mod('topbar_email'); ?>
              </a>
            </div>
            <div class="topbar-widget me-3">
              <a href="tel:<?php echo get_theme_mod('topbar_phone'); ?>">
                <i class="icofont-phone"></i>
                <?php echo get_theme_mod('topbar_phone'); ?>
              </a>
            </div>
          </div>
          <?php
$socials = [
    'facebook'     => 'fa-facebook',
    'x_twitter'    => 'fa-x-twitter',
    'youtube'      => 'fa-youtube',
    'pinterest'    => 'fa-pinterest',
    'instagram'    => 'fa-instagram'
];
?>

<div class="d-flex">
  <div class="social-icons">
    <?php foreach ($socials as $key => $icon_class) :
      $url = get_theme_mod("topbar_$key");
      if (!empty($url)) : ?>
        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">
          <i class="fa-brands <?php echo esc_attr($icon_class); ?> fa-lg"></i>
        </a>
      <?php endif;
    endforeach; ?>
  </div>
</div>



        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>




        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="de-flex sm-pt10">
                <div class="de-flex-col">
                  <!-- logo begin -->
                  <div id="logo">
                    <a href="index.html">


                      <!-- <img
                        class="logo-main"
                        src="<?php // echo get_template_directory_uri(); ?>/images/logo-white.webp"
                        alt=""
                      />
                      <img
                        class="logo-mobile"
                        src="<?php // echo get_template_directory_uri(); ?>/images/logo-white.webp"
                        alt=""
                      /> -->


                      <?php if (has_custom_logo()) : ?>
    <div class="site-logo">
        <?php the_custom_logo(); ?>
    </div>
<?php else : ?>
    <div class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
    </div>
<?php endif; ?>



                    </a>
                  </div>
                  <!-- logo end -->
                </div>
                <div class="de-flex-col header-col-mid">
                  <!-- mainemenu begin -->


                  <nav id="main-nav">
  <?php
    wp_nav_menu(array(
      'theme_location' => 'main-menu',
      'menu_class'     => 'mainmenu',
      'container'      => false,
      'menu_id'        => 'mainmenu',
      'fallback_cb'    => false
    ));
  ?>
</nav>



                  <!-- mainmenu end -->
                </div>
                <div class="de-flex-col">
                  <div class="menu_side_area">


                  <a href="<?php echo get_theme_mod('header_button_url'); ?>" class="btn-main"><?php echo get_theme_mod('header_button_text'); ?></a>


                   
                    <span id="menu-btn"></span>

                    
                  </div>

                  <div id="btn-extra">
                    <span></span>
                    <span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- header end -->
