<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

		<nav class="nav-single">
		</nav><!-- .nav-single -->

		<div class="cr-project-navigation-background">
			<div class="container">
				<div class="row-fluid">
					<span class="span6 alignleft cr-project-navigation">
						<?php 
							previous_post_link("%link", 
								"
									<span class='icon-chevron-sign-left icon-3x cr-project-previous'></span>
									<span class='cr-project-previous-text'>%title</span>
								"); 
						?>
					</span>
					<span class="span6 alignright cr-project-navigation">
						<?php next_post_link("%link", 
							"
								<span class='cr-project-next-text'>%title</span>
								<span class='icon-chevron-sign-right icon-3x cr-project-next'></span>
							"); 
						?>
					</span>
				</div>
			</div>
		</div>
		<div class="container cr-content">
			<div class="row-fluid">
				<h2 class="offset2 span8 cr-project-title"><?php the_title(); ?></h2>
			</div>
			<div class="row-fluid">
				<div class="offset1 span10"><?php the_post_thumbnail('full'); ?></div>
			</div>
			<div class="row-fluid cr-project-information">
				<div class="offset2 span6 cr-project-content">
					<?php the_content(); ?>
				</div>
				<div class="span4 cr-project-tags">
					<?php $types = wp_get_post_terms($post->ID, 'typ'); ?>
					<ul class="cr-project-types-list">
						<?php foreach($types as $type) : ?>
							<li class="label cr-project-list-type"><?php echo $type->name; ?></li>
						<?php endforeach; ?>
					</ul>

					<?php $tekniker = wp_get_post_terms($post->ID, 'teknik'); ?>
					<ul class="cr-project-techniques">
						<?php foreach($tekniker as $teknik) : ?>
							<li class="label label-success cr-project-technique"><?php echo $teknik->name; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>