<?php get_header(); ?>
<section id="primary" class="content-area">

    <?php if( have_posts() ):
      while( have_posts() ):
        the_post();
        get_template_part( 'template-parts/pages/content', 'custom');
      endwhile; ?>
    <?php endif; ?>

</section><!-- .content-area -->
<?php get_footer(); ?>