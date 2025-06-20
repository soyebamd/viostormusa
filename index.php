<?php get_header(); ?>


<div class="page-top" id="content">

<div id="top"></div>
<div class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
        
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumbnail mb-3">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('large'); ?>
            </a>
          </div>
        <?php endif; ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div>
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php esc_html_e( 'Sorry, no posts found.', 'mytheme' ); ?></p>
  <?php endif; ?>
</div>

</div>
    

<?php get_footer(); ?>