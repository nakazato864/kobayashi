<?php
/**
 * Template part = FAQ
 *
 * @package kobayashi
 */
?>

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
			$docQuery->the_post(); ?>
		<li class="pt-5 pb-4 md:flex md:justify-between md:items-center">
			<p><?php the_title(); ?><small><?php the_field('data_issue'); ?></small></p>
			<a href="<?php the_field('pdf_file'); ?>" download="<?php the_title(); ?>.pdf">PDFをダウンロード</a>
		</li>
		<?php endwhile;
	endif;
	?>
	</ul>
<?php endforeach; ?>
</div>
