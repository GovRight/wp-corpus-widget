<?php

function wpcw_add_customized_options() {

    echo '<script id="corpus-articles" type="html/template">';
    echo get_option( 'wpcw_articles_tpl' );
    echo '</script>';

    echo '<style id="corpus-custom-widget-styles">';
    echo get_option( 'wpcw_articles_css' );
    echo '</style>';
}
add_action( 'wp_footer', 'wpcw_add_customized_options' );