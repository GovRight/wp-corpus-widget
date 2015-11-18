<?php

add_shortcode("corpus-template", "corpus_template_handler");
add_shortcode("corpus-discussions", "corpus_discussions_handler");
add_shortcode("corpus-discussion", "corpus_discussion_handler");
add_shortcode("corpus-recent-comments", "corpus_recent_comments_handler");
add_shortcode("corpus-articles", "corpus_article_handler");

function make_tag($tag, $atts, $contents) {
    $attributes = "";
    foreach ($atts as $key => $val) {
        $attributes .= $key.'="'. $val . '" ';
    }
    #$contents = html_entity_decode($contents);
    return "<$tag $attributes>$contents</$tag>";
}

function corpus_template_handler($atts, $contents) {
    if (!isset($atts['type'])) {
        $atts['type'] = 'html/template';
    }
    if (!isset($atts['class'])) {
        $atts['class'] = 'corpus-template';
    }

    return make_tag('script', $atts, $contents);
}

function corpus_discussions_handler($atts, $contents) {
    return make_tag('corpus-discussions', $atts, $contents);
}

function corpus_discussion_handler($atts, $contents) {
    return make_tag('corpus-discussion', $atts, $contents);
}

function corpus_recent_comments_handler($atts, $contents) {
    return make_tag('corpus-recent-comments', $atts, $contents);
}

function corpus_article_handler($atts, $contents) {
    return make_tag('corpus-articles', $atts, $contents);
}