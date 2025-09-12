<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */

?>

<article id="post-<?php the_ID(); ?>" class="post lg:w-2/3 lg:mx-auto">
	<header class="hd_post mb-8 lg:mb-10">
		<?php
		the_title( '<h1 class="hd_post_ttl">', '</h1>' );
		if ( 'post' === get_post_type() ) : ?>
			<p class="mt-1 text-sm lg:text-[15px]"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time></p>
		<?php endif; ?>
	</header>

	<?php kobayashi_post_thumbnail(); ?>

	<div class="post_content">
		<?php
		the_content();
		?>
	</div>
	<div class="post_link flex justify-between mt-12 md:mt-14 lg:mt-16">
		<div class="next"><?php next_post_link('%link','次へ'); ?></div>
		<div><a href="/category/topics/">トピックス一覧へ</a></div>
		<div class="previous"><?php previous_post_link('%link','前へ'); ?></div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
