<?php
// $Id: template.php,v 1.1.2.6.4.2 2011/01/11 01:08:49 dvessel Exp $

/**
 * The default group for NineSixty framework CSS files added to the page.
 */
define('CSS_NS_FRAMEWORK', -200);

/**
 * Implements hook_preprocess_html
 */
function ninesixty_preprocess_html(&$vars) {
  $vars['classes_array'][] = 'show-grid';
}

/**
 * Preprocessor for page.tpl.php template file.
 */
function ninesixty_preprocess_page(&$vars, $hook) {

  // For easy printing of variables.
  $vars['logo_img'] = '';
  if (!empty($vars['logo'])) {
    $vars['logo_img'] = theme('image', array(
      'path'  => $vars['logo'],
      'alt'   => t('Home'),
      'title' => t('Home'),
    ));
  }
  $vars['linked_logo_img']  = '';
  if (!empty($vars['logo_img'])) {
    $vars['linked_logo_img'] = l($vars['logo_img'], '<front>', array(
      'attributes' => array(
        'rel'   => 'home',
        'title' => t('Home'),
      ),
      'html' => TRUE,
    ));
  }
  $vars['linked_site_name'] = '';
  if (!empty($vars['site_name'])) {
    $vars['linked_site_name'] = l($vars['site_name'], '<front>', array(
      'attributes' => array(
        'rel'   => 'home',
        'title' => t('Home'),
      ),
    ));
  }

  // Site navigation links.
  $vars['main_menu_links'] = '';
  if (isset($vars['main_menu'])) {
    $vars['main_menu_links'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'id' => 'main-menu',
        'class' => array('inline', 'main-menu'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    ));
  }
  $vars['secondary_menu_links'] = '';
  if (isset($vars['secondary_menu'])) {
    $vars['secondary_menu_links'] = theme('links__system_secondary_menu', array(
      'links' => $vars['secondary_menu'],
      'attributes' => array(
        'id'    => 'secondary-menu',
        'class' => array('inline', 'secondary-menu'),
      ),
      'heading' => array(
        'text' => t('Secondary menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    ));
  }

}

/**
 * Contextually adds 960 Grid System classes.
 *
 * The first parameter passed is the *default class*. All other parameters must
 * be set in pairs like so: "$variable, 3". The variable can be anything available
 * within a template file and the integer is the width set for the adjacent box
 * containing that variable.
 *
 *  class="<?php print ns('grid-16', $var_a, 6); ?>"
 *
 * If $var_a contains data, the next parameter (integer) will be subtracted from
 * the default class. See the README.txt file.
 */
function ns() {
  $args = func_get_args();
  $default = array_shift($args);
  // Get the type of class, i.e., 'grid', 'pull', 'push', etc.
  // Also get the default unit for the type to be procesed and returned.
  list($type, $return_unit) = explode('-', $default);

  // Process the conditions.
  $flip_states = array('var' => 'int', 'int' => 'var');
  $state = 'var';
  foreach ($args as $arg) {
    if ($state == 'var') {
      $var_state = !empty($arg);
    }
    elseif ($var_state) {
      $return_unit = $return_unit - $arg;
    }
    $state = $flip_states[$state];
  }

  $output = '';
  // Anything below a value of 1 is not needed.
  if ($return_unit > 0) {
    $output = $type . '-' . $return_unit;
  }
  return $output;
}

/**
 * Implements hook_css_alter.
 * 
 * This rearranges how the style sheets are included so the framework styles
 * are included first.
 *
 * Sub-themes can override the framework styles when it contains css files with
 * the same name as a framework style. This mirrors the behavior of the 6--1
 * release of NineSixty warts and all. Future versions will make this obsolete.
 */
function ninesixty_css_alter(&$css) {
  global $theme_info, $base_theme_info;

  // Dig into the framework .info data.
  $framework = !empty($base_theme_info) ? $base_theme_info[0]->info : $theme_info->info;

  // Ensure framework CSS is always first.
  $on_top = CSS_NS_FRAMEWORK;

  // Pull framework styles from the themes .info file and place them above all stylesheets.
  if (isset($framework['stylesheets'])) {
    foreach ($framework['stylesheets'] as $media => $styles_from_960) {
      foreach ($styles_from_960 as $style_from_960) {
        // Force framework styles to come first.
        if (strpos($style_from_960, 'framework') !== FALSE) {
          $css[$style_from_960]['group'] = $on_top;
          // Handle styles that may be overridden from sub-themes.
          foreach (array_keys($css) as $style_from_var) {
            if ($style_from_960 != $style_from_var && basename($style_from_960) == basename($style_from_var)) {
              $css[$style_from_var]['group'] = $on_top;
            }
          }
        }
      }
    }
  }
}

/*
 * Function to parse the id from all different types of Youtube Embed Codes and Youtube Urls
 *
 * @author Andreas Grundner
 * @date 22.07.2011
 * @licence freeware
 * @param string youtube url, embed code, share code, channel code ...
 * @return string youtube_id
 */
function getYoutubeId($sYoutubeUrl) {
 
    # set to zero
    $youtube_id = "";
    $sYoutubeUrl = trim($sYoutubeUrl);
 
    # the User entered only the eleven chars long id, Case 1
    if(strlen($sYoutubeUrl) === 11) {
        $youtube_id = $sYoutubeUrl;
        return $sYoutubeUrl;
    }
 
    # the User entered a Url
    else {
 
        # try to get all Cases
        if (preg_match('~(?:youtube\.com/(?:user/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})~i', $sYoutubeUrl, $match)) {
            $youtube_id = $match[1];
            return $youtube_id;
        }
        # try to get some other channel codes, and fallback extractor
        elseif(preg_match('~http://www.youtube.com/v/([A-Za-z0-9\-_]+).+?|embed\/([0-9A-Za-z-_]{11})|watch\?v\=([0-9A-Za-z-_]{11})|#.*/([0-9A-Za-z-_]{11})~si', $sYoutubeUrl, $match)) {
 
            for ($i=1; $i<=4; $i++) {
                if (strlen($match[$i])==11) {
                    $youtube_id = $match[$i];
                    break;
                }
            }
            return $youtube_id;
        }
        else {
            $youtube_id = "No valid YoutubeId extracted";
            return $youtube_id;
        }
    }
}


function getVimeoId($sVimeoUrl) {
    
        $vimeo_id = "";
    
        $regex = '~
         # Match Vimeo link and embed code
         # Stolen from http://pastebin.com/4w4eYQak
        (?:<iframe [^>]*src=")?         # If iframe match up to first quote of src
        (?:                             # Group vimeo url
                https?:\/\/             # Either http or https
                (?:[\w]+\.)*            # Optional subdomains
                vimeo\.com              # Match vimeo.com
                (?:[\/\w]*\/videos?)?   # Optional video sub directory this handles groups links also
                \/                      # Slash before Id
                ([0-9]+)                # $1: VIDEO_ID is numeric
                [^\s]*                  # Not a space
        )                               # End group
        "?                              # Match end quote if part of src
        (?:[^>]*></iframe>)?            # Match the end of the iframe
        (?:<p>.*</p>)?                  # Match any title information stuff
        ~ix';
    
        if (preg_match($regex, $sVimeoUrl, $match)) {
            $vimeo_id = $match[1];
        }
        
        return $vimeo_id;
        
}