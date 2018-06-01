<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
	<!-- Perso CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Candal|Dosis|Open+Sans">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" />
	
	<title>Module 11 - MindGeek</title>
</head>
<body>
	<!--HEADER-->
	<header>
	<!-- 
	<nav>
			<a href="index.html"><h1><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo de MindGeek" /></h1></a>
			<a href="serveur-mutualise.html">
				<i class="fa fa-users" aria-hidden="true"></i>
				Serveur Mutualisé
			</a>
			<a href="serveur-dedie.html">
				<i class="fa fa-user" aria-hidden="true"></i>
				Serveur Dédié
			</a>
			<a href="cloud.html">
				<i class="fa fa-cloud" aria-hidden="true"></i>
				Solution "Cloud"
			</a>
			<a href="contact.html">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				Contact
			</a>
		</nav>
		 -->
		<nav>
			<a href="<?= esc_url( home_url() );?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo de MindGeek"/></a>
		
		 <?php 
		 $defaults = array(
		  	'theme_location' => 'header-menu',
		  	'container'      => 'nav',
		  	'echo'           => false
		  	);
		  	echo strip_tags(wp_nav_menu( $defaults ),'<a><i>');
		   ?>
		</nav>


<?php if(is_front_page()) : ?>
		<section id="tagline">
			<h1>L'hébergement à prix libre</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</section>
	<?php endif;
	?>
		<?php get_search_form() ?>
		
	</header>
	<!-- <main class= "container"> -->