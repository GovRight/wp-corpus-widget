<?php
/*
Plugin Name: GovRight Corpus Widgets
Plugin URI: https://github.com/GovRight/wp-corpus-widgets
Description:
Version: 1.0.0
Author: GovRight
Author URI: http://govright.org/
License: MIT
*/

// Disable bullshit from Wordpress.
remove_filter( 'the_content' , 'wptexturize' );

require(__DIR__ . '/includes/settings.php');
require(__DIR__ . '/includes/shortcodes.php');
require(__DIR__ . '/includes/scripts.php');
require(__DIR__ . '/includes/actions.php');
