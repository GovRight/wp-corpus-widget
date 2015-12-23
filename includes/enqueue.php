<?php

// Frontend script
add_action( 'wp_enqueue_scripts', 'corpus_add_script' );
function corpus_add_script() {
    wp_register_script('corpus_widgets', 'http://corpus.govright.org/widgets/dist/widgets.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('corpus_widgets');
}

// Admin assets
function corpus_add_admin_assets() {
    wp_register_style( 'corpus_admin_wpcw_css', plugins_url( 'assets/admin.css', dirname(__FILE__) ), false, '1.0.0' );
    wp_enqueue_style( 'corpus_admin_wpcw_css' );

    wp_register_script('corpus_admin_wpcw_script', plugins_url( 'assets/admin.js', dirname(__FILE__) ), array('jquery'), '1.0', true);
    wp_enqueue_script('corpus_admin_wpcw_script');
}
add_action( 'admin_enqueue_scripts', 'corpus_add_admin_assets' );
