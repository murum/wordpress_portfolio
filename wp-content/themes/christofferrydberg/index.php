<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<h3>Referenser</h3>
		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>