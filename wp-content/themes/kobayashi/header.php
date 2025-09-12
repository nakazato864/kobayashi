<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kobayashi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>

<!-- jQuery core -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=IBM+Plex+Sans+JP:wght@100;200;300;400;500;600;700&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<?php if ( is_front_page() ) : ?>
<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<?php endif; ?>
<!-- Tailwindcss -->
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/tailwind-dist.css">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/main.css">
</head>
<body <?php body_class(); ?>>
<?php  wp_body_open(); ?>
<header id="masthead" class="site_header">
	<div class="site_header_inner lg:flex lg:justify-between lg:items-center lg:gap-10">
	<div class="site_branding flex justify-between items-center lg:block">
		<h1><a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo_Kobayashi.svg" alt="株式会社こばやし"></a></h1>
		<div class="btn_menu"><span></span><span></span><span></span></div>
	</div><!-- .site_branding -->

	<nav id="site-navigation" class="main_navigation lg:w-full">
		<ul class="main_navigation_list lg:flex lg:justify-between lg:items-center xl:justify-end">
			<li><a href="/">トップページ</a></li>
			<li><a href="/category/topics/">トピックス</a></li>
			<li><a href="/about/">私たちについて</a></li>
			<li><a href="/service/">事業サービス</a></li>
			<li><a href="/faq/">よくある質問</a></li>
			<li><a href="/recruit/">採用情報</a></li>
			<li><a href="/job-description/">募集要項</a></li>
		</ul>
		<ul class="sub_navigation_list">
			<li class="mb-1"><a href="/document/">各種書類<br class="hidden lg:inline xl:hidden">ダウンロード</a></li>
			<li class="mb-1 lg:mb-0"><a href="/contact/">お問い合わせ</a></li>
			<li class="lg:hidden"><a href="/privacy-policy/">プライバシーポリシー</a></li>
		</ul>
	</nav><!-- #site-navigation -->
	</div><!-- .site_header_inner -->
</header><!-- #masthead -->
