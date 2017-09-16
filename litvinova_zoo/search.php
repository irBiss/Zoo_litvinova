
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
		
		
       
            <h2 ><?php printf( __('Результаты поиска по запросу: %s', 'default'), get_search_query() ); ?></h2>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            <?php endwhile;	else:?>
                <p><?php echo __('Sorry, no results found', 'litvinova_zoo'); ?></p>
            <?php endif; ?>
   
    
<?php get_footer(); ?>