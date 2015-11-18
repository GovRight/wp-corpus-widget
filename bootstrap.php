<?php
/*
Plugin Name: GovRight Corpus Tools
Plugin URI: http://govright.org
Description: 
Version: 0.1
Author: Heath Morrison
Author URI: http://www.govright.org
*/

// Disable bullshit from Wordpress.
remove_filter( 'the_content' , 'wptexturize' );

require(__DIR__ . '/includes/settings.php');
require(__DIR__ . '/includes/shortcodes.php');
require(__DIR__ . '/includes/scripts.php');
require(__DIR__ . '/includes/actions.php');




