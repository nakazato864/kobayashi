<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */
?>
<section class="area_interview mb-20 lg:mb-[6.25rem] lg:w-5/6 lg:mx-auto xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">スタッフインタビュー</span></h2>
<?php
$interviewArgs = [
	'post_type' => 'interview',
	'post_status' => 'publish',
	'posts_per_page' => -1, //全件を表示
];
$interviewQuery = new WP_Query($interviewArgs);
if ($interviewQuery->have_posts()) : ?>
	<ul class="interview_tab flex items-end mb-8 md:justify-start xl:mb-10">
	<?php
		while ($interviewQuery->have_posts()) : $interviewQuery->the_post();
		$count = $interviewQuery->current_post + 1;
		if($count == 1) : ?>
		<li class="active"><a href="#interview<?php echo $post->ID; ?>" class=""><?php the_title(); ?></a></li>
		<?php else: ?>
		<li><a href="#interview<?php echo $post->ID; ?>" class=""><?php the_title(); ?></a></li>
		<?php endif; ?>
	<?php endwhile; ?>
	</ul>
	<?php while ($interviewQuery->have_posts()) : $interviewQuery->the_post();
	$count = $interviewQuery->current_post + 1;
	if($count == 1) : ?>
	<div id="interview<?php echo $post->ID; ?>" class="interview_wrapper is_active">
	<?php else: ?>
	<div id="interview<?php echo $post->ID; ?>" class="interview_wrapper">
	<?php endif; ?>
	<div class="md:flex md:gap-8">
		<div class="box_image mb-8 md:w-1/4 lg:w-1/5"><img src="<?php the_field('img_staff'); ?>" alt="<?php the_title(); ?>" class="w-1/2 mx-auto md:w-full"></div>
		<div class="box md:w-3/4 lg:w-4/5">
		<h4 class="hd_question pb-3 mb-4">「働きやすい」と感じるポイントを教えてください</h4>
		<p class="mb-6 lg:mb-8"><?php the_field('interview01'); ?></p>
		</div>
	</div>
		<h4 class="hd_question pb-3 mb-4">やりがいや思い出に残っているエピソードはありますか？</h4>
		<p class="mb-6 lg:mb-8"><?php the_field('interview02'); ?></p>
		<h4 class="hd_question pb-3 mb-4">家庭との両立は大変ではありませんか？</h4>
		<p class="mb-6 lg:mb-8"><?php the_field('interview03'); ?></p>
		<h4 class="hd_question pb-3 mb-4">就職を考えている方へのメッセージをお願いします</h4>
		<p class="mb-6 lg:mb-8"><?php the_field('interview04'); ?></p>
	</div>
	<?php endwhile; ?>
<?php endif; ?>
	<div class="box_button inline-flex justify-center flex-wrap gap-4 md:flex md:gap-5 lg:gap-8">
		<div class="btn_priority inline-block"><a href="/job-description/">募集要項を見る</a></div>
		<div class="btn_secondary inline-block"><a href="/entry/">エントリーする</a></div>
	</div>
</section>
