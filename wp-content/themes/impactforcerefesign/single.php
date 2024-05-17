<?php get_header(); ?>
<section id="primary" class="article article-template-1">
    <?php if( have_posts() ):
      while( have_posts() ):
        the_post();
        get_template_part( 'template-parts/singles/content' );
      endwhile; ?>
    <?php endif; ?>
</section><!-- .content-area -->
<?php get_footer(); ?>
