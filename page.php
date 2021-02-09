<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EGFundsDexlLagan
 */

get_header();
?>

<main>



<?php
	if ( have_posts() ) :

		if ( is_front_page() && ! is_home() ) :
			?>
			<!-- is front page -->
			<?php
		endif;

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
			* Include the Post-Type-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Type name) and that will be used instead.
			*/
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

	endif;
?>

</main>




<?php
get_sidebar();
get_footer();
