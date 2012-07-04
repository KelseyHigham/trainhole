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

<?php /* Array ( [0] => links [1] => comments [2] => field_credits 
[3] => field_game_information [4] => field_screenshots 
[5] => field_game_videos [6] => field_game_executable 
[7] => field_game_parent_challenge ) */ ?>

<?php /*
print '<pre>';
    print_r(get_defined_vars());
    print '</pre>'; */
    ?>

    <?php if($page || (isset($in_preview) && $in_preview)): ?>
   
        <div class="antiwrapper">

            <!--Left column-->
            <div class="grid-9">


                <!--Screenshots-->
                <?php $scroll_buttons = ""; if ($field_game_screenshot or $field_game_video): ?>
        
                <div id="scrollable" class="grid-9 alpha omega" style="width: 700px; overflow-x: auto; margin-bottom: 20px; background: #333;">
                    <?php $scroll_width = (700*sizeof($field_game_screenshot) + 700*sizeof($field_game_video)); ?>
                    <div style="width: <?= $scroll_width; ?>px;">
                        <?php if ($field_game_screenshot): ?>
                            <?php print render($content['field_game_screenshot']); ?>
                        <?php endif; ?>
                        <?php if ($field_game_video): ?>
                            <?php print render($content['field_game_video']); ?>
                        <?php endif; ?>
                    </div>
                </div>
        
                <?php  
                if ($scroll_width > 700) {
                    $scroll_buttons = '    <div class="grid-4 alpha omega buttonset" style="float:right; margin-bottom: -20px; margin-top: -10px;">
                        <div class="grid-2 alpha">
                            <button class="button " style="border-bottom-left-radius: 20px;" onmousedown="document.getElementById(\'scrollable\').scrollLeft -= 1 + ((document.getElementById(\'scrollable\').scrollLeft - 1) % 700);">◀</button>
                        </div>
                        <div class="grid-2 omega">
                            <button class="button " style="border-bottom-right-radius: 20px;" onmousedown="document.getElementById(\'scrollable\').scrollLeft += 701 - ((document.getElementById(\'scrollable\').scrollLeft + 701) % 700);">▶</button>
                        </div>
                    </div>';
                }  
                ?>
        
            <?php endif; ?>
            <?php
    
        
    
    
    
    
    
    
            ?>

            <!--Paragraph-->
            <div class="grid-9 alpha omega">
                <?= $scroll_buttons ?>
                <?php if ($field_game_information): ?>
                    <?php print render($content['field_game_information'])?>
                <?php endif; ?>
            </div>



        </div>







        <div class="grid-3">

            <!--Download Button-->
            <?php if ($field_game_file): ?>
                <div class="grid-3 alpha omega" style="/*float: right; margin-top: 12px;*/">
                    <a href="<?php print render($content['field_game_file'])?>" class="button awesomebutton darkLink" style="">
                        Download
                    </a>
                </div>
            <?php endif; ?>






            <!--Credits-->
            <?php if ($field_game_credits): ?>
                <div class="credits">
                    <?php print render($content['field_game_credits'])?>
                </div>
            <?php endif; ?>


            <div class="gameauthors">
                People listing this game as theirs on their profile:<br/>
                <strong>
                    <a href="/user/<?php print $uid; ?>"><?php print $name; ?></a>
                    <?php print views_embed_view('game_credited_names', 'default'); ?>
                </strong>
            </div>


        </div>












        <!--Carousel Buttons-->
        <!--
            <div class="grid-3">
                <div class="grid-1 alpha">
                    <a href="" class="">
                        <div class="button carouselbutton" style="border-bottom-left-radius: 25px;">◀</div>
                    </a>
                </div>
                <div class="grid-1">
                    <div class="button carouselbutton" style="border: none;">1/3</div>
                </div>
                <div class="grid-1 omega">
                    <a href="" class="">
                        <div class="button carouselbutton" style="border-bottom-right-radius: 25px; border-top-right-radius: 25px;">▶</div>
                    </a>
                </div>
            </div>
        -->
        <!--
            <div class="grid-3 pull-9">
                <div class="grid-1">
                    <a href="" class="">
                        <div class="button">◀</div>
                    </a>
                </div>
                <div class="grid-1">
                    <a href="" class="">
                        <div class="button" style="text-align: center; padding-right: 8px;">ıı</div>
                    </a>
                </div>
                <div class="grid-1">
                    <a href="" class="">
                        <div class="button">▶</div>
                    </a>
                </div>
            </div>
        -->




        <!--Footer-->
        <?php if ($field_game_parent_folder): ?>
            <style>
                .challenge a:before {
                    content: "◀ Made For ";
                }
                .challenge a {
                    /* Normal button stuff. I could get rid of this duplication if I could
                    find a nice way to override the parent-challenge class, which is 
                    non-existent. (Or maybe I made it non-existent, and forgot?) */
                    text-decoration: none;
                    margin-bottom: 20px;
                    border: solid 3px #333;
                    color: #333;
                    font-size: 32px; /* with 1.5em line-height and the right border, this comes out to be the same height as the text in the 3x logo */
                    text-transform: uppercase; /* IT'S BETTER THIS WAY */
                    padding-left: 8px; /* to match the already-there padding-top */
                    background-color: white;
                    display: block;

                    /*parent-challenge-specific*/
                    float: left; /* changes the height of the span?! */ 
                    padding-right: 8px; 
                    margin-bottom: 20px;
                }
                .challenge a:active {
                    border-color: #333;
                    background-color: #333;
                    color: white;
                }
            </style>
            <footer class="grid-12" style="margin-top: 20px; margin-bottom: 20px;">
                <span class="challenge"> <?php print render($content['field_game_parent_folder']) ?> </span>
            </footer>
        <?php endif; ?>



        <div class="grid-12"><hr/></div>










































        <div class="grid-9">

            <?php print render($content['comments'])?>
            <?php print render($content); ?>

        </div>&nbsp;

    </div>
