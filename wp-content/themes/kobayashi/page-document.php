<?php
/**
 * The template for Privacy Policy
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */

get_header();
?>

<main id="primary" class="site_main <?php echo get_post_type(); ?>">
<section class="sect_document color04 container mb-20 mx-auto px-6 md:px-4 lg:mb-[6.25rem] lg:px-5 xl:mb-[7.5rem]">
	<hgroup class="mt-10 mb-20 text-center md:mt-16 lg:mt-20 lg:mb-[6.25rem]">
		<h1 class="inline-block">各種書類<br class="sm:hidden">ダウンロード<small class="block">download</small></h1>
	</hgroup>
	<div class="inner lg:w-3/4 lg:mx-auto xl:w-2/3">
<?php
$catName = [
	'regulation',
	'evaluation'
];
foreach ($catName as $slug) :
$category = get_category_by_slug( $slug );
?>
	<h2 class="hd_decorated"><span class="inline-block"><?php echo $category->name; ?></span></h2>
	<?php if($slug == 'regulation') : ?>
	<ul class="box_contents mb-20">
	<?php else : ?>
	<ul class="box_contents">
	<?php endif; ?>
	<?php $docArgs = [
		'post_type' => 'files',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'category_name' => $slug,
	];
	$docQuery = new WP_Query($docArgs);
	if ($docQuery->have_posts()) :
		while ($docQuery->have_posts()) :
			$docQuery->the_post();
			get_template_part('template-parts/post', 'document');
		endwhile;
	endif;
	?>
	</ul>
<?php endforeach; ?>
	</div>
</section>
</main><!-- #main -->

<?php
get_footer();
