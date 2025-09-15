<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kobayashi
 */

get_header();
?>

<main id="primary" class="site_main <?php echo get_post_type(); ?>">
<section class="sect_post color04 container mx-auto mb-20 px-6 md:px-4 lg:px-5 lg:mb-[100px]">
	<hgroup class="mt-10 mb-20 text-center md:mt-16 lg:mt-20 lg:mb-[7.5rem]">
		<h1 class="inline-block">トピックス<small class="block">topics</small></h1>
	</hgroup>
	<?php while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'post' );
	endwhile; ?>
</section>
</main><!-- #main -->

<?php
get_footer();
