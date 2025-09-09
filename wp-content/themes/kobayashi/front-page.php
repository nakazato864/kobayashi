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
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_01.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_02.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_03.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_04.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_05.jpg" alt="イメージ写真"></div>
			<div class="swiper-slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/main_06.jpg" alt="イメージ写真"></div>
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

<section class="sect_topics color04 container mx-auto mb-20 px-6 md:px-4 lg:px-5 lg:mb-[100px]">
	<hgroup class="mb-8 text-center">
		<h1 class="inline-block">トピックス<small class="block">topics</small></h1>
	</hgroup>
	<?php
	$args = [
		'post_type' => 'post',
		'posts_per_page' => 3
	];
	$newsQuery = new WP_Query($args);
	if ($newsQuery->have_posts()) : ?>
	<ul class="mb-8 lg:w-5/6 lg:mx-auto">
	<?php while ($newsQuery->have_posts()) : $newsQuery->the_post();
		get_template_part( 'template-parts/post', 'page' );
	endwhile; ?>
	</ul>
	<div class="btn_priority flex justify-center"><a href="#">トピックス一覧へ</a></div>
	<?php else : ?>
	<p class="text-center">現在、トピックスはありません</p>
	<?php endif; ?>
</section>

<section class="sect_about color01 mb-20 lg:mb-[100px]">
<div class="container mb-8 mx-auto px-6 md:px-4 md:grid md:grid-cols-2 md:gap-8 md:items-center lg:justify-items-end lg:px-5 lg:gap-10">
	<div class="box_content mb-5 md:mb-0 lg:w-5/6">
		<hgroup class="mb-8 text-center lg:mb-14">
			<h1 class="inline-block">私たちについて<small class="block">about</small></h1>
		</hgroup>
		<p class="md:mb-8 lg:mb-14">住み慣れた町で「ずっと暮らしていたい」。<br>そう願っている高齢者や障害者のために、私たちこばやしは医療や看護・介護に携わるスタッフたちと手を取り合い、その願いを叶えるお手伝いをいたします。</p>
		<div class="btn_priority justify-center hidden md:flex"><a href="#">会社概要へ</a></div>
	</div>
	<div class="image_content">
		<div class="mb-5 md:mb-5 lg:mb-8"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/no_image_l.png" alt="画像が見つかりません"></div>
		<div class="flex gap-5 w-full md:gap-5 lg:gap-8">
			<div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/no_image_s.png" alt="画像が見つかりません"></div>
			<div><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/no_image_s.png" alt="画像が見つかりません"></div>
		</div>
	</div>
</div>
<div class="btn_priority flex justify-center md:hidden"><a href="#">会社概要へ</a></div>
</section>

<section class="sect_service color02 container mb-20 mx-auto px-6 md:px-4 lg:mb-[100px] lg:px-5">
	<hgroup class="mb-8 text-center lg:mb-14">
		<h1 class="inline-block">事業サービス<small class="block">service</small></h1>
	</hgroup>
	<ul class="grid grid-cols-2 gap-4 mb-8 md:grid-cols-4 md:gap-5 lg:gap-8 lg:mb-14">
		<li class=""><a href="#">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/img_service01.png" alt="居宅介護支援">
			<p class="mt-3 lg:mt-4 lg:text-center">居宅介護支援</p>
		</a></li>
		<li class=""><a href="#">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/img_service02.png" alt="訪問介護（ヘルパーステーション）">
			<p class="mt-3 lg:mt-4 lg:text-center">訪問介護<br><small class="text-sm">（ヘルパーステーション）</small></p>
		</a></li>
		<li class=""><a href="#">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/img_service03.png" alt="訪問看護">
			<p class="mt-3 lg:mt-4 lg:text-center">訪問看護</p>
		</a></li>
		<li class=""><a href="#">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/img_service04.png" alt="デイサービス">
			<p class="mt-3 lg:mt-4 lg:text-center">デイサービス</p>
		</a></li>
		<li class=""><a href="#">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/img_service05.png" alt="小規模多機能ホーム">
			<p class="mt-3 lg:mt-4 lg:text-center">小規模<span class="inline-block">多機能ホーム</span></p>
		</a></li>
		<li class=""><a href="#">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/img_service06.png" alt="サービス付高齢者住宅">
			<p class="mt-3 lg:mt-4 lg:text-center">サービス付<span class="lg:inline-block">高齢者住宅</span></p>
		</a></li>
		<li class=""><a href="#">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/img_service07.png" alt="介護タクシー">
			<p class="mt-3 lg:mt-4 lg:text-center">介護タクシー</p>
		</a></li>
	</ul>
	<div class="btn_priority flex justify-center"><a href="/service/">事業サービスへ</a></div>
</section>

<section class="sect_faq color03 container mb-20 mx-auto px-6 md:px-4 lg:mb-[100px] lg:px-5">
	<hgroup class="mb-8 text-center lg:mb-14">
		<h1 class="inline-block">よくある質問<small class="block">faq</small></h1>
	</hgroup>
</section>

</main><!-- #main -->

<?php
get_footer();
