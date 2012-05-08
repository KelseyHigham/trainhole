<?php
// $Id: page.tpl.php
?>



















































<!DOCTYPE html />
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1136px" />
    <title>960 Grid System &mdash; Sandbox</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/text.css" />
    <link rel="stylesheet" href="css/960.css" />
    <!--  <link rel="stylesheet" href="css/uncompressed/demo.css" />
    -->   <link rel="stylesheet" href="css/uncompressed/sandbox.css" />

    <style>
    hr {
        border-top-width: 3px; 
        border-top-color: #333;
        margin-top: 0;
    }
    hr.mini {
        border-top-width: 2px;
    }
    a {
        outline: none;
    }
    a {
        color: #333;
    }
    a:hover {
        color: #333;
    }
    a:active {
        background-color: #333;
        color: white;
    }
    body {
        color: #333;
        background-color:white;
        font-size: 16px; /* WHY IS THIS HERE, I DON'T EVEN KNOW */
    }
    header:active a.tab.darkLink {
        border-color: #333; 
        background-color: white;
        color: #333;
    }
    span.button {
        text-decoration: none;
        margin-bottom: 20px;
        border: solid 3px #333;
        color: #333;
        font-size: 32px; /* with 1.5em line-height and the right border, this comes out to be the same height as the text in the 3x logo */
        text-transform: uppercase; /* IT'S BETTER THIS WAY */
        padding-left: 8px; /* to match the already-there padding-top */
        background-color: white;
        display: block;
    }
    a.button {
        text-decoration: none;
        margin-bottom: 20px;
        border: solid 3px #333;
        color: #333;
        font-size: 32px; /* with 1.5em line-height and the right border, this comes out to be the same height as the text in the 3x logo */
        text-transform: uppercase; /* IT'S BETTER THIS WAY */
        padding-left: 8px; /* to match the already-there padding-top */
        background-color: white;
        display: block;
        }/*
        a.button:hover {
        border-color: #333;
        color: #333;
        }*/
        a.button:active {
            border-color: #333;
            background-color: #333;
            color: white;
        }
        a.tab {
            border-radius: 0;
            margin-bottom: 0;
        }

        a.leftmost-tab {
            border-radius: 0;
        }
        a.rightmost-tab {
            border-radius: 0;
        }
        a.awesomefacebookbutton {
            border-color: #3B5998;
            background-color: #3B5998;
            color: white;
        }
        a.awesomefacebookbutton:hover {
            border-color: #3B5998;
            background-color: #3B5998;
            color: white;
        }
        a.awesomefacebookbutton:active {
            border-color: #3B5998;
            background-color: white;
            color: #3B5998;
        }
        a.facebookbutton:hover {
            border-color: #3B5998;
            color: #3B5998;
        }
        a.facebookbutton:active {
            background-color: #3B5998;
            border-color: #3B5998;
            color: white;
        }
        a.carouselbutton {
            text-align: center;
            /*background-color: darkGrey;
            color: white;*/
            /*border-radius: 51px;*/
            /*height: 51px;*/
            text-transform: none;
            padding-right: 8px;
        }
        a.darkLink {
            border-color: #333;
            background-color: #333;
            color: white;
        }
        a.darkLink:hover {
            border-color: #333;
            background-color: #333;
            color: white;
        }
        a.darkLink:active {
            background-color: white;
            border-color: #333;  
            color: #333;
        }
        a.lightLink {
            background-color: white;
            color: #333;
        }
        a.lightLink:active {
            background-color: #333;
            color: white;
        }
        header a.tab.darkLink {
            border-color: #333;
            background-color: #333;
            color: white;
        }
        header a.tab.darkLink:hover {
            border-color: #333;
            background-color: #333;
            color: white;
        }
        header a.tab.darkLink:active {
            background-color: white;
            border-color: #333;  
            color: #333;
        }
        a.hugebutton {
            border: solid 5px #333;
            color: #333; /* overwrite link styling */
            font-size: 52px; /* I forget why */
            text-transform: uppercase;
            padding-left: 14px;
        }
        a.hugebutton:hover {
            border-color: #333;
            color: #333;
        }
        a.hugebutton:active {
            background-color: #333;
            color: white;
        }
        a#loginbutton {
            /*width: auto;
            min-width: 118px;*/
            width: 118px;
            border-right-width: 3px;
            height: 48px;
            padding-right: 8px;
            overflow: hidden;
            white-space: nowrap;
            float: left;
            top: 40px;
        }
        a#loginbutton:hover {
            width: auto;
            border-right-width: 3px;
            min-width: 118px;
        }
        a#loginbutton:active {
            overflow: visible;
            width: auto;
            min-width: 118px;
        }
        .gametitle {
            font-size: 75px;
            margin-bottom: 3px; /*override text.css to make title closer to authors*/
            line-height: 1em;
            text-rendering: optimizeLegibility;
            color: #333;
            font-weight: bold;
            /*float: left;
            display: block;*/
            /*text-transform: uppercase;*/
            /*color: #D3A900;*/
        }
        .eventtitle {
            font-size: 60px;
            line-height: 1em;
            font-weight: bold;
        }
        .eventlabel {
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 0;
            line-height: 1.1em; /* in case of really long locations */
            display: normal;
            float: none;
            color: white;
            padding-left: 11px; /* 8+3; 8 padding, 3 for absent 3px border */
            text-align: left;
        }
        .eventdetail {
            font-size: 20px;
            font-style: normal;
            color: white;
            line-height: 1.1em; /* in case of really long locations */
            display: block;
            float: left;
            margin-bottom: 20px;
        }
        .gameauthors {
            margin-bottom: 20px;
            font-style: italic;
        }
        .screenshot img {
            max-width: 100%;
            max-height: 100%;
            line-height: 1em;
            vertical-align: bottom;
        }
        * {
            /*background-color: rgba(0,0,0,.1) !important;/**/
        }   
        .chin {
            margin-bottom: 20px;
        }



        a.gamebox {
            height: 408px; 
            overflow: hidden; 
            border: 5px #333 solid;
            padding:15px;
            /*border-bottom: 20px #333 solid;
            padding-bottom:0;*/
            text-decoration: none;
            margin-bottom: 20px;
            text-transform: uppercase; /* IT'S BETTER THIS WAY */
            display: block;
            font-weight: bold;
            text-align: center;
            line-height: 1;
        }
        a.gamebox span {
            height: 128px;
            overflow: hidden;
            display: block;
        }
        a.gamebox div {
            height: 260px;
            width: 260px;
            margin-bottom: 20px;
            text-align: center;
            line-height: 260px;
        }
        a.gamebox div img {
            max-width: 260px;
            max-height: 260px;
            vertical-align: middle;
        }
        a.gamebox {
            font-size: 32px;
            display: block;
        }
        a.gamebox p {
            font-size: 16px;
        }


        /* EXTERNAL LINKS ON PROFILE PAGES */

        a.external {
            color: white;
            /* border: 0px; */
        }
        a.external:hover {
            color: white;
        }
        a.colored {
            color: white;
            /* border: 0px; */
        }
        a.colored:hover {
            color: white;
        }
        a.steamurl {
            background-color: #4C6B22;
            border-color: #4C6B22;
        }
        a.twitterurl { 
            background-color: #53C9FF;
            border-color: #53C9FF;
        }
        a.deviantarturl {
            background-color: #425244;
            border-color: #425244;
        }
        a.linkedinurl {
            background-color: #1C7EAB;
            border-color: #1C7EAB;
        }
        a.facebookurl {
            background-color: #3B5998;
            border-color: #3B5998;
        }
        a.googleplusurl {
            background-color: #3D9400;
            border-color: #3D9400;
        }
        a.websiteurl {
            background-color: blue;
            border-color: blue;
            width: 206px;
            overflow: hidden;
            height: 48px;
            float: left;
            position: relative;
        }
        a.websiteurl:hover {
            width: auto;
            min-width: 198px;
            padding-right: 8px;
        }
        a.websiteurl:visited {
            background-color: purple;
            border-color: purple;
        } 
        a.websiteurl:active {
            background-color: red;
            border-color: red;
        }
        a.logout {
            background-color: red;
            border-color: red;
        }
        .antiwrapper {
            margin-left: -170px; 
            margin-right: -170px;
        }


        /* LOGO */

        .smalllogo a{
            background: url('<?php print $base_path; ?>sites/all/themes/trainhole/images/logotype 3x short.png'); /* scale factor */
            background-position: left top;
            background-repeat: no-repeat;
            display:block;
            margin-left: -93px; /* -31 times the scale factor */
            margin-top: -15px; /* -5 times the scale factor */
            margin-bottom: -15px;
            outline: none;
            width: 354px; /* 118 times the scale factor */
            height: 81px; /* 27 times the scale factor */
        }
        .smalllogo a:hover {
            background-position: left center;
        }
        .smalllogo a:active {
            background-position: left bottom;
        }
        .smalllogo a.selected {
            background-position: left bottom;
            /*margin-left: -93px;*/ /* 1px*SF fewer than deselected */
        }
        header:active .smalllogo a.selected {
            background-position: left top;
        }
        .smalllogo a.selected:active {
            background-position: left top;
        }


        /* FORM STYLING */
        form>div>div.form-wrapper {
            background-color: #EEE;
            margin: 1em 0;
            padding: .1em 1em;
            box-shadow: 0 0 5px #eee;
            border-radius: 1em;
        }
        .filter-wrapper {
            border: 1px solid #DDD;
            border-top: 0;
            padding: 0 0 1em;
        }
        .filter-help {
            margin: 1em 0em;
        }
        
        /* EVENTS PAGE */
        
        .event {
           font-weight: normal;
           margin-bottom: 20px;
           display: block;
           text-decoration: none;
           line-height: 1.5em;
        }
        .event.large {
            line-height: 3em;
        }
        .event .caption {
            white-space: nowrap;
            overflow: hidden;
        }
        .event.large .title {
            font-size: 32px;
        }
        .event.large .caption {
            font-size: 16px;
        }
        .event.small .title {
            font-size: 16px;
        }
        .event.small .caption {
            font-size: 8px;
        }
        .event h1, .event h2, .event h3, .event h4, .event h5, .event h6 {
           font-weight: normal;
           margin-bottom: 0px;
           line-height: 1.5em;
        }
        .event.large {
           padding: 17px;
           border: 3px solid #333;
        }
        .event.large img {
           max-width: 420px;
        }
        .event.small {
           border: 2px solid #333;
           padding: 18px;
        }
        .event.small img {
           max-width: 180px;
        }

        </style>













































        <!--this is so that the username stays in place-->
        <!--modified from http://www.finefrog.com/2007/02/26/faking-css-position-fixed-in-internet-explorer-6/ -->
        <script type="text/javascript">  
        window.onscroll = ( 
            function() {
                var offset = 40; // set offset (likely equal to your css top)  
                var element = document.getElementById('fixed-div');
                element.style.position = 'fixed';
                element.style.top = (offset - ((window.pageYOffset>=0) ? window.pageYOffset : 0)) + 'px';
            }
        )
        </script>  

    </head>
    <body>
        <div class="container-12" style="padding-left: 10px; padding-right: 10px; background-color: red">
            <div class="grid-12" id="this-is-just-to-provide-space-above-the-header" style="margin: 20px 0;"></div>
            <!--header-->

            <header class="grid-12" style="margin-bottom: 40px;">
                <div class="grid-4 alpha">
                    <div class="smalllogo" style=""><a class="<?php if ($is_front): ?>selected<?php endif; ?>" style="text-indent: -9999px;" href="<?php print $front_page; ?>">Game Development Club at San José State University</a></div>

                    </div>
                    <div class="grid-8 omega">
                        <div class="grid-2 alpha">
                            <a href="<?php print $base_path; ?>about" class="button tab about">About</a>

                        </div>
                        <div class="grid-2">
                            <a href="<?php print $base_path; ?>games" class="button tab games">
                                Games
                            </a>
                        </div>
                        <div class="grid-2">
                            <a href="<?php print $base_path; ?>events" class="button tab events">
                                Events
                            </a>
                        </div>
                        <div class="grid-2 omega" id="fixed-div">
                            <?php if ($user->uid): ?>
                                <a href="<?php print $base_path; ?>user" class="button tab login" id="loginbutton" style="text-transform: none;">
                                    <?php print $user->name; ?>
                                </a>

                            <?php else: ?>
                                <a href="<?php print $base_path; ?>user" class="button tab login" id="loginbutton" style="border-style: dotted;">
                                    Log In
                                </a>

                            <?php endif; ?>
                        </div>
                    </div>
                </header>
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
                                    /*right: 0;*/
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
                    <div class="grid-5" style="margin-top: -24px;">
                        <?php print render($page['content']); ?>
                    </div>
                    <div class="grid-4">
                        <h2>Recent Games</h2>
                        <div style="margin: 0 -10px;">
                            <?php print views_embed_view('front_page_games', 'default'); ?>
                        </div>
                    </div>
                    <div class="grid-3">
                        <h2>Upcoming</h2>
                        <?php print views_embed_view('front_page_upcoming_events', 'default'); ?>
                        <h2>Recent</h2>
                        <?php print views_embed_view('front_page_past_events', 'default'); ?>
                    </div>
                <?php endif;?>
            </div>
        </body>
        </html>