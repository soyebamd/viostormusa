<section aria-label="section" class="pt-4 pb-4 bg-color">
        <div class="wow fadeInRight d-flex">
            <div class="de-marquee-list relative wow">
                <?php
                $logos = new WP_Query([
                    'post_type' => 'logo_scroller',
                    'posts_per_page' => -1,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                ]);

                $icon_url = get_template_directory_uri() . '/images/logo-icon-line.webp';

                if ($logos->have_posts()):
                    while ($logos->have_posts()): $logos->the_post(); ?>
                        <span class="fs-36 lh-1 ms-5 me-2 p-4 text-white heading-font">
                            <?php the_title(); ?>
                        </span>
                        <img
                            src="<?php echo esc_url($icon_url); ?>"
                            class="abs abs-middle w-40px"
                            alt="divider"
                        />
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>