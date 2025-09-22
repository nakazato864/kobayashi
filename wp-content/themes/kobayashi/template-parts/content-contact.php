<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */

?>

<section class="mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">お電話・FAX</span></h2>
	<p class="mb-5 md:mb-6lg:mb-8">お電話・FAXまたはお問い合わせフォームから、お気軽にお問い合わせください。</p>
	<div class="box_contents mb-8 md:flex md:gap-6 lg:mb-[3.75rem] lg:gap-8">
		<div class="box mb-6 md:mb-0 md:w-1/2">
			<h3 class="hd_mark">株式会社こばやし</h3>
			<ul class="mt-0 mb-2 lg:mb-5 lg:flex lg:flex-wrap">
				<li class="lg:w-1/2">居宅介護支援事業所</li>
				<li class="lg:w-1/2">ヘルパーステーション</li>
				<li class="lg:w-1/2">訪問看護ステーション</li>
				<li class="lg:w-1/2">小規模多機能ホーム</li>
			</ul>
			<div class="txt_tel flex items-center gap-2 mb-2 lg:mb-3"><span>TEL</span><a href="tel:0770231605">0770-23-1605</a></div>
			<div class="txt_fax flex items-center gap-2"><span>FAX</span>0770-23-1607</div>
		</div>
		<div class="box md:w-1/2">
			<h3 class="hd_mark">サービス付き高齢者住宅「悠優」</h3>
			<ul class="mt-0 mb-2 lg:mb-5 lg:flex lg:flex-wrap">
				<li class="lg:w-full">サービス付き高齢者住宅</li>
				<li class="lg:w-1/2">デイサービス</li>
				<li class="lg:w-1/2">介護タクシー</li>
			</ul>
			<div class="txt_tel flex items-center gap-2 mb-2 lg:mb-3"><span>TEL</span><a href="tel:0770258008">0770-25-8008</a></div>
			<div class="txt_fax flex items-center gap-2"><span>FAX</span>0770-25-8008</div>
		</div>
	</div>
	<div class="box_image mt-8 lg:mt-[3.75rem]"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/contact/img_people.png" alt=""></div>
</section>

<section class="lg:w-5/6 lg:mx-auto xl:w-2/3">
	<h2 class="hd_decorated"><span class="inline-block">お問い合わせフォーム</span></h2>
	<p class="mb-8">下記フォームからもお問い合わせ可能です。<br>お問い合わせ内容を記入しフォームを送信してください。</p>
	<?php the_content(); ?>
</section>
