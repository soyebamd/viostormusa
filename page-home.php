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



        <section class="pt-0">
          <div class="container">
            <div class="row gy-4 gx-5 align-items-center">
              <div class="col-lg-5">
                <div class="subtitle wow fadeInUp mb-3">About Company</div>
                <h2 class="wow fadeInUp">
                  Waste Solutions For Brighter Tomorrow
                </h2>
                <p class="wow fadeInUp">
                  We specialize in innovative waste management solutions for
                  residential, commercial, and industrial clients. From
                  collection to recycling, we ensure responsible disposal that
                  protects the environment while keeping communities clean and
                  sustainable.
                </p>
              </div>

              <div class="col-lg-7">
                <div class="relative text-center">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/misc/5.webp"
                    class="w-30 abs bottom-min-10 start-0"
                    alt=""
                  />
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/misc/2.webp"
                    class="w-30 abs top-10 end-0"
                    alt=""
                  />
                  <img src="<?php echo get_template_directory_uri(); ?>/images/misc/3.webp" class="w-80" alt="" />
                </div>
                <div class="spacer-double"></div>
              </div>
            </div>
          </div>
        </section>

        <section class="pt-100 bg-dark text-light">
          <div class="container">
            <div class="row g-4 align-items-end justify-content-between">
              <div class="col-lg-5">
                <div class="subtitle">Our Services</div>
                <h2>A Simple Process For All Your Waste Management Needs</h2>
              </div>

              <div class="col-lg-4">
                <p class="lead">
                  Delivering smart waste solutions for homes, businesses &
                  industries to keeping communities clean and protecting the
                  environment every day.
                </p>
              </div>
            </div>
          </div>

          <div class="spacer-double"></div>
        </section>

        <section class="p-0">
          <div class="container relative z-1000 mt-min-100">
            <div class="row g-0">
              <!-- service item begin -->
              <div class="col-lg-3 col-sm-6">
                <div
                  class="hover overflow-hidden relative text-light text-center wow fadeInRight"
                  data-wow-delay=".0s"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/services/1.webp"
                    class="hover-scale-1-1 w-100 wow scaleIn"
                    alt=""
                  />
                  <div
                    class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered"
                  >
                    <div class="mb-3">
                      Delivering smart waste solutions for homes, businesses &
                      industries to keeping communities clean and protecting the
                      environment every day.
                    </div>
                    <a class="btn-line" href="service-single.html"
                      >View Details</a
                    >
                  </div>
                  <div
                    class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"
                  ></div>
                  <div
                    class="abs abs-centered z-2 mt-3 w-100 text-center hover-op-0"
                  >
                    <h4 class="mb-3">Waste Collection</h4>
                  </div>
                  <div
                    class="gradient-trans-dark-bottom abs w-100 h-80 bottom-0"
                  ></div>
                </div>
              </div>
              <!-- service item end -->

              <!-- service item begin -->
              <div class="col-lg-3 col-sm-6">
                <div
                  class="hover overflow-hidden relative text-light text-center wow fadeInRight"
                  data-wow-delay=".3s"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/services/2.webp"
                    class="hover-scale-1-1 w-100 wow scaleIn"
                    alt=""
                  />
                  <div
                    class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered"
                  >
                    <div class="mb-3">
                      Delivering smart waste solutions for homes, businesses &
                      industries to keeping communities clean and protecting the
                      environment every day.
                    </div>
                    <a class="btn-line" href="service-single.html"
                      >View Details</a
                    >
                  </div>
                  <div
                    class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"
                  ></div>
                  <div
                    class="abs abs-centered z-2 mt-3 w-100 text-center hover-op-0"
                  >
                    <h4 class="mb-3">Commercial Recycling</h4>
                  </div>
                  <div
                    class="gradient-trans-dark-bottom abs w-100 h-80 bottom-0"
                  ></div>
                </div>
              </div>
              <!-- service item end -->

              <!-- service item begin -->
              <div class="col-lg-3 col-sm-6">
                <div
                  class="hover overflow-hidden relative text-light text-center wow fadeInRight"
                  data-wow-delay=".6s"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/services/3.webp"
                    class="hover-scale-1-1 w-100 wow scaleIn"
                    alt=""
                  />
                  <div
                    class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered"
                  >
                    <div class="mb-3">
                      Delivering smart waste solutions for homes, businesses &
                      industries to keeping communities clean and protecting the
                      environment every day.
                    </div>
                    <a class="btn-line" href="service-single.html"
                      >View Details</a
                    >
                  </div>
                  <div
                    class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"
                  ></div>
                  <div
                    class="abs abs-centered z-2 mt-3 w-100 text-center hover-op-0"
                  >
                    <h4 class="mb-3">Dumpster Rental</h4>
                  </div>
                  <div
                    class="gradient-trans-dark-bottom abs w-100 h-80 bottom-0"
                  ></div>
                </div>
              </div>
              <!-- service item end -->

              <!-- service item begin -->
              <div class="col-lg-3 col-sm-6">
                <div
                  class="hover overflow-hidden relative text-light text-center wow fadeInRight"
                  data-wow-delay=".9s"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/services/4.webp"
                    class="hover-scale-1-1 w-100 wow scaleIn"
                    alt=""
                  />
                  <div
                    class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered"
                  >
                    <div class="mb-3">
                      Delivering smart waste solutions for homes, businesses &
                      industries to keeping communities clean and protecting the
                      environment every day.
                    </div>
                    <a class="btn-line" href="service-single.html"
                      >View Details</a
                    >
                  </div>
                  <div
                    class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"
                  ></div>
                  <div
                    class="abs abs-centered z-2 mt-3 w-100 text-center hover-op-0"
                  >
                    <h4 class="mb-3">Organic Waste</h4>
                  </div>
                  <div
                    class="gradient-trans-dark-bottom abs w-100 h-80 bottom-0"
                  ></div>
                </div>
              </div>
              <!-- service item end -->
            </div>
          </div>
        </section>

        <section class="relative overflow-hidden">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/misc/recycle-crop.webp"
            class="w-20 abs end-0 bottom-0 z-3"
            alt=""
          />
          <div class="container relative z-2">
            <div class="row g-4 align-items-end">
              <div class="col-lg-4">
                <div class="subtitle">Our Mission</div>
                <h2>Responsible Waste Disposal for a Healthier Tomorrow</h2>
              </div>
              <div class="col-lg-8">
                <ul class="ul-check fw-600">
                  <li>
                    Deliver efficient, eco-friendly waste collection, recycling,
                    and disposal services.
                  </li>
                  <li>
                    Promote sustainability through waste reduction, reuse, and
                    recycling initiatives.
                  </li>
                  <li>
                    Ensure compliance with environmental regulations and best
                    industry practices.
                  </li>
                  <li>
                    Educate communities on responsible waste management and
                    environmental stewardship.
                  </li>
                  <li>
                    Utilize advanced technology to enhance waste management
                    efficiency and sustainability.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section aria-label="section" class="pt-4 pb-4 bg-color">
          <div class="wow fadeInRight d-flex">
            <div class="de-marquee-list relative wow">
              <span class="fs-36 lh-1 ms-5 me-2 p-4 text-white heading-font"
                >Waste Collection</span
              >
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-line.webp"
                class="abs abs-middle w-40px"
                alt=""
              />
              <span class="fs-36 lh-1 ms-5 me-2 p-4 text-white heading-font"
                >Commercial Recycling</span
              >
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-line.webp"
                class="abs abs-middle w-40px"
                alt=""
              />
              <span class="fs-36 lh-1 ms-5 me-2 p-4 text-white heading-font"
                >Dumpster Rental</span
              >
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-line.webp"
                class="abs abs-middle w-40px"
                alt=""
              />
              <span class="fs-36 lh-1 ms-5 me-2 p-4 text-white heading-font"
                >Waste Management</span
              >
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-line.webp"
                class="abs abs-middle w-40px"
                alt=""
              />
              <span class="fs-36 lh-1 ms-5 me-2 p-4 text-white heading-font"
                >Organic Waste</span
              >
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-line.webp"
                class="abs abs-middle w-40px"
                alt=""
              />
              <span class="fs-36 lh-1 ms-5 me-2 p-4 text-white heading-font"
                >Waste Consulting</span
              >
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/logo-icon-line.webp"
                class="abs abs-middle w-40px"
                alt=""
              />
            </div>
          </div>
        </section>
      </div>
      <!-- content end -->

    

<?php get_footer(); ?>