<div class="container">
	<div class="row">
		<div class="col-md-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				<?php the_title();	?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">

				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</div>
</div>
