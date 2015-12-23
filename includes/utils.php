<?php

function wpcw_get_section() {
    $sections = array('discussion', 'articles', 'comments');
    $section = $_GET['section'] ?: $_POST['section'] ?: 'discussion';
    if(!in_array($section, $sections)) {
        $section = 'discussion';
    }
    return $section;
}

function wpcw_get_defaults($section) {
    $config = require __DIR__ . '/defaults.php';
    return $config[$section];
}
