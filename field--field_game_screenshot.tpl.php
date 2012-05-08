<?php if ($element['#view_mode'] == 'full'): // full page, or teaser (front page) ?>
	<?php foreach ($items as $delta => $item) : // print all the screenshots ?>
		<div class="screenshot">
			<?php print render($item); ?>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<?php print render($items[0]) // print just the first one ?>
<?php endif; ?>