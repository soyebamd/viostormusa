<?php get_header(); ?>


      <!-- content begin -->
      <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section
          id="section-contact"
          class="relative overflow-hidden z-1000 jarallax"
          data-video-src="<?php echo get_template_directory_uri(); ?>/mp4:video/2.mp4"
        >
          <div class="sw-overlay op-4"></div>
          <div class="h-30 de-gradient-edge-top op-5 dark z-2"></div>

          <div class="spacer-single"></div>
          <div class="container relative z-2">
            <div class="row g-4 justify-content-between align-items-center">
              <div class="col-lg-5 order-lg-1 order-2">
                <div class="bg-white">
                  <div
                    id="success_message_col"
                    class="success rounded-1 p-40 h-100"
                  >
                    <h3>Thank You For Your Order</h3>
                    <p>
                      We have received your request and will be processing it
                      shortly. Click button below if you want to make another
                      order.
                    </p>
                    <a class="btn-main" href="booking.html">Re-order</a>
                  </div>



                  <form
                    name="bookingForm"
                    id="booking_form"
                    class="form-underline position-relative z1000 bg-color-op-1 p-40 rounded-1"
                    method="post"
                    action="booking.php"
                  >
                    <div class="row g-3">
                      <div class="col-lg-12">
                        <h3 class="mb-3">
                          <i class="fa fa-envelope-o id-color me-2"></i> Get An
                          Appointment
                        </h3>

                        <div class="relative">
                          <select
                            name="service"
                            id="service"
                            class="form-control"
                          >
                            <option disabled selected value>
                              Select Service
                            </option>
                            <option value="Residential Cleaning">
                              Residential Cleaning
                            </option>
                            <option value="Commercial Cleaning">
                              Commercial Cleaning
                            </option>
                            <option value="Deep Cleaning">Deep Cleaning</option>
                            <option value="Move-In/Move-Out Cleaning">
                              Move-In/Move-Out Cleaning
                            </option>
                            <option value="Post-Construction Cleaning">
                              Post-Construction Cleaning
                            </option>
                            <option value="Carpet and Upholstery Cleaning">
                              Carpet and Upholstery Cleaning
                            </option>
                          </select>
                          <i
                            class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"
                          ></i>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div
                          id="date"
                          class="relative input-group date"
                          data-date-format="mm-dd-yyyy"
                        >
                          <i
                            class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-calendar"
                          ></i>
                          <input
                            class="form-control"
                            value="Select Date"
                            name="date"
                            type="text"
                          />
                          <span class="input-group-addon"
                            ><i class="glyphicon glyphicon-calendar"></i
                          ></span>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="relative">
                          <select name="time" id="time" class="form-control">
                            <option disabled selected value>Select Time</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                          </select>
                          <i
                            class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"
                          ></i>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <input
                          type="text"
                          name="name"
                          id="name"
                          placeholder="Name"
                          class="form-control"
                          placeholder=""
                          required
                        />
                      </div>

                      <div class="col-lg-4">
                        <input
                          type="text"
                          name="email"
                          id="email"
                          placeholder="Email"
                          class="form-control"
                          placeholder=""
                          required
                        />
                      </div>

                      <div class="col-lg-4">
                        <input
                          type="text"
                          name="phone"
                          id="phone"
                          placeholder="Phone"
                          class="form-control"
                          placeholder=""
                          required
                        />
                      </div>

                      <div class="col-lg-12">
                        <textarea
                          name="message"
                          id="message"
                          class="form-control"
                          placeholder="Message"
                        ></textarea>
                      </div>

                      <div class="col-lg-12">
                        <div id="submit">
                          <input
                            type="submit"
                            id="send_message"
                            value="Send Appointment"
                            class="btn-main"
                          />
                        </div>
                      </div>
                    </div>

                    <div id="error_message" class="error">
                      Sorry there was an error sending your form.
                    </div>
                  </form>



                </div>
              </div>




              <div class="col-lg-6 text-light order-lg-2 order-1">
                <div class="subtitle">
                  
                <?php
$tagline = get_post_meta(get_the_ID(), 'tagline', true);
if (!empty($tagline)) {
    echo '<p class="page-tagline">' . esc_html($tagline) . '</p>';
}
?>

</div>
                <h1><?php the_title(); ?></h1>
               
                <p class="col-lg-10 mb-4">
  <?php the_content(); ?>
</p>


              </div>



              
            </div>
          </div>
        </section>

        

        <?php get_template_part('template/section', 'how-it-works'); ?>


        <?php get_template_part('template/section', 'about-company'); ?>

        <?php get_template_part('template/section', 'our-services'); ?>

        <?php get_template_part('template/section', 'our-mission'); ?>

        <?php get_template_part('template/section', 'logo-scroller'); ?>

      </div>
      <!-- content end -->

    

<?php get_footer(); ?>