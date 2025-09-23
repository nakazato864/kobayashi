<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */
?>
<?php
$jobArgs = [
	'post_type' => 'guidelines',
	'post_status' => 'publish',
	'posts_per_page' => -1, //全件を表示
];
$jobQuery = new WP_Query($jobArgs);
if ($jobQuery->have_posts()) : ?>
<div class="inner mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<ul class="area_link pl-0 flex flex-wrap justify-between items-end md:justify-start">
<?php while ($jobQuery->have_posts()) : $jobQuery->the_post(); ?>
		<li class="text-sm font-medium"><a href="#Item<?php echo $post->ID; ?>"><?php the_title(); ?></a></li>
<?php endwhile; ?>
	</ul>
</div>
<?php while ($jobQuery->have_posts()) : $jobQuery->the_post(); ?>
<div id="Item<?php echo $post->ID; ?>" class="inner mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-2/3 xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block"><?php the_title(); ?></span></h2>
	<table class="w-full">
		<tr>
			<th class="p-3 md:p-4 lg:px-5">雇用形態</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item01'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">応募条件</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item02'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">資格・免許</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item03'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">業務内容</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item04'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">勤務地</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item05'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">交通<br class="md:hidden">アクセス</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item06'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">勤務時間</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item07'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">給与</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item08'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">資格手当</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item09'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">試用期間</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item10'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">休日・休暇</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item11'); ?></td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">福利厚生</th>
			<td class="p-3 md:p-4 lg:px-8"><?php the_field('item12'); ?></td>
		</tr>
	</table>
	<div class="btn_secondary flex justify-center my-8"><a href="/entry/">エントリーする</a></div>
</div>
<?php endwhile; ?>
<?php else: ?>
<div class="inner mb-20 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] xl:w-3/4 xl:mb-[7.5rem]">
	<h3 class="md:mb-8 md:text-center">現在、採用募集は行っておりません</h3>
	<p class="md:text-center">採用に関心をお寄せいただき、誠にありがとうございます。<br>現在、弊社では新規採用の募集を行っておりません。<br>今後の採用情報につきましては、当ホームページにて随時ご案内いたします。<br>ご理解のほど、よろしくお願い申し上げます。</p>
</div>
<?php endif; ?>
