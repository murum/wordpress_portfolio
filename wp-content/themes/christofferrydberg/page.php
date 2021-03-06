<?php get_header(); ?>

<div class="cr-splash">
	<div class="container">
		<div class="row-fluid">
			<div class="span8 brand">
				<h1>Webbutvecklare med en förkärlek till agila utvecklingsmetoder</h1>
				<div class="row-fluid">
					<h2 class="span8">PS. Jag gillar mail i inkorgen <a href="mailto:christoffer@rydberg.me">christoffer@rydberg.me</a></h2>
					<a href="#" class="btn btn-inverse span4 cr-splash-button">Mitt CV</a>
				</div>
			</div>
			<img class="span4 cr-profile-picture" src="<?php echo get_template_directory_uri(); ?>/img/me.jpg" alt="Christoffer Rydberg Bild på mig" >
		</div>
	</div>
</div>
<div class="container cr-content">
	<div class="cr-content-header">
		<div class="row-fluid">
			<h2 class="span6">Referenser</h2>
			<!--
			<ul class="cr-project-types span6">
				<?php 
					$taxonomies = get_categories(array('type' => 'projekt', 'taxonomy' => 'typ', 'hide_empty' => false)); 
				?>
				<div class="row-fluid">
				<?php
					foreach ($taxonomies as $taxonomy ) {
						echo '<li class="cr-project-type span3">'. $taxonomy->name. '</li>';
					}
				?>
				</div>
			</ul>
			-->
		</div>
	</div>

		<?php
			$the_query = new WP_Query(array('post_type' => 'projekt')); 
		?>
		<?php $counter = 0; ?>
		<ul class="cr-projects">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php $counter++; ?>
				<?php if($counter%2 == 1) : ?>
					<div class="row-fluid">
				<?php endif; ?>
					<a class="span6 cr-project-link" href="<?php echo the_permalink(); ?>">
						<li class="cr-project">
							<?php the_post_thumbnail('project-thumb'); ?>
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
							<?php the_content(); ?>
						</li>
					</a>
				<?php if($counter%2 == 0) : ?>
					</div>
				<?php endif; ?>
			<?php endwhile; // end of the loop. ?>
		</ul>
	<?php get_footer(); ?>