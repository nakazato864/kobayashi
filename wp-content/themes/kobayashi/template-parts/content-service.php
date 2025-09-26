<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */

?>

<div class="inner mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<ul class="area_link pl-0 flex flex-wrap justify-between items-end md:justify-start">
		<li class="text-sm font-medium"><a href="#Kyotaku">居宅介護支援</a></li>
		<li class="text-sm font-medium"><a href="#Kaigo">訪問介護</a></li>
		<li class="text-sm font-medium"><a href="#Kango">訪問看護</a></li>
		<li class="text-sm font-medium"><a href="#Day">デイサービス</a></li>
		<li class="text-sm font-medium"><a href="#Home">小規模多機能ホーム</a></li>
		<li class="text-sm font-medium"><a href="#SeniorHousing">サービス付高齢者住宅</a></li>
		<li class="text-sm font-medium"><a href="#Taxi">介護タクシー</a></li>
	</ul>
</div>

<section id="Kyotaku" class="mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">居宅介護支援</span></h2>
	<div class="inner mb-5 md:mb-8 md:flex md:gap-8 lg:gap-10">
		<div class="box_image mb-4 md:w-1/2 md:order-2 md:mb-0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/service01.png" alt="居宅介護支援のイラスト"></div>
		<div class="box_contents md:w-1/2 md:order-1">
			<p><?php the_field('txt_kyotaku'); ?></p>
		</div>
	</div>
	<div class="sub_contents area_caremanager mb-4 flex items-center gap-5 md:mb-6 lg:mb-8">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/care_manager.png" alt="ケアマネジャーのイラスト">
		<div class="box">
			<h3 class="hd_mark">ケアマネジャーとは</h3>
			<p><?php the_field('txt_caremanager'); ?></p>
		</div>
	</div>
	<?php
	$docName = [
		'居宅介護支援運営規程',
	];
	$cnt = 0;
	foreach ($docName as $name) :
		$post = get_page_by_path( $name, OBJECT, 'files' );
		if ( $post ) :
			if($cnt == 0) : ?>
		<div class="area_document pt-4 md:pt-5 md:text-right lg:pt6">
		<?php endif; ?>
		<div><p class="inline-block">
			<a href="<?php echo the_field('pdf_file', $post->post_content); ?>" download="<?php echo esc_html( $post->post_title ); ?>.pdf"><?php echo esc_html( $post->post_title ); ?></a>
			<small><?php echo the_field('data_issue', $post->post_content); ?></small>
		</p></div>
		<?php $cnt++; endif;
	endforeach;
	if($cnt > 0) : ?>
	</div>
	<?php  endif; wp_reset_postdata(); ?>
</section>

<section id="Kaigo" class="mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">訪問介護</span></h2>
	<div class="inner mb-5 md:mb-8 md:flex md:gap-8 lg:gap-10">
		<div class="box_image mb-4 md:w-1/2 md:order-2 md:mb-0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/service02.png" alt="訪問介護のイラスト"></div>
		<div class="box_contents md:w-1/2 md:order-1">
			<p><?php the_field('txt_kaigo'); ?></p>
		</div>
	</div>
	<div class="sub_contents md:grid md:grid-cols-3 md:gap-x-8 lg:gap-x-10">
		<h3 class="hd_mark md:col-span-3">訪問介護の主な内容</h3>
		<div class="box mb-2 md:mb-0"><?php the_field('content_kaigo01'); ?></div>
		<div class="box mb-2 md:mb-0"><?php the_field('content_kaigo02'); ?></div>
		<div class="box"><?php the_field('content_kaigo03'); ?></div>
	</div>
	<div class="btn_priority flex justify-center my-8"><a href="/wp-content/uploads/2025/09/houmonkaigo-servicefee.pdf" target="_blank" rel="noopener noreferrer">訪問介護の料金</a></div>
	<?php
	$docName = [
		'訪問介護運営規程',
	];
	$cnt = 0;
	foreach ($docName as $name) :
		$post = get_page_by_path( $name, OBJECT, 'files' );
		if ( $post ) :
			if($cnt == 0) : ?>
		<div class="area_document pt-4 md:pt-5 md:text-right lg:pt6">
		<?php endif; ?>
		<div><p class="inline-block">
			<a href="<?php echo the_field('pdf_file', $post->post_content); ?>" download="<?php echo esc_html( $post->post_title ); ?>.pdf"><?php echo esc_html( $post->post_title ); ?></a>
			<small><?php echo the_field('data_issue', $post->post_content); ?></small>
		</p></div>
		<?php $cnt++; endif;
	endforeach;
	if($cnt > 0) : ?>
	</div>
	<?php  endif; wp_reset_postdata(); ?>
