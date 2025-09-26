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
<div id="loading" class="area_loading">
	<div class="box_birds blur">
		<img class="box_birds_01" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/bird01.svg" alt="">
		<img class="box_birds_02" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/bird02.svg" alt="">
	</div>
	<div class="img_loading"><img class="blur" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/img_town.png" alt="街並みのイラスト"></div>
</div>

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
