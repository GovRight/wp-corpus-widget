<?php

add_action( 'wp_enqueue_scripts', 'corpus_add_script' );

function corpus_add_script() {
    wp_register_script('corpus_widgets', 'http://corpus.govright.org/widgets/dist/widgets.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('corpus_widgets');
}