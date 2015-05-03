<?php
// $Id: page.tpl.php

/**
* @file
* Default theme implementation to display a single Drupal page.
*
* Available variables:
*
* General utility variables:
* - $base_path: The base URL path of the Drupal installation. At the very
*   least, this will always default to /.
* - $directory: The directory the template is located in, e.g. modules/system
*   or themes/bartik.
* - $is_front: TRUE if the current page is the front page.
* - $logged_in: TRUE if the user is registered and signed in.
* - $is_admin: TRUE if the user has permission to access administration pages.
*
* Site identity:
* - $front_page: The URL of the front page. Use this instead of $base_path,
*   when linking to the front page. This includes the language domain or
*   prefix.
* - $logo: The path to the logo image, as defined in theme configuration.
* - $site_name: The name of the site, empty when display has been disabled
*   in theme settings.
* - $site_slogan: The slogan of the site, empty when display has been disabled
*   in theme settings.
*
* Navigation:
* - $main_menu (array): An array containing the Main menu links for the
*   site, if they have been configured.
* - $secondary_menu (array): An array containing the Secondary menu links for
*   the site, if they have been configured.
* - $breadcrumb: The breadcrumb trail for the current page.
*
* Page content (in order of occurrence in the default page.tpl.php):
* - $title_prefix (array): An array containing additional output populated by
*   modules, intended to be displayed in front of the main title tag that
*   appears in the template.
* - $title: The page title, for use in the actual HTML content.
* - $title_suffix (array): An array containing additional output populated by
*   modules, intended to be displayed after the main title tag that appears in
*   the template.
* - $messages: HTML for status and error messages. Should be displayed
*   prominently.
* - $tabs (array): Tabs linking to any sub-pages beneath the current page
*   (e.g., the view and edit tabs when displaying a node).
* - $action_links (array): Actions local to the page, such as 'Add menu' on the
*   menu administration interface.
* - $feed_icons: A string of all feed icons for the current page.
* - $node: The node object, if there is an automatically-loaded node
*   associated with the page, and the node ID is the second argument
*   in the page's path (e.g. node/12345 and node/12345/revisions, but not
*   comment/reply/12345).
*
* Regions:
* - $page['help']: Dynamic help text, mostly for admin pages.
* - $page['highlighted']: Items for the highlighted content region.
* - $page['content']: The main content of the current page.
* - $page['sidebar_first']: Items for the first sidebar.
* - $page['sidebar_second']: Items for the second sidebar.
* - $page['header']: Items for the header region.
* - $page['footer']: Items for the footer region.
*
* @see template_preprocess()
* @see template_preprocess_page()
* @see template_process()
*/
?>

    
<style>
/* Including this snippet here allows the site to look readable even if a CSS file fails to load. */
body{min-width:960px}.container-12{margin-left:auto;margin-right:auto;width:960px}.grid-1,.grid-2,.grid-3,.grid-4,.grid-5,.grid-6,.grid-7,.grid-8,.grid-9,.grid-10,.grid-11,.grid-12{display:inline;float:left;margin-left:10px;margin-right:10px}.push-1,.pull-1,.push-2,.pull-2,.push-3,.pull-3,.push-4,.pull-4,.push-5,.pull-5,.push-6,.pull-6,.push-7,.pull-7,.push-8,.pull-8,.push-9,.pull-9,.push-10,.pull-10,.push-11,.pull-11{position:relative}.alpha{margin-left:0}.omega{margin-right:0}.grid-1{width:60px}.grid-2{width:140px}.grid-3{width:220px}.grid-4{width:300px}.grid-5{width:380px}.grid-6{width:460px}.grid-7{width:540px}.grid-8{width:620px}.grid-9{width:700px}.grid-10{width:780px}.grid-11{width:860px}.grid-12{width:940px}.prefix-1{padding-left:80px}.prefix-2{padding-left:160px}.prefix-3{padding-left:240px}.prefix-4{padding-left:320px}.prefix-5{padding-left:400px}.prefix-6{padding-left:480px}.prefix-7{padding-left:560px}.prefix-8{padding-left:640px}.prefix-9{padding-left:720px}.prefix-10{padding-left:800px}.prefix-11{padding-left:880px}.suffix-1{padding-right:80px}.suffix-2{padding-right:160px}.suffix-3{padding-right:240px}.suffix-4{padding-right:320px}.suffix-5{padding-right:400px}.suffix-6{padding-right:480px}.suffix-7{padding-right:560px}.suffix-8{padding-right:640px}.suffix-9{padding-right:720px}.suffix-10{padding-right:800px}.suffix-11{padding-right:880px}.push-1{left:80px}.push-2{left:160px}.push-3{left:240px}.push-4{left:320px}.push-5{left:400px}.push-6{left:480px}.push-7{left:560px}.push-8{left:640px}.push-9{left:720px}.push-10{left:800px}.push-11{left:880px}.pull-1{left:-80px}.pull-2{left:-160px}.pull-3{left:-240px}.pull-4{left:-320px}.pull-5{left:-400px}.pull-6{left:-480px}.pull-7{left:-560px}.pull-8{left:-640px}.pull-9{left:-720px}.pull-10{left:-800px}.pull-11{left:-880px}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container-12:before,.container-12:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container-12:after{clear:both}.clearfix,.container-12{zoom:1}
</style>
    

