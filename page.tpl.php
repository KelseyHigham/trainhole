<?php
// $Id: page.tpl.php
?>

	
    <style>
	
        /* This is a whale. It's here because I like whales. */
        body{min-width:960px}.container-12{margin-left:auto;margin-right:auto;width:960px}.grid-1,.grid-2,.grid-3,.grid-4,.grid-5,.grid-6,.grid-7,.grid-8,.grid-9,.grid-10,.grid-11,.grid-12{display:inline;float:left;margin-left:10px;margin-right:10px}.push-1,.pull-1,.push-2,.pull-2,.push-3,.pull-3,.push-4,.pull-4,.push-5,.pull-5,.push-6,.pull-6,.push-7,.pull-7,.push-8,.pull-8,.push-9,.pull-9,.push-10,.pull-10,.push-11,.pull-11{position:relative}.alpha{margin-left:0}.omega{margin-right:0}.grid-1{width:60px}.grid-2{width:140px}.grid-3{width:220px}.grid-4{width:300px}.grid-5{width:380px}.grid-6{width:460px}.grid-7{width:540px}.grid-8{width:620px}.grid-9{width:700px}.grid-10{width:780px}.grid-11{width:860px}.grid-12{width:940px}.prefix-1{padding-left:80px}.prefix-2{padding-left:160px}.prefix-3{padding-left:240px}.prefix-4{padding-left:320px}.prefix-5{padding-left:400px}.prefix-6{padding-left:480px}.prefix-7{padding-left:560px}.prefix-8{padding-left:640px}.prefix-9{padding-left:720px}.prefix-10{padding-left:800px}.prefix-11{padding-left:880px}.suffix-1{padding-right:80px}.suffix-2{padding-right:160px}.suffix-3{padding-right:240px}.suffix-4{padding-right:320px}.suffix-5{padding-right:400px}.suffix-6{padding-right:480px}.suffix-7{padding-right:560px}.suffix-8{padding-right:640px}.suffix-9{padding-right:720px}.suffix-10{padding-right:800px}.suffix-11{padding-right:880px}.push-1{left:80px}.push-2{left:160px}.push-3{left:240px}.push-4{left:320px}.push-5{left:400px}.push-6{left:480px}.push-7{left:560px}.push-8{left:640px}.push-9{left:720px}.push-10{left:800px}.push-11{left:880px}.pull-1{left:-80px}.pull-2{left:-160px}.pull-3{left:-240px}.pull-4{left:-320px}.pull-5{left:-400px}.pull-6{left:-480px}.pull-7{left:-560px}.pull-8{left:-640px}.pull-9{left:-720px}.pull-10{left:-800px}.pull-11{left:-880px}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container-12:before,.container-12:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container-12:after{clear:both}.clearfix,.container-12{zoom:1}

    </style>
	
	
	
	
    <div class="container-12" style="padding-left: 10px; padding-right: 10px;">
        <div class="grid-12" id="this-is-just-to-provide-space-above-the-header" style="margin: 20px 0;"></div>
        <!--header-->

        <header class="grid-12" style="margin-bottom: 40px;">
            <div class="grid-4 alpha">
                <a class="smalllogo" href="<?php print $front_page; ?>">
                    <h1>Game Development Club at San José State University</h1>
                </a>
            </div>
            <div class="grid-8 omega">
                <div class="grid-2 alpha">
                    <a href="<?php print $base_path; ?>about" class="button tab<?php
			
$path = trim($_GET['q'], '/');         // get the current normal drupal path 
$path = drupal_get_path_alias($path);  // get its alias
$path = explode('/', $path);           // and break it up

if ($path[0] == 'about' ) {
    print(" selected");
}
			
                        ?>">About</a>
                    </div>
                    <div class="grid-2">
                        <a href="<?php print $base_path; ?>games" class="button tab<?php
                            if (isset($node)) {
                                if ($node->type == 'game' || $node->type == 'games_listing' || $node->type == 'game_folder')  {
                                    print(" selected");
                                }
                            }
                            ?>">
                            Games
                        </a>
                    </div>
                    <div class="grid-2">
                        <a href="<?php print $base_path; ?>events" class="button tab<?php
