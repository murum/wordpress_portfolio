<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="cr-header">
		<hgroup class="container">
			<div class="row-fluid">
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2><?php bloginfo( 'description' ); ?></h2>
			</div>
		</hgroup>
	</div>
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