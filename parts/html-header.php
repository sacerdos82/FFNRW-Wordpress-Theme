<!DOCTYPE HTML>
<html>
	<head>

		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
				
		<?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?>>