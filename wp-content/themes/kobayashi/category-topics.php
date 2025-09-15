<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */

get_header();
// カテゴリーのデータを取得
$cat = get_the_category();
$cat = $cat[0];
?>

<main id="primary" class="site_main category <?php echo get_post_type(); ?>">
<section class="sect_topics color04 container mx-auto mb-20 px-6 md:px-4 lg:px-5 lg:mb-[100px]">
	<hgroup class="mt-10 mb-20 text-center md:mt-16 lg:mt-20 lg:mb-[7.5rem]">
		<h1 class="inline-block"><?php echo $cat->cat_name; ?><small class="block"><?php echo $cat->slug; ?></small></h1>
	</hgroup>
<?php if ( have_posts() ) : ?>
	<ul class="mb-8 lg:w-2/3 lg:mx-auto">
<?php while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/post', $cat->slug );
	endwhile; ?>
	</ul>
	<div class="lg:w-2/3 lg:mx-auto">
	<?php if(function_exists('wp_pagenavi')){ wp_pagenavi(); } ?>
	</div>
<?php else : ?>
<p class="text-center">現在、トピックスはありません</p>
<?php endif; ?>
</section>
</main><!-- #main -->

<?php
get_footer();