<?php else: //Front page display! ?>

    <?php 
    //Is the game a legacy game, or a non-Club game? (Abdo Fere is a test folder on my local machine, lol.)
    //If so, do a tiny one-line game box.
    $parent_folder = render($content['field_game_parent_folder']);
    if ($parent_folder =='Abdo Fere' 
    || $parent_folder =='The Pong Challenge, Fall 2008 Edition'
    || $parent_folder =='The 8-Bit Challenge' 
    || $parent_folder =='The Shmup Challenge' 
    || $parent_folder =='The Tower Defense Challenge' 
    || $parent_folder =='The Collaborative Challenge' 
    || $parent_folder =='The Facebook Game Challenge' 
    || $parent_folder =='The Asynchronous Collaboration Game Challenge' 
    || $parent_folder =='The Budget Crisis Challenge' 
    || $parent_folder =='The Photos Challenge'  
    || $parent_folder =='The Genres Challenge' 
    || $parent_folder =='The 3D Game Challenge'
    || $parent_folder =='Miscellaneous'  ): ?>
	 
    <a href="<?= $node_url ?>" class="horizontalgamebox darkLink classic" style="height: 32px; text-align: left;">
        <div class="grid-2 alpha omega" style="font-weight: normal; text-transform: none; font-style: italic; font-family: Georgia;">
            <?= 
            //Miscellaneous is only here temporarily, during the anticipated legacy influx. Once that's over, we can revert miscellaneous games to be big again.
            ($parent_folder != 'Miscellaneous')?"classic":"misc"
            ?>
        </div> 
        <div style="float:right;" class="horizontalonelinescreenshot">
            <?= render($content['field_game_screenshot']) ?>
        </div>
        <div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
            <?= $title ?>
        </div>
    </a>
		
<?php else: //If not, do a full-size game box. ?>
	
    <a href="<?= $node_url ?>" class="horizontalgamebox darkLink">
        <div class="horizontalgameboxscreenshot"><?php print render($content['field_game_screenshot']); ?></div>
        <span class="horizontalgameboxfixedheight">
            <?= $title ?>
            <br/><br/>
            <p class="horizontalgameboxtext"><?= render($content['field_game_information']) ?></p>
        </span>
        <span class="horizontalgameboxfixedheight">
            <p class="horizontalgameboxtext">
                <br/>
                Made for <?php print render($content['field_game_parent_folder']) ?>
            </p>
        </span>
    </a>
		
<?php endif; ?>
<?php endif; ?>