<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */
?>
<div class="inner area_message mb-20 md:flex lg:justify-end lg:mb-[6.25rem] xl:mb-[7.5rem]">
	<div class="box_contents mb-6 md:w-1/2 md:mb-0 md:pr-4 lg:w-5/12 lg:pr-5">
		<h2 class="hd_decorated"><span class="inline-block">採用メッセージ</span></h2>
		<?php the_content(); ?>
	</div>
	<div class="box_image md:w-1/2 md:pl-4 lg:pl-5">
		<img src="<?php the_field('img_recruit01'); ?>" alt="採用イメージ">
	</div>
</div>

<section class="mb-20 lg:mb-[6.25rem] lg:w-5/6 lg:mx-auto xl:mb-[7.5rem]">
	<div class="inner mb-8 md:flex md:gap-8 lg:gap-10 lg:mb-10">
		<div class="box_contents mb-6 md:w-1/2 md:mb-0 md:order-2">
			<h2 class="hd_decorated"><span class="inline-block">未経験でも働ける</span></h2>
			<p><?php the_field('message02'); ?></p>
		</div>
		<div class="box_image md:w-1/2 md:order-1">
			<img src="<?php the_field('img_recruit02'); ?>" alt="新人が働くイメージ">
		</div>
	</div>
	<div class="box_button inline-flex justify-center flex-wrap gap-4 md:flex md:gap-5 lg:gap-8">
		<div class="btn_priority inline-block"><a href="/job-description/">募集要項を見る</a></div>
		<div class="btn_secondary inline-block"><a href="/entry/">エントリーする</a></div>
	</div>
</section>

<section class="mb-20 lg:mb-[6.25rem] lg:w-5/6 lg:mx-auto xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">こばやしの働く環境</span></h2>
	<div class="inner my-8 lg:my-12"><?php the_field('work_environment01'); ?></div>
	<div class="inner mb-8 md:flex md:gap-8 lg:gap-10 lg:mb-12">
		<div class="box_contents mb-6 md:w-1/2 md:mb-0"><?php the_field('work_environment02'); ?></div>
		<div class="box_image md:w-1/2">
			<img src="<?php the_field('img_recruit03'); ?>" alt="働く環境">
		</div>
	</div>
	<div class="inner mb-8 md:flex md:gap-8 lg:gap-10 lg:mb-12">
		<div class="box_contents mb-6 md:w-1/2 md:order-2 md:mb-0"><?php the_field('work_environment03'); ?></div>
		<div class="box_image md:w-1/2 md:order-1">
			<img src="<?php the_field('img_recruit04'); ?>" alt="働く環境">
		</div>
	</div>
	<div class="inner mb-8 md:flex md:gap-8 lg:gap-10 lg:mb-12">
		<div class="box_contents mb-6 md:w-1/2 md:mb-0"><?php the_field('work_environment04'); ?></div>
		<div class="box_image md:w-1/2">
			<img src="<?php the_field('img_recruit05'); ?>" alt="働く環境">
		</div>
	</div>
	<div class="box_button inline-flex justify-center flex-wrap gap-4 md:flex md:gap-5 lg:gap-8">
		<div class="btn_priority inline-block"><a href="/job-description/">募集要項を見る</a></div>
		<div class="btn_secondary inline-block"><a href="/entry/">エントリーする</a></div>
	</div>
</section>

<section class="area_benefits mb-20 lg:mb-[6.25rem] lg:w-5/6 lg:mx-auto xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">福利厚生</span></h2>
	<p class="mb-5 lg:mb-10">株式会社こばやしでは、さまざまな福利厚生を用意しています。</p>
	<div class="inner mb-8 lg:mb-10">
		<?php the_field('benefits01'); ?>
	</div>
	<div class="inner mb-8 md:flex md:gap-8 lg:gap-10 lg:mb-10">
		<div class="box_contents mb-6 md:w-1/2 md:order-2 md:mb-0">
			<h3 class="hd_mark">社内託児所</h3>
			<p><?php the_field('benefits02'); ?></p>
		</div>
		<div class="box_image md:w-1/2 md:order-1">
			<img src="<?php the_field('img_recruit06'); ?>" alt="託児所のイメージ">
		</div>
	</div>
	<div class="box_button inline-flex justify-center flex-wrap gap-4 md:flex md:gap-5 lg:gap-8">
		<div class="btn_priority inline-block"><a href="/job-description/">募集要項を見る</a></div>
		<div class="btn_secondary inline-block"><a href="/entry/">エントリーする</a></div>
	</div>
</section>
