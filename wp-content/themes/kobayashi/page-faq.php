<?php
/**
 * The template for FAQ page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */

get_header();
?>
<main id="primary" class="site_main <?php echo get_post_field('post_name',get_the_ID()); ?> <?php echo get_post_type(); ?>">
<section class="sect_faq color03 container mb-20 mx-auto px-6 md:px-4 lg:mb-[6.25rem] lg:px-5 xl:mb-[7.5rem]">
	<hgroup class="mt-10 mb-8 text-center md:mt-16 lg:mt-20 lg:mb-14">
		<h1 class="inline-block">よくある質問<small class="block">faq</small></h1>
	</hgroup>
<?php
$faqArgs = [
	'post_type' => 'question_and_answer',
	'post_status' => 'publish',
	'posts_per_page' => -1,
];
$faqQuery = new WP_Query($faqArgs);
if ($faqQuery->have_posts()) :
	while ($faqQuery->have_posts()) : $faqQuery->the_post();
		get_template_part('template-parts/post-faq');
	endwhile; ?>
<?php endif; ?>
</section>

</main><!-- #main -->

<?php
get_footer();
