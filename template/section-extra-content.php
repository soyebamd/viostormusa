
    <!-- overlay content begin -->
    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="images/logo-white.webp" class="w-150px" alt="">

            <div class="spacer-30-line"></div>

            <h5>Our Services</h5>
           

            <?php
              wp_nav_menu([
                'theme_location' => 'footer_menu_2',
                'menu_class' => 'no-style',
                'container' => false,
                'fallback_cb' => false,
              ]);
              ?>

            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>

           
            
            <div><i class="icofont-clock-time me-2 op-5"></i> <?php echo get_theme_mod('topbar_hours'); ?></div>


            <div><i class="icofont-location-pin me-2 op-5"></i>
            
            
            <?php echo get_theme_mod('topbar_address'); ?>
           </div>
            <div><i class="icofont-envelope me-2 op-5"></i>
            
            
            <?php echo get_theme_mod('topbar_email'); ?>
            
            </div>    

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
          
            <?php if ($desc = get_theme_mod('footer_description')): ?>
          <p><?php echo wp_kses_post($desc); ?></p>
        <?php endif; ?>


            

<div class="social-icons">
 
    <?php
    $socials = [
      'facebook'   => 'fa-facebook',
      'x_twitter'  => 'fa-x-twitter',
      'youtube'    => 'fa-youtube',
      'pinterest'  => 'fa-pinterest',
      'instagram'  => 'fa-instagram'
    ];

    foreach ($socials as $key => $icon_class) :
      $url = get_theme_mod("topbar_$key");
      if (!empty($url)) : ?>
        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener">
          <i class="fa-brands <?php echo esc_attr($icon_class); ?>"></i>
        </a>
      <?php endif;
    endforeach;
    ?>
  </div>



        </div>
    </div>
