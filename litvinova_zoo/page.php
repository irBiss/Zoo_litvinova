
<?php get_header(); ?>
<div class="box">
	
	<div class="side">
		<?php get_sidebar(); ?>
		<div class="ads"><p> "Место для вашей рекламы"</p></div>
		<div class="social">
				
				<a href="http://twitter.com/"><img src="<?php bloginfo('template_url'); ?>/images/Twitter NEW.png" alt=""> </a>
				<a href="http://facebook.com/"><img src="<?php bloginfo('template_url'); ?>/images/Facebook alt 1.png" alt=""></a>
				<a href="http://plus.google.com/"><img src="<?php bloginfo('template_url'); ?>/images/Google+ alt.png" alt=""></a>
				<a href="http://pinterest.com/"><img src="<?php bloginfo('template_url'); ?>/images/Pinterest alt.png" alt=""></a>
				<a href="http://youtube.com/"><img src="<?php bloginfo('template_url'); ?>/images/Youtube alt 2.png" alt=""></a>
				<a href="http://foxnews.com/"><img src="<?php bloginfo('template_url'); ?>/images/Fox News.png" alt=""></a>
				
				
		</div>
		<div class="usefullinks">
			<!--<a href="http://twitter.com/"><img src="<?php bloginfo('template_url'); ?>/images/Twitter NEW.png" alt=""> </a>-->
		
		</div> 
	</div>

	<div class="containercontent">
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?><br>
		<div class="main-heading">
			<h1><?php the_title(); ?></h1>
		</div>
	

		<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
<?php get_footer(); ?>
