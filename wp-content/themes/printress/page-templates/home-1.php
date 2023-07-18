<?php 
/*
 * Template Name: Home One Template
 * Description: A Page Template with a Page Builder design.
 */
$printress_redux_demo = get_option('redux_demo');
get_header('1'); 
?>
<main>
	<?php if (have_posts()){ ?>
	    <?php while (have_posts()) : the_post()?>
	      <?php the_content(); ?>
	    <?php endwhile; ?>
	<?php }else {
		echo esc_html__( 'Home One Template', 'printress' );
	}?>
</main>
<?php
get_footer('1');
?>