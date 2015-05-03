<?php
// $Id: user-profile.tpl.php,v 1.13 2010/01/08 07:04:09 webchick Exp $

/**
* @file
* Default theme implementation to present all user profile data.
*
* This template is used when viewing a registered member's profile page,
* e.g., example.com/user/123. 123 being the users ID.
*
* Use render($user_profile) to print all profile items, or print a subset
* such as render($content['field_example']). Always call render($user_profile)
* at the end in order to print all remaining items. If the item is a category,
* it will contain all its profile items. By default, $user_profile['summary']
* is provided which contains data on the user's history. Other data can be
* included by modules. $user_profile['user_picture'] is available
* for showing the account picture.
*
* Available variables:
*   - $user_profile: An array of profile items. Use render() to print them.
*   - Field variables: for each field instance attached to the user a
*     corresponding variable is defined; e.g., $user->field_example has a
*     variable $field_example defined. When needing to access a field's raw
*     values, developers/themers are strongly encouraged to use these
*     variables. Otherwise they will have to explicitly specify the desired
*     field language, e.g. $user->field_example['en'], thus overriding any
*     language negotiation rule that was previously applied.
*
* @see user-profile-category.tpl.php
*   Where the html is handled for the group.
* @see user-profile-item.tpl.php
*   Where the html is handled for each item in the group.
* @see template_preprocess_user_profile()
*/
?>


<div class="antiwrapper">
    <div class="grid-12">
        <div style="margin-top: -40px;">
            <?php
        global $user;
        if (arg(0) == 'user' && $user->uid == arg(1)):
        ?>
        <div class="grid-3 alpha omega" style="float: right; margin-top: -62px;">
            <a href="<?php print url() ?>user/logout" class="colored button logout">Log Out</a>
        </div>
    <?php endif; ?>

    <div class="grid-12 alpha omega">
        <div class="grid-1 alpha">
            <span style="font-size: 32px;">aka</span>
        </div>
        <div class="grid-11 omega">
            <span style="font-size: 32px;">
                <?php print render($user_profile['field_user_real_name_or_aliases'])?>
            </span>
        </div>
    </div>
    <div class="grid-12 alpha omega">
        <div class="grid-1 alpha">
            <span style="font-size: 32px;">info</span>
        </div>
        <div class="grid-11 omega" style="margin-top: 8px;">
            <span style="font-size: 32px; line-height: 1em;">
                <?php print render($user_profile['field_user_information'])?>
            </span>
        </div>
    </div>




    <div class="grid-12 alpha omega">
        <div style="margin-left: -10px; margin-right: -10px; white-space:nowrap; margin-top: 20px;">
            <?php if (isset($user_profile['field_user_email'])): ?>
                <div class="grid-3"><a href="mailto:<?php print render($user_profile['field_user_email'])?>" class="colored button publicemail">Email</a></div>
            <?php endif; ?>
            <div class="grid-3"><?php print render($user_profile['field_user_facebook_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_tumblr_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_deviantart_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_github_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_soundcloud_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_bandcamp_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_steam_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_backloggery_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_linkedin_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_googleplus_url'])?></div>
            <div class="grid-3"><?php print render($user_profile['field_user_twitter_url'])?></div>
            <?php print render($user_profile['field_user_website_url'])?>
        </div>
    </div>

    <div style="margin-left: -10px; margin-right: -10px;">
        <?php print views_embed_view('user_games_worked_on', 'default'); ?>
        <?php print views_embed_view('user_games_uploaded', 'default'); ?>
    </div>


</div>
</div>
</div>
<div class="grid-12 alpha omega"><?php // print render($user_profile); ?></div>

