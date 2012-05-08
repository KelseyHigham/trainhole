<?php foreach ($items as $delta => $item) : ?>
	<?php if (getVimeoId(render($item))) : ?>
		<iframe width="940" height="529" style="float: left;" src="http://player.vimeo.com/video/<?= getVimeoId(render($item)) ?>?portrait=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	<?php else : ?>
		<iframe width="940" height="559" style="float: left;" src="http://www.youtube.com/embed/<?= getYoutubeId(render($item)) ?>?rel=0" frameborder="0" allowfullscreen></iframe>
	<?php endif; ?>
<?php endforeach;