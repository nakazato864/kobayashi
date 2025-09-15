<?php
/**
 * Template part = Topics
 *
 * @package kobayashi
 */
?>
<li class="py-4 md:pl-5"><a href="<?php the_permalink(); ?>">
	<p class="leading-normal md:flex md:items-baseline md:gap-8">
		<span class="txt_time text-sm"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time></span>
		<span class="ttl block"><?php the_title(); ?></span>
	</p>
</a></li>
