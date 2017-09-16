<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header>
			<div id="homeimage">
				<a href="<?php echo get_option('home'); ?>/">
				<img src="<?php bloginfo('template_url'); ?>/images/zoo.gif" alt="">
				</a>
			</div>
			<div><h1 id="slogan">smart zoo is waiting for you!!!</h1>
			</div>
			<?php get_search_form(); ?>
			
		
		</header>

		<nav class="main-navigation">
			<? wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu')); ?>
		</nav>
		
		