</section>

<section id="Kango" class="mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">訪問看護</span></h2>
	<div class="inner mb-4 md:mb-5 md:flex md:gap-8 lg:gap-10">
		<div class="box_image mb-4 md:w-1/2 md:order-2 md:mb-0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/service03.png" alt="訪問看護のイラスト"></div>
		<div class="box_contents md:w-1/2 md:order-1">
			<p><?php the_field('txt_kango'); ?></p>
			<div class="sub_contents mt-4 lg:mt-6">
				<h3 class="hd_mark md:col-span-3">訪問看護の主な内容</h3>
				<div class="box"><?php the_field('content_kango'); ?></div>
			</div>
		</div>
	</div>
	<?php
	$docName = [
		'訪問看護運営規程',
	];
	$cnt = 0;
	foreach ($docName as $name) :
		$post = get_page_by_path( $name, OBJECT, 'files' );
		if ( $post ) :
			if($cnt == 0) : ?>
		<div class="area_document pt-4 md:pt-5 md:text-right lg:pt6">
		<?php endif; ?>
		<div><p class="inline-block">
			<a href="<?php echo the_field('pdf_file', $post->post_content); ?>" download="<?php echo esc_html( $post->post_title ); ?>.pdf"><?php echo esc_html( $post->post_title ); ?></a>
			<small><?php echo the_field('data_issue', $post->post_content); ?></small>
		</p></div>
		<?php $cnt++; endif;
	endforeach;
	if($cnt > 0) : ?>
	</div>
	<?php  endif; wp_reset_postdata(); ?>
</section>

<section id="Day" class="mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">デイサービス</span></h2>
	<div class="inner mb-4 md:mb-5 md:flex md:gap-8 lg:gap-10">
		<div class="box_image mb-4 md:w-1/2 md:order-2 md:mb-0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/service04.png" alt="デイサービスのイラスト"></div>
		<div class="box_contents md:w-1/2 md:order-1">
			<p><?php the_field('txt_dayservice'); ?></p>
			<div class="sub_contents mt-4 lg:mt-6">
				<h3 class="hd_mark md:col-span-3">デイサービスの主な内容</h3>
				<div class="box"><?php the_field('content_dayservice'); ?></div>
			</div>
		</div>
	</div>
	<?php
	$docName = [
		'デイサービス運営規程',
	];
	$cnt = 0;
	foreach ($docName as $name) :
		$post = get_page_by_path( $name, OBJECT, 'files' );
		if ( $post ) :
			if($cnt == 0) : ?>
		<div class="area_document pt-4 md:pt-5 md:text-right lg:pt6">
		<?php endif; ?>
		<div><p class="inline-block">
			<a href="<?php echo the_field('pdf_file', $post->post_content); ?>" download="<?php echo esc_html( $post->post_title ); ?>.pdf"><?php echo esc_html( $post->post_title ); ?></a>
			<small><?php echo the_field('data_issue', $post->post_content); ?></small>
		</p></div>
		<?php $cnt++; endif;
	endforeach;
	if($cnt > 0) : ?>
	</div>
	<?php  endif; wp_reset_postdata(); ?>
</section>

