<?php foreach ($items as $delta => $item) : ?>
	<?php if (getVimeoId(render($item))) : ?>
		<iframe width="700" height="394" style="float: left; margin-bottom: 0;" src="http://player.vimeo.com/video/<?= getVimeoId(render($item)) ?>?portrait=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	<?php else : ?>
		<iframe width="700" height="424" style="float: left; margin-bottom: 0;" src="http://www.youtube.com/embed/<?= getYoutubeId(render($item)) ?>?rel=0" frameborder="0" allowfullscreen></iframe>
	<?php endif; ?>
<?php endforeach;