<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kobayashi
 */

get_header();
?>

<main id="primary" class="site_main page">
<section class="sect_nopage color04 container mb-20 mx-auto px-6 md:px-4 lg:mb-[6.25rem] lg:px-5 xl:mb-[7.5rem]">
	<hgroup class="mt-10 mb-20 text-center md:mt-16 lg:mt-20 lg:mb-[6.25rem]">
		<h1 class="inline-block">ページがありません<small class="block">404 not found</small></h1>
	</hgroup>
	<div class="inner lg:w-2/3 lg:mx-auto">
		<p class="md:text-center">お探しのページは見つかりませんでした。<br>ページが削除されたか、URLが変更された可能性があります。</p>
		<div class="btn_priority mt-6 flex justify-center lg:mt-10"><a href="/">トップページへ</a></div>
	</div>
</section><!-- .error-404 -->
</main><!-- #main -->

<?php
get_footer();
