<?php

function wpcw_add_customized_options() {

    if(get_option( 'wpcw_articles_use_default_tpl', 'on' ) !== 'on') {
        echo '<script id="corpus-articles" type="html/template">';
        echo get_option('wpcw_articles_tpl');
        echo '</script>';
    }

    if(get_option( 'wpcw_articles_use_default_css', 'on' ) !== 'on') {
        echo '<style id="corpus-custom-widget-styles-articles">';
        echo get_option('wpcw_articles_css');
        echo '</style>';
    }

    if(get_option( 'wpcw_discussion_use_default_tpl', 'on' ) !== 'on') {
        echo '<script id="corpus-discussion" type="html/template">';
        echo get_option('wpcw_discussion_tpl');
        echo '</script>';
    }

    if(get_option( 'wpcw_discussion_use_default_css', 'on' ) !== 'on') {
        echo '<style id="corpus-custom-widget-styles-discussion">';
        echo get_option('wpcw_discussion_css');
        echo '</style>';
    }

    if(get_option( 'wpcw_recent_comments_use_default_tpl', 'on' ) !== 'on') {
        echo '<script id="corpus-comments" type="html/template">';
        echo get_option('wpcw_recent_comments_tpl');
        echo '</script>';
    }

    if(get_option( 'wpcw_recent_comments_use_default_css', 'on' ) !== 'on') {
        echo '<style id="corpus-custom-widget-styles-comments">';
        echo get_option('wpcw_recent_comments_css');
        echo '</style>';
    }
}
add_action( 'wp_footer', 'wpcw_add_customized_options' );


function wpcw_get_defaults_action() {
    if ( current_user_can( 'manage_options' ) ) {
        $section = $_POST['section'] ?: 'discussion';
        $data = $_POST['data'] ?: 'tpl';
        $defaults = wpcw_get_defaults($section);
        echo $defaults[$data];
        wp_die();
    } else {
        header('HTTP/1.0 403 Forbidden');
    }
}
add_action('wp_ajax_wpcw_get_defaults', 'wpcw_get_defaults_action');
