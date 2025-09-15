<?php
/**
 * Template part = FAQ
 *
 * @package kobayashi
 */
?>

<li class="pt-5 pb-4 md:flex md:justify-between md:items-center">
	<p><?php the_title(); ?><small><?php the_field('data_issue'); ?></small></p>
	<a href="<?php the_field('pdf_file'); ?>" download="<?php the_title(); ?>.pdf">PDFをダウンロード</a>
</li>
