
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


            <div><i class="icofont-location-pin me-2 op-5"></i>100 S Main St, New York, </div>
            <div><i class="icofont-envelope me-2 op-5"></i>contact@wastewise.com</div>    

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p>We provide reliable, eco-conscious waste management solutions for homes, businesses, and industries. With a focus on sustainability and innovation, we help communities reduce waste, recycle more, and create a cleaner, greener future.</p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
