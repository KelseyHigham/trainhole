<?php /* This code is stolen from the game screenshot code; so a bunch of it doesn't make sense. For instance, events are never shown in teaser form, and they use images, not screenshots. */

if ($element['#view_mode'] == 'full'): // full page, or teaser (front page) ?>
	<?php foreach ($items as $delta => $item) : // print all the screenshots ?>
		<div class="screenshot" style="width: 940px; float: left; text-align: center; ">
			<?php print render($item); ?>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<?php print render($items[0]) // print just the first one ?>
<?php endif; ?>