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
 * @package kobayashi
 */

global $post;
$slug = $post->post_name;
if($slug == 'about'){
	$color = 'color01';
} else if($slug == 'service' || $slug == 'recruit' || $slug == 'job-description' || $slug == 'entry'){
	$color = 'color02';
} else if($slug == 'contact'){
	$color = 'color03';
} else {
	$color = 'color01';
}
get_header();
?>
<main id="primary" class="site_main <?php echo get_post_field('post_name',get_the_ID()); ?> <?php echo get_post_type(); ?>">
<section class="sect_<?php echo $slug; ?> <?php echo $color; ?> container mb-20 mx-auto px-6 md:px-4 lg:mb-[6.25rem] lg:px-5 xl:mb-[7.5rem]">
	<hgroup class="mt-10 mb-20 text-center md:mt-16 lg:mt-20 lg:mb-[6.25rem]">
		<h1 class="inline-block"><?php the_title(); ?><small class="block"><?php echo $slug; ?></small></h1>
	</hgroup>

	<?php
	while ( have_posts() ) :
		the_post();
		if($slug == 'about'){
			get_template_part( 'template-parts/content', 'about' );
		} else if($slug == 'service'){
			get_template_part( 'template-parts/content', 'service' );
		} else if($slug == 'contact'){
			get_template_part( 'template-parts/content', 'contact' );
		}
	endwhile; // End of the loop.
	?>

</section>
</main><!-- #main -->

<?php
get_footer();
