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
} else if($slug == 'contact' || $slug == 'faq'){
	$color = 'color03';
} else {
	$color = 'color04';
}
get_header();
?>
<div id="loading" class="area_loading">
	<div class="box_birds blur">
		<img class="box_birds_01" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/bird01.svg" alt="">
		<img class="box_birds_02" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/bird02.svg" alt="">
	</div>
	<div class="img_loading"><img class="blur" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/img_town.png" alt="街並みのイラスト"></div>
</div>

<main id="primary" class="site_main <?php echo get_post_field('post_name',get_the_ID()); ?> <?php echo get_post_type(); ?>">
<section class="sect_<?php echo $slug; ?> <?php echo $color; ?> container mb-20 mx-auto px-6 md:px-4 lg:mb-[6.25rem] lg:px-5 xl:mb-[7.5rem]">
	<hgroup class="mt-10 mb-20 text-center md:mt-16 lg:mt-20 lg:mb-[6.25rem]">
		<?php if($slug == 'job-description') : ?>
		<h1 class="inline-block"><?php the_title(); ?><small class="block">job description</small></h1>
		<?php elseif($slug == 'document') : ?>
		<h1 class="inline-block">各種書類<br class="sm:hidden">ダウンロード<small class="block">download</small></h1>
		<?php elseif($slug == 'privacy-policy') : ?>
		<h1 class="inline-block">プライバシー<br class="sm:hidden">ポリシー<small class="block">privacy policy</small></h1>
		<?php else : ?>
		<h1 class="inline-block"><?php the_title(); ?><small class="block"><?php echo $slug; ?></small></h1>
		<?php endif ?>
	</hgroup>

	<?php
	while ( have_posts() ) :
		the_post();
		if($slug == 'job-description'){
			get_template_part( 'template-parts/content', 'description' );
		} else {
			get_template_part( 'template-parts/content', $slug );
			if($slug == 'recruit'){
				get_template_part( 'template-parts/content', 'interview' );
			}
		}
		// if($slug == 'about'){
		// 	get_template_part( 'template-parts/content', 'about' );
		// } else if($slug == 'service'){
		// 	get_template_part( 'template-parts/content', 'service' );
		// } else if($slug == 'faq'){
		// 	get_template_part( 'template-parts/content', 'faq' );
		// } else if($slug == 'recruit'){
		// 	get_template_part( 'template-parts/content', 'recruit' );
		// 	get_template_part( 'template-parts/content', 'interview' );
		// } else if($slug == 'job-description'){
		// 	get_template_part( 'template-parts/content', 'description' );
		// } else if($slug == 'contact'){
		// 	get_template_part( 'template-parts/content', 'contact' );
		// } else if($slug == 'entry'){
		// 	get_template_part( 'template-parts/content', 'entry' );
		// }
	endwhile; // End of the loop.
	?>

</section>
</main><!-- #main -->

<?php
get_footer();
