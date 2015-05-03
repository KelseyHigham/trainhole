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
<div class="grid-3">
   <h2 class="calm">Past Events</h2>
   <?php print views_embed_view('past_events', 'default'); ?>
   

   <h3>Spring 2011</h3>
   <p>Feb 24: <a href="http://sjsugamedev.com/2011/02/upcoming-events/">Meeting: Game Maker tutorial!</a><br />
   Feb 19: <a href="http://sjsugamedev.com/2011/02/upcoming-events/">Event: Game in a Day</a><br />
   Feb 17: <a href="http://sjsugamedev.com/2011/02/upcoming-events/">Event: Game Night</a><br />
   Feb 10: <a href="http://sjsugamedev.com/2011/02/this-weeks-meeting/">Meeting: This Week’s Meeting</a><br />
   Feb 3: <a href="http://sjsugamedev.com/2011/01/first-meeting-of-the-semester/">Meeting: First Meeting of the Semester!</a></p>
   <br>
   <h3>Fall 2010</h3>
   <p>Oct 2: <a href="http://sjsugamedev.com/2010/09/event-fighting-game-tournament/">Event: Fighting Game Tournament</a><br />
   Sept 17: <a href="http://sjsugamedev.com/2010/09/museum-exhibit-whoa-learn-to-play/">Event: Museum Exhibit and Carpool: Learn to Play</a><br />
   Sept 14: <a href="http://sjsugamedev.com/2010/09/meeting-meet-your-teams/">Meeting: Meet your Teams!</a><br />
   Sept 7: <a href="http://sjsugamedev.com/2010/09/meeting-fall-2010-kickoff/">Meeting: Fall 2010 Kickoff</a></p>
   <br>
   <h3>Spring 2010</h3>
   <p>May 11: <a href="http://www.facebook.com/event.php?eid=120585141301140">Meeting: Cryptic Studio's Brian Urbanek on Design (for reals this time)</a><br />
   Apr 27: <a href="http://www.facebook.com/event.php?eid=113969245293712">Meeting: How To Start Your Own Student Game Dev Studio</a><br />
   Apr 17: <a href="http://www.facebook.com/event.php?eid=108545749184680">Event: The Glorious Trainwrecks/Game Dev Club Piggydocumogamesmash!</a><br />
   Apr 6: <a href="http://www.facebook.com/event.php?eid=115228231825339">Meeting: Cryptic Studios's Brian Urbanek on Design</a><br />
   Mar 16: <a href="http://www.facebook.com/event.php?eid=367279734060">Meeting: Anna Anthropy on Guided Level Design</a><br />
   Mar 2: <a href="http://www.facebook.com/event.php?eid=347343847441">Meeting: Odds, Ends, and Beginnings</a><br />
   Feb 16: <a href="http://www.facebook.com/event.php?eid=302450821779">Meeting: Design Docs and Teaming Up</a><br />
   Feb 2: <a href="http://www.facebook.com/event.php?eid=273373991231">Meeting: Spring 2010 Kickoff</a></p>
</div>
<div class="grid-6">
   <h2 class="calm">Upcoming Events</h2>
   <iframe src="https://www.google.com/calendar/embed?src=vcutfn89rns5sb5b3tef98dodc%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="460" height="345" frameborder="0" scrolling="no"></iframe>
   <?php global $user; 
   if (array_key_exists('3', $user->roles) || array_key_exists('4', $user->roles)): ?>
       <a href="<?php print url(); ?>node/add/event" class="event large" style="border-style: dotted;">
         <div class="title">+ Add an Event</div>
      </a>
   
   <?php endif; ?>
   <?php print views_embed_view('upcoming_events', 'default'); ?>
</div>
<div class="grid-3">
   <h2 class="calm">Featured</h2>
   <?php print views_embed_view('featured_events', 'default'); ?>
</div>



&nbsp;
</div>
