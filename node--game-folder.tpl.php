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

    <div class="grid-12" style="line-height: 1em; /*margin-top: -20px;*/">
        <p ><strong>When:</strong> <?php print(render($content['field_game_folder_when']))?></p>
    </div>





    <?php print views_embed_view('game_folder_games', 'default'); ?>


<!-- ARCHIVE -->
<!--     <div class="grid-4">
<a class="gamebox" style="border: 15px double #333; padding: 5px; /*background-color: white;*/" href="#">
<div style="font-size: 130px; line-height: 2;" class="chin">♖</div>
<p style="font-size: 64px;">
old games
</p>
</a>
</div> -->


<div class="grid-4">
    <!--the game itself-->
    <a 
        class = "gamebox" 
        style = "border-width: 5px; border-style: dotted; text-align: center; padding: 15px;" 
        href = "
            <?php global $user; if ( $user->uid ): ?>
                <?php print url(); ?>node/add/game
            <?php else: ?>
                <?php print url(); ?>user
            <?php endif; ?>
        ">
        <!--thumbnail-->
        <div style="font-size: 130px; line-height: 2;" class="chin">+</div>
        <!--text-->
        <p style="font-size: 64px; display: block; ">
            Add a Game
        </p>
    </a>
</div>




<!--What the heck is this here for?-->
<!--<div class="grid-12">-->

<!--video embed code-->
<!--
<iframe src="http://player.vimeo.com/video/6277276?portrait=0&amp;color=f0000c" width="260" height="260" frameborder="0"></iframe>
<iframe title="YouTube video player" width="260" height="260" src="http://www.youtube.com/embed/CD2LRROpph0" frameborder="0" allowfullscreen></iframe>
-->



<div class="grid-12" style="margin-bottom: 20px;">




    <!--flavor text-->
    <div class="grid-6 alpha">
        <h3>Description, by <a href="/user/<?php print $uid; ?>"><?php print $name; ?></a></h3>
        <?php print render($content['field_game_folder_information'])?>

    </div>

    <!--rules-->
    <div class="grid-6 omega">

        <h3>Complete rules</h3>
        <?php print render($content['field_game_folder_official_rules'])?>

    </div>
</div>


















































<hr>

<div class="grid-9 suffix-3">

    <?php print render($content['comments'])?>

</div>&nbsp;
</div>