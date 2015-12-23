<?php

function wpcw_add_customized_options() {

    if(get_option( 'wpcw_articles_use_default_tpl' ) !== 'on') {
        echo '<script id="corpus-articles" type="html/template">';
        echo get_option('wpcw_articles_tpl');
        echo '</script>';
    }

    if(get_option( 'wpcw_articles_use_default_css' ) !== 'on') {
        echo '<style id="corpus-custom-widget-styles">';
        echo get_option('wpcw_articles_css');
        echo '</style>';
    }

    if(get_option( 'wpcw_discussion_use_default_tpl' ) !== 'on') {
        echo '<script id="corpus-discussion" type="html/template">';
        echo get_option('wpcw_discussion_tpl');
        echo '</script>';
    }

    if(get_option( 'wpcw_discussion_use_default_css' ) !== 'on') {
        echo '<style id="corpus-custom-widget-styles">';
        echo get_option('wpcw_discussion_css');
        echo '</style>';
    }

    if(get_option( 'wpcw_recent_comments_use_default_tpl' ) !== 'on') {
        echo '<script id="corpus-discussion" type="html/template">';
        echo get_option('wpcw_recent_comments_tpl');
        echo '</script>';
    }

    if(get_option( 'wpcw_recent_comments_use_default_css' ) !== 'on') {
        echo '<style id="corpus-custom-widget-styles">';
        echo get_option('wpcw_recent_comments_css');
        echo '</style>';
    }
}
add_action( 'wp_footer', 'wpcw_add_customized_options' );
