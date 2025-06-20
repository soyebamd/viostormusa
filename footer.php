<footer class="section-dark">
  <div class="container relative z-2">
    <div class="row gx-5 relative z-2">

      <!-- Footer Logo + Description -->
      <div class="col-lg-4 col-sm-6">
        <?php
        $footer_logo_id = get_theme_mod('footer_logo');
        if ($footer_logo_id):
            $footer_logo_url = wp_get_attachment_image_url($footer_logo_id, 'full');
        ?>
          <div class="footer-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo esc_url($footer_logo_url); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
          </div>
        <?php else: ?>
          <div class="footer-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          </div>
        <?php endif; ?>

        <div class="spacer-20"></div>

        <?php if ($desc = get_theme_mod('footer_description')): ?>
          <p><?php echo wp_kses_post($desc); ?></p>
        <?php endif; ?>
      </div>

      <!-- Dynamic Menus -->
      <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
        <div class="row">
          <div class="col-lg-6 col-sm-6">
            <div class="widget">
              <h5><?php _e('Company', 'viostormusa'); ?></h5>
              <?php
              wp_nav_menu([
                'theme_location' => 'footer_menu_1',
                'menu_class' => '',
                'container' => false,
                'fallback_cb' => false,
              ]);
              ?>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="widget">
              <h5><?php _e('Our Services', 'viostormusa'); ?></h5>
              <?php
              wp_nav_menu([
                'theme_location' => 'footer_menu_2',
                'menu_class' => '',
                'container' => false,
                'fallback_cb' => false,
              ]);
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter Widget -->
      <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
       

      <div class="widget">
                <h5>Subscribe to Newsletter</h5>
                <form
                  action="#"
                  class="row form-dark"
                  id="form_subscribe"
                  method="post"
                  name="form_subscribe"
                >
                  <div class="col text-center">
                    <input
                      class="form-control"
                      id="txt_subscribe"
                      name="txt_subscribe"
                      placeholder="enter your email"
                      type="text"
                    />
                    <a href="#" id="btn-subscribe"
                      ><i class="arrow_right bg-color-secondary"></i
                    ></a>
                    <div class="clearfix"></div>
                  </div>
                </form>
                <div class="spacer-10"></div>
                <small>Your email is safe with us. We don't spam.</small>
                <div class="spacer-30"></div>

                














<div class="widget">
  <h5>Follow Us</h5>
  <div class="social-icons mb-sm-30">
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

      </div>

    </div>

    <!-- Footer Brand Name -->
    <div class="row">
      <div class="col-lg-12 order-3">
        <div class="spacer-single"></div>
        <div class="spacer-double"></div>
        <div class="spacer-double"></div>
        <div class="spacer-double"></div>
        <div class="abs bottom-0">
          <h2 class="text-fit p-0 lh-1 op-2 text-lowercase fw-bolder">VIOSTORM</h2>
        </div>
      </div>
    </div>
  </div>
</footer>


<?php get_template_part('template/section', 'extra-content'); ?>

<?php wp_footer(); ?>
</body>
</html>
