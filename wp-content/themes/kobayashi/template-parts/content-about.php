<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kobayashi
 */

?>

<div class="inner mb-20 md:flex md:gap-8 lg:w-5/6 lg:mx-auto lg:mb-[6.25rem] lg:gap-10 xl:mb-[7.5rem]">
	<div class="box_contents mb-6 md:w-1/2 md:mb-0">
		<h2 class="hd_decorated"><span class="inline-block">代表あいさつ</span></h2>
		<p><?php the_field('message'); ?></p>
		<p class="mt-5 font-medium">代表&emsp;<?php the_field('name'); ?></p>
	</div>
	<div class="box_image md:w-1/2">
		<img src="<?php the_field('img_president'); ?>" alt="代表・<?php the_field('name'); ?>">
	</div>
</div>

<div class="inner mb-20 md:flex md:items-center md:gap-8 lg:gap-10 lg:mb-[6.25rem] xl:mb-[7.5rem]">
	<div class="box_contents mb-6 md:w-1/2 md:mb-0 md:order-2 xl:pl-8">
		<h2 class="hd_decorated"><span class="inline-block">企業理念</span></h2>
		<p class="txt_philosophy font-semibold"><?php the_field('corporate_philosophy'); ?></p>
	</div>
	<div class="box_image md:w-1/2 md:order-1">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about/img_about.jpg" alt="株式会社こばやしのイメージ">
	</div>
</div>

<div class="inner mb-20 lg:mb-[6.25rem] lg:w-5/6 lg:mx-auto xl:mb-[7.5rem]">
	<h2 class="hd_decorated"><span class="inline-block">会社概要</span></h2>
	<table>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">会社名</th><td class="p-3 md:p-4 lg:px-8">株式会社こばやし</td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">所在地</th><td class="p-3 md:p-4 lg:px-8"><b>【本社】</b><br class="md:hidden">〒914-0137  福井県敦賀市ひばりケ丘町1057番</td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">電話番号</th><td class="p-3 md:p-4 lg:px-8">0770-23-1605</td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">FAX番号</th><td class="p-3 md:p-4 lg:px-8">0770-23-1607</td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">代表者名</th><td class="p-3 md:p-4 lg:px-8">代表取締役　小林 大阿</td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">設立年月日</th><td class="p-3 md:p-4 lg:px-8">2006年10月5日</td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">資本金</th><td class="p-3 md:p-4 lg:px-8">1,000,000円</td>
		</tr>
		<tr>
			<th class="p-3 md:p-4 lg:px-5">事業内容</th><td class="box_activities p-3 md:p-4 lg:px-8"><?php the_field('business_activities'); ?></td>
		</tr>
	</table>
</div>

<div class="inner area_history lg:w-5/6 lg:mx-auto">
	<h2 class="hd_decorated"><span class="inline-block">沿革</span></h2>
	<?php the_content(); ?>
</div>
