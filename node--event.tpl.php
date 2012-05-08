<?php
// $Id: node--game.tpl.php

/**
* @file
* Default theme implementation to display a node.
*
* Available variables:
* - $title: the (sanitized) title of the node.
* - $content: An array of node items. Use render($content) to print them all,
*   or print a subset such as render($content['field_example']). Use
*   hide($content['field_example']) to temporarily suppress the printing of a
*   given element.
* - $user_picture: The node author's picture from user-picture.tpl.php.
* - $date: Formatted creation date. Preprocess functions can reformat it by
*   calling format_date() with the desired parameters on the $created variable.
* - $name: Themed username of node author output from theme_username().
* - $node_url: Direct url of the current node.
* - $display_submitted: Whether submission information should be displayed.
* - $submitted: Submission information created from $name and $date during
*   template_preprocess_node().
* - $classes: String of classes that can be used to style contextually through
*   CSS. It can be manipulated through the variable $classes_array from
*   preprocess functions. The default values can be one or more of the
*   following:
*   - node: The current template type, i.e., "theming hook".
*   - node-[type]: The current node type. For example, if the node is a
*     "Blog entry" it would result in "node-blog". Note that the machine
*     name will often be in a short form of the human readable label.
*   - node-teaser: Nodes in teaser form.
*   - node-preview: Nodes in preview mode.
*   The following are controlled through the node publishing options.
*   - node-promoted: Nodes promoted to the front page.
*   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
*     listings.
*   - node-unpublished: Unpublished nodes visible only to administrators.
* - $title_prefix (array): An array containing additional output populated by
*   modules, intended to be displayed in front of the main title tag that
*   appears in the template.
* - $title_suffix (array): An array containing additional output populated by
*   modules, intended to be displayed after the main title tag that appears in
*   the template.
*
* Other variables:
* - $node: Full node object. Contains data that may not be safe.
* - $type: Node type, i.e. story, page, blog, etc.
* - $comment_count: Number of comments attached to the node.
* - $uid: User ID of the node author.
* - $created: Time the node was published formatted in Unix timestamp.
* - $classes_array: Array of html class attribute values. It is flattened
*   into a string within the variable $classes.
* - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
*   teaser listings.
* - $id: Position of the node. Increments each time it's output.
*
* Node status variables:
* - $view_mode: View mode, e.g. 'full', 'teaser'...
* - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
* - $page: Flag for the full page state.
* - $promote: Flag for front page promotion state.
* - $sticky: Flags for sticky post setting.
* - $status: Flag for published status.
* - $comment: State of comment settings for the node.
* - $readmore: Flags true if the teaser content of the node cannot hold the
*   main body content.
* - $is_front: Flags true when presented in the front page.
* - $logged_in: Flags true when the current user is a logged-in member.
* - $is_admin: Flags true when the current user is an administrator.
*
* Field variables: for each field instance attached to the node a corresponding
* variable is defined, e.g. $node->body becomes $body. When needing to access
* a field's raw values, developers/themers are strongly encouraged to use these
* variables. Otherwise they will have to explicitly specify the desired field
* language, e.g. $node->body['en'], thus overriding any language negotiation
* rule that was previously applied.
*
* @see template_preprocess()
* @see template_preprocess_node()
* @see template_process()
*/
?>



































<div class="antiwrapper">

<div class="grid-12">
    <!--Images-->
    <?php
        $scroll_buttons = "";
        $scroll_buttons_left = "";
        $scroll_buttons_right = "";
        if ($field_event_image or $field_event_video): ?>
        
        <div id="scrollable" class="grid-12 alpha omega" style="width: 940px; overflow-x: auto; margin-bottom: 20px; background: #333;">
            <?php $scroll_width = (940*sizeof($field_event_image) + 940*sizeof($field_event_video)); ?>
            <div style="width: <?= $scroll_width; ?>px; background: #333;">
                <?php if ($field_event_video): ?>
					<?php print render($content['field_event_video']); ?>
                <?php endif; ?>
				<?php if ($field_event_image): ?>
	                <?php print render($content['field_event_image']); ?>
				<?php endif; ?>
            </div>
        </div>
        
        <?php  
        if ($scroll_width > 940) {
            $scroll_buttons_left = '<div class="grid-2 alpha omega">
                    <button class="button " style="border-bottom-left-radius: 20px;" onmousedown="document.getElementById(\'scrollable\').scrollLeft -= 1 + ((document.getElementById(\'scrollable\').scrollLeft - 1) % 940);">◀</button>
                </div>';
			$scroll_buttons_right = '<div class="grid-2 alpha omega">
                    <button class="button " style="border-bottom-right-radius: 20px;" onmousedown="document.getElementById(\'scrollable\').scrollLeft += 941 - ((document.getElementById(\'scrollable\').scrollLeft + 941) % 940);">▶</button>
                </div>';
        }  
        ?>
        
    <?php endif; ?>
	
	</div>
	<div class="grid-12">

		
		</div>
<div class="grid-2">

    <?= $scroll_buttons_left ?>
	<div class="grid-2 alpha omega">
   <?php print render($content['field_event_facebook_url'])?><br>
   </div>
</div>
<div class="grid-8">
   <h2 class="calm">Time</h2>
   <p><?php print render($content['field_event_datetime'])?></p>
   <h2 class="calm">Location</h2>
   <?php print render($content['field_event_location'])?>
   <h2 class="calm">The Plan</h2>
   <?php print render($content['field_event_plan'])?>
   <h2 class="calm">What Actually Happened</h2>
   <?php print render($content['field_event_what_happened'])?>
</div>
<div class="grid-2">
        <?= $scroll_buttons_right ?>
   Event added by <a href="/user/<?php print $uid; ?>"><?php print $name; ?></a>
</div>










































<hr>

<div class="grid-8 prefix-2 suffix-2">

   <?php print render($content['comments'])?>

</div>&nbsp;

</div>





