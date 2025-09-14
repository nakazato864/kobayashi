<?php
/**
 * The template for Privacy Policy
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */

get_header();
?>

<main id="primary" class="site_main <?php echo get_post_type(); ?> <?php echo get_post_field('post_name',get_the_ID()); ?>">
<section class="sect_privacypolicy color01 container mb-20 mx-auto px-6 md:px-4 lg:mb-[6.25rem] lg:px-5 xl:mb-[7.5rem]">
	<hgroup class="mt-10 mb-20 text-center md:mt-16 lg:mt-20 lg:mb-[6.25rem]">
		<h1 class="inline-block">プライバシー<br class="sm:hidden">ポリシー<small class="block">privacy policy</small></h1>
	</hgroup>
	<div class="inner lg:w-2/3 lg:mx-auto">
	<?php the_content(); ?>
	</div>
</section>
</main><!-- #main -->

<?php
get_footer();
