<?php
/**
 * Template part = FAQ
 *
 * @package kobayashi
 */

?>

<?php
$faqArgs = [
	'post_type' => 'question_and_answer',
	'post_status' => 'publish',
	'posts_per_page' => -1,
];
$faqQuery = new WP_Query($faqArgs);
if ($faqQuery->have_posts()) :
	while ($faqQuery->have_posts()) : $faqQuery->the_post(); ?>
<div class="box_faq mb-5 p-4 rounded-2xl md:p-6 md:mb-6 lg:p-8 lg:mb-8 xl:w-5/6 xl:mx-auto">
	<div class="box_faq_question mb-4 pb-4 md:mb-5 md:pb-5 lg:mb-6 lg:pb-6">
		<h3><?php the_title(); ?></h3>
	</div>
	<div class="box_faq_answer lg:pl-10">
		<div class="inner">
		<?php the_content(); ?>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