if (isset($node)) {
    if ($node->type == 'event' || $node->type == 'featured_events')  {
        print(" selected");
    }
}
                            ?>">
                            Events
                        </a>
                    </div>
                    <div class="grid-2 omega" id="fixed-div">
                        <?php if ($user->uid): ?>
                            <a href="<?php print $base_path; ?>user/<?=$user->uid?>" class="button tab<?php
                                if (arg(0) == 'user') {
                                    print(" selected");
                                }
                                ?>" id="loginbutton" style="text-transform: none;" onMouseOver="mouseIsOver = true; offset = 40; element = document.getElementById('fixed-div'); element.style.position = 'fixed'; element.style.top = (offset + document.getElementById('toolbar').offsetHeight - ((window.pageYOffset>=0) ? window.pageYOffset : 0)) + 'px';" onMouseOut="mouseIsOver = false; element.style.position = 'static'; element.style.top = 'offset';">
                                <?php print $user->name; ?>
                            </a>

                        <?php else: ?>
                            <a href="<?php print $base_path; ?>user" class="button tab<?php
                                if (arg(0) == 'user') {
                                    print(" selected");
                                }
                                ?>" id="loginbutton" style="/*border-style: dotted;*/">
                                Log In
                            </a>

                        <?php endif; ?>
                    </div>
                </div>
            </header>
            
            
            <?php if ($is_front): ?>
                <div class="grid-12" style="margin: 0 10px 20px;">
                    <div class="grid-3 alpha"><a href="https://www.facebook.com/groups/sjsugamedev/" class="frontpagecolored facebookurl button" style="letter-spacing: -1px; white-space: nowrap;" onClick="recordOutboundLink(this, 'Outbound Links', 'facebook.com');"><img src="sites/all/themes/trainhole/images/facebook 3x white.png" class="icon"> Facebook Group</a></div>
                    <div class="grid-3"><a href="http://steamcommunity.com/groups/SJSUGameDev" class="frontpagecolored steamurl button" onClick="recordOutboundLink(this, 'Outbound Links', 'steamcommunity.com');"><img src="sites/all/themes/trainhole/images/steam 3x white.png" class="icon"> Steam Group</a></div>
                    <div class="grid-3"><a href="http://groups.google.com/group/sjsu-video-game-development-club" class="frontpagecolored googlegroupsurl button" onClick="recordOutboundLink(this, 'Outbound Links', 'groups.google.com');"><img src="sites/all/themes/trainhole/images/mail 3x white.png" class="icon"> Google Group</a></div>
                    <div class="grid-3 omega">
						
						<style>
						#st-search-input {
							
						}
						div.st-result {
							cursor: pointer;
						}
						div.st-result:active {
							background-color: #934C00;
							background-clip: content-box;
						}
						div.st-result:active .st-snippet {
							color: white;
						}
						div.st-result:active h3 a {
							color: white;
						}
						.st-pagination a:active {
							color: white;
						}
						span.st-snippet>em {
							font-weight: bold;
							font-style: normal;
						}
						form input.st-search-input {
						font-size: 24px;
						font-family: 'Helvetica Neue',Arial,'Liberation Sans',FreeSans,'apple symbols',sans-serif;
						padding: 5px 9px 5px 36px;
						height: 26px;
						width: 166px;
						border: 3px solid #CCC;
						-webkit-box-shadow: none;
						-moz-box-shadow: none;
						box-shadow: 0 0 50px rgba(87, 158, 212, 0);
						background-position: 6px 6px;
						background-image: url(<?php print $base_path; ?>sites/all/themes/trainhole/images/search%203x.png);
						border-radius: 0px;
						background-repeat: no-repeat;
						outline: default;
						}
						form input.st-search-input:focus {
							border-color: rgb(87, 158, 212);
						}
						</style>
						
						<form>
						  <input type="text" id="st-search-input" class="st-search-input" />
						</form>
						<div id="st-results-container"></div>
						<script type="text/javascript">
						  var Swiftype = window.Swiftype || {};
						  (function() {
						    Swiftype.key = 'DR7XPTyp7PmwqirDndqd';
						    Swiftype.inputElement = '#st-search-input';
						    Swiftype.resultContainingElement = '#st-results-container';
						    Swiftype.attachElement = '#st-search-input';
						    Swiftype.renderStyle = "overlay";

						    var script = document.createElement('script');
						    script.type = 'text/javascript';
						    script.async = true;
						    script.src = "//swiftype.com/embed.js";
						    var entry = document.getElementsByTagName('script')[0];
						    entry.parentNode.insertBefore(script, entry);
						  }());
						</script>
						<!--
						<a href="http://spartansarcadecab.tumblr.com" class="frontpagecolored arcadeurl button" style="letter-spacing: -1px; white-space: nowrap;" onClick="recordOutboundLink(this, 'Outbound Links', 'spartansarcadecab.tumblr.com');"><img src="sites/all/themes/trainhole/images/arcade 3x white.png" class="icon"> Arcade Progress</a>
					-->
					</div>
                </div>
            <?php endif;?>
            
            
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
                <div class="grid-8 prefix-2 suffix-2"><?php print render($page['content']); ?></div>
            <?php else: ?>    
			
                <div class="grid-9">
                    <h3>News</h3>
                    <?php global $user; if (array_key_exists('3', $user->roles) || array_key_exists('4', $user->roles)): ?>
                        <a style="padding: 2px 7px; margin-bottom: 20px; border-width: 3px; border-style: dotted; display: block; text-decoration: none; width: 600px;" href="<?php print url(); ?>node/add/article">
                            <h2 style="margin-bottom: 0; line-height: 1.5em;">+ Add a Post</h2>
                            <!-- <p style="margin-bottom: 7px;">Lorem ipsum dolor sit amet.</p> -->
                        </a>
                    <?php endif;?>
                    <?php print render($page['content']); ?>
                </div>
			
                <div class="grid-3">
                    <h3>Upcoming Events</h3>
                    <?php global $user; 
                    if (array_key_exists('3', $user->roles) || array_key_exists('4', $user->roles)): ?>
                    <a href="<?php print url(); ?>node/add/event" class="event small" style="border-style: dotted;">
                        <div class="title">+ Add an Event</div>
                    </a>
   
                <?php endif; ?>
                <?php print views_embed_view('front_page_upcoming_events', 'default'); ?>
                <a class="small event stack" style="font-size: 32px; line-height: 1em;" href="events">All Events</a>
                <h3>Recent Events</h3>
                <?php print views_embed_view('front_page_past_events', 'default'); ?>
                <a class="small event stack" style="font-size: 32px; line-height: 1em;" href="events">More Events</a>
				
				<h3>From This Month</h3>
				
				<style>
				ul.apps {
					margin: 0 -10px;
				}
				ul.apps:after {
					content: " ";
					width: 0;
					height: 0;
					display: block;
					clear: left;
					margin: 0;
				}
				ul.apps li {
					float: left;
					margin: 0 10px 20px;
					display: block;
				}
				ul.apps a {
					width: 60px;
					height: 60px;
					display: block;
					outline: 0px solid #934C00;
					-webkit-transition: .1s;
				}
				ul.apps a:active {
					outline: 10px solid #934C00;
					-webkit-transition: 0s;
				}
				</style>
				
				<?= views_embed_view('octobers_past', 'default'); ?>
				
				<h3>Misc.</h3>
				
				<a href="http://spartansarcadecab.tumblr.com" class="frontpagecolored arcadeurl button" style="letter-spacing: -1px; white-space: nowrap;" onClick="recordOutboundLink(this, 'Outbound Links', 'spartansarcadecab.tumblr.com');"><img src="sites/all/themes/trainhole/images/arcade 3x white.png" class="icon"> Arcade Progress</a>
				
				
            </div>
            <!--
			
                <div class="grid-4">
                    <h3>Recent Games</h3>
                    <div style="margin: 0 -10px;">
					<?php /*print views_embed_view('front_page_games', 'default');*/ ?>
                    </div>
                    <a href="games" style="font-size: 32px; font-weight: bold; text-transform: uppercase; text-align: center; padding: 15px; border: 5px solid #333; text-decoration: none; display: block; clear: both; line-height: 1em;" class="darkLink">More Games</a>
                </div>
            -->
			
        <?php endif;?>
    </div>