<header style="background-color: #333; margin-bottom: 40px;">
    <div class="container-12" style="padding-top: 20px;">
        <div class="grid-3">
            <a href="<?php print $front_page; ?>" class="beegee">Game Development Club at San José State University</a>
        </div>
        <div style="text-align: right" class="grid-9">
            
            <nav id="gnav">        
                <a href="<?php print $base_path; ?>about" class="swatch leftmost dark<?php
            
                    $path = trim($_GET['q'], '/');         // get the current normal drupal path 
                    $path = drupal_get_path_alias($path);  // get its alias
                    $path = explode('/', $path);           // and break it up

                    if ($path[0] == 'about' ) {
                        print(" chosen");
                    }
            
                    ?>" style="width: 70px;">
                    <div class="about-icon gnav-icon"></div><span> about</span></a><!--<a href="<?php print $base_path; ?>forum" class="swatch dark<?php
            
                        $path = trim($_GET['q'], '/');         // get the current normal drupal path
                        $path = drupal_get_path_alias($path);  // get its alias
                        $path = explode('/', $path);           // and break it up

                        if ($path[0] == 'forum' ) {
                            print(" chosen");
                        }
            
                        ?>" style="width: 72px;">
                        <div class="forum-icon gnav-icon"></div><span> forum</span></a>--><a href="<?php print $base_path; ?>games" class="swatch<?php
                            if (isset($node)) {
                                if ($node->type == 'game' || $node->type == 'games_listing' || $node->type == 'game_folder')  {
                                    print(" chosen");
                                }
                            }
                            ?>" style="width: 70px;">
                            <div class="games-icon gnav-icon"></div><span> games</span></a><a href="<?php print $base_path; ?>events" class="swatch<?php
                                if (isset($node)) {
                                    if ($node->type == 'event' || $node->type == 'featured_events')  {
                                        print(" chosen");
                                    }
                                }
                                ?>" style="max-width: 76px;">
                                <div class="events-icon gnav-icon"></div><span> events</span></a><a 
                            
                                <?php if ($user->uid): ?>
                                    href="<?php print $base_path; ?>user/<?=$user->uid?>" class="swatch<?php
                                    if (arg(0) == 'user') {
                                        print(" chosen");
                                    }
                                    ?>" style="max-width: 224px;">
                                    <div class="profile-icon gnav-icon"></div><span> <?php print $user->name; ?></span>
                                    
                                <?php else: ?>
                                    href="<?php print $base_path; ?>user" class="swatch<?php
                                    if (arg(0) == 'user') {
                                        print(" chosen");
                                    }
                                    ?>" style="width: 124px;">
                                    <div class="login-icon gnav-icon"></div><span> login/signup</span>
                                    
                                <?php endif; ?>
                        
                            </a><form style="display: inline;" method="GET" action="http://www.google.com/search"><input type="hidden" name="as_sitesearch" value="sjsugamedev.com"><input class="swatch dark" id="st-search-input" placeholder="search" name="as_q"></form>
                            
                        
                        </nav>
                        
                        <div id="st-results-container"></div>
                    </div>
                </div>
            </header>
            <div class="container-12" style="">
            
                <!--title-->
                <div class="grid-12"><?php print $messages; ?></div>
                <?php if ($title || $tabs_rendered = render($tabs)): ?>
                    <div class="grid-12" style="margin-bottom: 20px; margin-top: 0px;">
                        <?php if ($tabs_rendered = render($tabs)): ?>
                            <span id="tabs">
                                <?php print render($tabs); ?>
                                <div class="grid-3 alpha" style="margin-right: 20px;">
                                    <a href="#" class="button drop" style="
                                    margin-top: 6px;
                                    margin-bottom: 0px; 
                                    cursor: default;
                                    ">Options ▼</a>
                                </div>
                            </span>
                        <?php endif; ?>
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?>
                            <h1 style="display: inline; z-index: 2; line-height: 1em;"><?php print $title; ?></h1>
                        <?php endif; ?>
                        <?php print render($title_suffix); ?>
                    </div>
                <?php endif; ?>
        
                <?php if (!$is_front): ?>
                    <div class="grid-8 prefix-2 suffix-2">
                        <img src='/sites/all/themes/trainhole/images/thumbnail.gif' style="display: none;"/>
                        <?php print render($page['content']); ?>
                    </div>
                <?php else: ?>   
                     <?php global $user; if (array_key_exists('3', $user->roles) || array_key_exists('4', $user->roles)): ?> 
                        <style>
                        .officer-visible-box:hover {
                            box-shadow: 0 0 3px #333;  
                            margin-top: -31px;
                        }
                        .officer-visible-box>a {
                            display: none;
                        }
                        .officer-visible-box:hover>a {
                            display: inline-block;
                            
                        }
                        </style>
                    <?php endif;?>
                        <div class="grid-12 officer-visible-box" style="margin-bottom: 11px;
                            <?php global $user; if (array_key_exists('3', $user->roles) || array_key_exists('4', $user->roles)): ?>
                                border-radius: 7px;
                            <?php endif;?>
                        ">
                    

                    <?php global $user; if (array_key_exists('3', $user->roles) || array_key_exists('4', $user->roles)): ?>
                        <a style="padding: 2px 7px; border-width: 0 3px 3px 0; border-style: dotted; text-decoration: none; border-color: #333; border-color: rgba(51,51,51,.5); border-bottom-right-radius: 10px;" href="<?php print url(); ?>admin/structure/block/manage/block/1/configure">
                            <p style="margin-bottom: 0; line-height: 1.5em;">Edit header</p>
                        </a>
                    <?php endif;?>
                    
                    <?php
                    //D7
            
                    $block = module_invoke('block', 'block_view', '1');
                    print render($block['content']);
            
                    ?>

                    </div>
            
            
                    <div class="grid-9">
                        <h3>News</h3>
                        <?php global $user; if (array_key_exists('3', $user->roles) || array_key_exists('4', $user->roles)): ?>
                            <a style="padding: 2px 7px; margin-bottom: 20px; border-width: 3px; border-style: solid; display: block; text-decoration: none; width: 280px;" class="grid-4 alpha" href="<?php print url(); ?>node/add/game">
                                <h2 style="margin-bottom: 0; line-height: 1.5em;">+ Add a Game</h2>
                                <!-- <p style="margin-bottom: 7px;">Lorem ipsum dolor sit amet.</p> -->
                            </a>
                            <a style="padding: 2px 7px; margin-bottom: 20px; border-width: 3px; border-style: solid; display: block; text-decoration: none; width: 280px;" class="grid-4 omega" href="<?php print url(); ?>node/add/article">
                                <h2 style="margin-bottom: 0; line-height: 1.5em;">+ Add a Post</h2>
                                <!-- <p style="margin-bottom: 7px;">Lorem ipsum dolor sit amet.</p> -->
                            </a>
                        <?php else:?>
                            <a style="padding: 2px 7px; margin-bottom: 20px; border-width: 3px; border-style: solid; display: block; text-decoration: none; width: 600px;" href="<?php print url(); ?>node/add/game">
                                <h2 style="margin-bottom: 0; line-height: 1.5em;">+ Add a Game</h2>
                                <!-- <p style="margin-bottom: 7px;">Lorem ipsum dolor sit amet.</p> -->
                            </a>
                        <?php endif;?>
                        <?php print render($page['content']); ?>
                    </div>
            
                    <div class="grid-3">
        
                        <?= views_embed_view('random_game', 'default'); ?>
                        <?= views_embed_view('three_random_games', 'default'); ?>
                
                
                        <h3>Upcoming Events</h3>
                
                        <?php global $user; if (array_key_exists('3', $user->roles) || array_key_exists('4', $user->roles)): ?>
                            <a href="<?php print url(); ?>node/add/event" class="event small" style="border-style: dotted;">
                                <div class="title">+ Add an Event</div>
                            </a>
                        <?php endif; ?>
                
                        <?php print views_embed_view('front_page_upcoming_events', 'default'); ?>
                
                        <a class="small event stack" style="font-size: 32px; line-height: 1em;" href="events">All Events</a>
                
                        <h3>Recent Events</h3>
                        <?php print views_embed_view('front_page_past_events', 'default'); ?>
                        <a class="small event stack" style="font-size: 32px; line-height: 1em;" href="events">More Events</a>
                
                        <?= views_embed_view('octobers_past', 'default'); ?> 
                
                
                    </div>
            
                <?php endif;?>
            </div>