<?php get_header(); ?>
<section id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php if( have_posts() ):
      while( have_posts() ):
        the_post();
        get_template_part( 'templates/singles/content' );
      endwhile; ?>
    <?php endif; ?>
  </main><!-- .site-main -->
</section><!-- .content-area -->
<?php get_footer(); ?>
