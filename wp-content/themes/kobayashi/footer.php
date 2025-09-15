<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kobayashi
 */

?>

<footer id="colophon" class="site_footer py-14">
	<div class="container mx-auto px-6 md:px-4 lg:px-5">
		<div class="site_footer_logo mb-10"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo_Kobayashi_wh.svg" alt="株式会社こばやし"></div>
		<div class="inner_footer_nav lg:flex lg:gap-8 lg:py-10">
			<nav class="footer_navgation py-10 lg:w-1/3 lg:py-0 xl:w-5/12">
				<ul class="footer_navgation_list mb-5 flex flex-wrap justify-between md:w-1/2 lg:w-full xl:justify-start xl:gap-x-8">
					<li><a href="/">トップページ</a></li>
					<li><a href="/category/topics/">トピックス</a></li>
					<li><a href="/about/">私たちについて</a></li>
					<li><a href="/service/">事業サービス</a></li>
					<li><a href="/faq/">よくある質問</a></li>
					<li><a href="/recruit/">採用情報</a></li>
					<li><a href="/job-description/">募集要項</a></li>
					<li><a href="/contact/">お問い合わせ</a></li>
				</ul>
				<ul class="footer_sub_navgation text-sm lg:text-base">
					<li class="mb-3"><a href="/document/">各種書類ダウンロード</a></li>
					<li><a href="/privacy-policy/">プライバシーポリシー</a></li>
				</ul>
			</nav>
			<div class="wrap_office_info mt-10 md:flex md:gap-8 lg:w-2/3 lg:mt-0 xl:w-7/12">
				<div class="office md:w-1/2">
					<h3 class="mb-1 text-lg font-bold">株式会社こばやし</h3>
					<p class="mb-1 text-sm font-light"><span class="inline-block">居宅介護支援事業所／</span><span class="inline-block">ヘルパーステーション／</span><span class="inline-block">訪問看護ステーション／</span><span class="inline-block">小規模多機能ホーム</span></p>
					<p class="text-sm mb-1">〒914-0137<br>福井県敦賀市ひばりケ丘町1057番</p>
					<p class="txt_tel"><span class="mr-2 text-sm font-semibold">TEL</span><a href="tel:0770-23-1605" class="font-bold text-2xl">0770-23-1605</a></p>
					<p class="txt_fax -mt-1 font-semibold"><span class="mr-2 text-sm">FAX</span><span>0770-23-1607</span></p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1436.380790056297!2d136.04000832799215!3d35.62293355669253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001e540d1734d1b%3A0x3cbf3dd199c54cee!2z77yI5qCq77yJ44GT44Gw44KE44GX!5e0!3m2!1sja!2sjp!4v1752474218599!5m2!1sja!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-4 aspect-[4/3] rounded-lg"></iframe>
				</div>
				<div class="office mt-10 md:w-1/2 md:mt-0">
					<h3 class="mb-1 text-lg font-bold">サービス付き高齢者住宅「悠優」</h3>
					<p class="mb-1 text-sm font-light"><span class="inline-block">サービス付き高齢者住宅／</span><span class="inline-block">デイサービス／</span><span class="inline-block">介護タクシー</span></p>
					<p class="text-sm mb-1">〒914-0137<br>福井県敦賀市ひばりケ丘町1008番</p>
					<p class="txt_tel"><span class="mr-2 text-sm font-semibold">TEL</span><a href="tel:0770-25-8008" class="font-bold text-2xl">0770-25-8008</a></p>
					<p class="txt_fax -mt-1 font-semibold"><span class="mr-2 text-sm">FAX</span><span>0770-25-8007</span></p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1441.6937459889116!2d136.0399974920966!3d35.622921069144496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001e540bce4d073%3A0x6977aa0203c5c914!2z44CSOTE0LTAxMzcg56aP5LqV55yM5pWm6LOA5biC44Gy44Gw44KK44Kx5LiY55S677yR77yR77yQ77yZ!5e0!3m2!1sja!2sjp!4v1752474265610!5m2!1sja!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-4 aspect-[4/3] rounded-lg"></iframe>
				</div>
			</div>
		</div>
		<p class="mt-10 text-center"><small class="text-xs">&copy;株式会社こばやし</small></p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
<?php if ( is_front_page() ) : ?>
<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/swiper.js"></script>
<?php endif; ?>

</body>
</html>
