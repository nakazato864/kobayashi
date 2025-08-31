<?php
/**
 * The template for Front Page
 *
 * @package kobayashi
 */

get_header();
?>

<main id="primary" class="site_main">
<section class="site_main_heading container overflow-x-hidden mx-auto mt-12 mb-20 px-6 md:px-4 md:flex md:items-end md:justify-between lg:px-5 lg:mb-[100px]">
	<div class="swiper01 hidden md:block">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_06.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_01.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_02.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_03.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_04.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_05.jpg" alt="イメージ写真"></div>
		</div>
	</div>
	<div class="inner">
		<h1 class="mx-auto z-10 relative"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/catchcopy.svg" alt="住み慣れた町で、ずっと元気に"></h1>
		<div class="swiper02 z-0 aspect-square md:aspect-[1.414/1]">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_01.jpg" alt="イメージ写真"></div>
				<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_02.jpg" alt="イメージ写真"></div>
				<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_03.jpg" alt="イメージ写真"></div>
				<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_04.jpg" alt="イメージ写真"></div>
				<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_05.jpg" alt="イメージ写真"></div>
				<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_06.jpg" alt="イメージ写真"></div>
			</div>
		</div>
		<div class="box_image mx-auto z-10 relative"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/illust_people.png" alt="イラストイメージ"></div>
	</div>
</section>
<section class="sect_topics color04 container mx-auto px-6 md:px-4 lg:px-5">
	<hgroup class="mb-8 text-center">
		<h1 class="inline-block">トピックス<small class="block">topics</small></h1>
	</hgroup>
	<ul class="mb-8 lg:w-5/6 lg:mx-auto">
	<?php
	$args = [
		'post_type' => 'post',
		'posts_per_page' => 3
	];
	$newsQuery = new WP_Query($args);
	if ($newsQuery->have_posts()) :
	while ($newsQuery->have_posts()) : $newsQuery->the_post();
		get_template_part( 'template-parts/post', 'page' );
	endwhile;
	endif; ?>
	</ul>
	<div class="btn_priority flex justify-center"><a href="#">トピックス一覧へ</a></div>
</section>



</main><!-- #main -->

<?php
get_footer();