<section id="Home" class="mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">小規模多機能ホーム</span></h2>
	<div class="inner mb-4 md:mb-5 md:flex md:gap-8 lg:gap-10">
		<div class="box_image mb-4 md:w-1/2 md:order-2 md:mb-0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/service05.png" alt="小規模多機能ホームのイラスト"></div>
		<div class="box_contents md:w-1/2 md:order-1">
			<p><?php the_field('txt_home'); ?></p>
		</div>
	</div>
	<div class="sub_contents mb-4 md:mb-5 md:grid md:grid-cols-3 md:gap-x-8 lg:gap-x-10">
		<h3 class="hd_mark md:col-span-3">小規模多機能ホームの主な内容</h3>
		<div class="box mb-2 md:mb-0"><?php the_field('content_home01'); ?></div>
		<div class="box mb-2 md:mb-0"><?php the_field('content_home02'); ?></div>
		<div class="box"><?php the_field('content_home03'); ?></div>
	</div>
	<?php
	$docName = [
		'小規模多機能ホーム運営規程',
		'小規模多機能型居宅介護「サービス評価」総括表'
	];
	$cnt = 0;
	foreach ($docName as $name) :
		$post = get_page_by_path( $name, OBJECT, 'files' );
		if ( $post ) :
			if($cnt == 0) : ?>
		<div class="area_document pt-4 md:pt-5 md:text-right lg:pt6">
		<?php endif; ?>
		<div><p class="inline-block">
			<a href="<?php echo the_field('pdf_file', $post->post_content); ?>" download="<?php echo esc_html( $post->post_title ); ?>.pdf"><?php echo esc_html( $post->post_title ); ?></a>
			<small><?php echo the_field('data_issue', $post->post_content); ?></small>
		</p></div>
		<?php $cnt++; endif;
	endforeach;
	if($cnt > 0) : ?>
	</div>
	<?php  endif; wp_reset_postdata(); ?>
</section>

<section id="SeniorHousing" class="mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">サービス付き高齢者住宅</span></h2>
	<div class="inner mb-4 md:mb-5 md:flex md:gap-8 lg:gap-10">
		<div class="box_image mb-4 md:w-1/2 md:order-2 md:mb-0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/service06.png" alt="サービス付き高齢者住宅のイラスト"></div>
		<div class="box_contents md:w-1/2 md:order-1">
			<p><?php the_field('txt_seniorhousing'); ?></p>
		</div>
	</div>
	<div class="sub_contents mb-4 md:mb-5 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-4 lg:gap-x-10">
		<h3 class="hd_mark md:mb-0 md:col-span-3">主なサービス</h3>
		<?php the_field('content_seniorhousing'); ?>
	</div>
</section>

<section id="Taxi" class="mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">介護タクシー</span></h2>
	<div class="inner mb-4 md:mb-5 md:flex md:gap-8 lg:gap-10">
		<div class="box_image mb-4 md:w-1/2 md:order-2 md:mb-0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/service/service07.png" alt="介護タクシーのイラスト"></div>
		<div class="box_contents md:w-1/2 md:order-1">
			<p><?php the_field('txt_taxi'); ?></p>
			<div class="sub_contents mt-4 lg:mt-6">
				<h3 class="hd_mark md:col-span-3">介護タクシーの利用シーン</h3>
				<div class="box"><?php the_field('content_taxi'); ?></div>
			</div>
		</div>
	</div>
	<?php
	$docName = [
		'介護タクシー運営規程'
	];
	$cnt = 0;
	foreach ($docName as $name) :
		$post = get_page_by_path( $name, OBJECT, 'files' );
		if ( $post ) :
			if($cnt == 0) : ?>
		<div class="area_document pt-4 md:pt-5 md:text-right lg:pt6">
		<?php endif; ?>
		<div><p class="inline-block">
			<a href="<?php echo the_field('pdf_file', $post->post_content); ?>" download="<?php echo esc_html( $post->post_title ); ?>.pdf"><?php echo esc_html( $post->post_title ); ?></a>
			<small><?php echo the_field('data_issue', $post->post_content); ?></small>
		</p></div>
		<?php $cnt++; endif;
	endforeach;
	if($cnt > 0) : ?>
	</div>
	<?php  endif; wp_reset_postdata(); ?>
</section>
