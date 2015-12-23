<?php
/*
Plugin Name: GovRight Corpus Widgets
Plugin URI: https://github.com/GovRight/wp-corpus-widgets
Description: A plugin to help you to embed GovRight Corpus widgets such as list of discussions, articles, comments, etc, into your site. Check <a href="https://github.com/GovRight/wp-corpus-widgets">the plugin Github page</a> for more details and instructions.
Version: 1.1.0
Author: GovRight
Author URI: http://govright.org/
License: MIT
GitHub Plugin URI: https://github.com/GovRight/wp-corpus-widgets
GitHub Branch: master
*/

// Disable bullshit from Wordpress.
remove_filter( 'the_content' , 'wptexturize' );

require(__DIR__ . '/includes/utils.php');
require(__DIR__ . '/includes/settings.php');
require(__DIR__ . '/includes/shortcodes.php');
require(__DIR__ . '/includes/enqueue.php');
require(__DIR__ . '/includes/actions.php');
