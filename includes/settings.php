<?php

add_action( 'admin_menu', 'wpcw_add_admin_menu' );
add_action( 'admin_init', 'wpcw_settings_init' );

function wpcw_add_admin_menu(  ) {
    require_once(__DIR__ . '/govright.php');
    add_submenu_page('govright_options', 'GovRight Corpus Widgets', 'Corpus Widgets', 'manage_options', 'wpcw_options', 'wp_corpus_widgets_options_page');
}


function wpcw_settings_init(  ) {

    register_setting( 'wpcw_settings_page', 'wpcw_articles_tpl' );
    register_setting( 'wpcw_settings_page', 'wpcw_articles_css' );


    add_settings_section(
        'wpcw_settings_page_section',
        __( 'Customize widgets settings', 'wpcw' ),
        'wpcw_settings_section_callback',
        'wpcw_settings_page'
    );

    add_settings_field(
        'wpcw_select_field_0',
        __( 'Choose widget to be customized', 'wpcw' ),
        'wpcw_select_field_0_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );

    add_settings_field(
        'wpcw_field_articles_tpl',
        __( 'Articles template', 'wpcw' ),
        'wpcw_field_articles_tpl_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );

    add_settings_field (
        'wpcw_field_articles_default_tpl',
        __( 'Default template', 'wpcw' ),
        'wpcw_field_articles_default_tpl_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );

    add_settings_field (
        'wpcw_field_articles_css',
        __( 'CSS styles', 'wpcw' ),
        'wpcw_field_articles_css_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );

    add_settings_field (
        'wpcw_field_articles_default_css',
        __( 'Default template', 'wpcw' ),
        'wpcw_field_articles_default_css_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );



}


function wpcw_select_field_0_render(  ) {
    ?>
<!--    <select name='wpcw_settings[wpcw_select_field_0]'>-->
<!--        <option value='1' --><?php //selected( $options['wpcw_select_field_0'], 1 ); ?><!-->Discussion</option>-->
<!--        <option value='2' --><?php //selected( $options['wpcw_select_field_0'], 2 ); ?><!-->Discussions</option>-->
<!--        <option value='3' --><?php //selected( $options['wpcw_select_field_0'], 3 ); ?><!-->Recent comments</option>-->
<!--        <option value='4' --><?php //selected( $options['wpcw_select_field_0'], 4 ); ?><!-->Top articles</option>-->
<!--    </select>-->
<?php

}


function wpcw_field_articles_tpl_render(  ) {
    ?>
    <textarea cols='80' rows='15' name='wpcw_articles_tpl' style="width: 90%;"><?php echo get_option( 'wpcw_articles_tpl' ) ?></textarea>
<?php

}

function wpcw_field_articles_css_render ( ) {
    ?>
    <textarea cols='80' rows='15' name='wpcw_articles_css' style="width: 90%;"><?php echo get_option( 'wpcw_articles_css' ) ?></textarea>
<?php

}

function wpcw_field_articles_default_tpl_render( ) {
    $wpcw_defaults = require(__DIR__ . '/defaults.php');
    ?>
    <pre style="background: #fff; width: 89%; overflow: auto;"><?php echo htmlspecialchars($wpcw_defaults['articles']['tpl']) ?></pre>
<?php
}

function wpcw_field_articles_default_css_render( ) {
    $wpcw_defaults = require(__DIR__ . '/defaults.php');
    ?>
    <pre style="background: #fff; width: 89%; overflow: auto;"><?php echo htmlspecialchars($wpcw_defaults['articles']['css']) ?></pre>
<?php
}


function wpcw_settings_section_callback(  ) {

    echo __( 'Choose widget you want to customize. For more info about widgets types see Help', 'wpcw' );

}


function wp_corpus_widgets_options_page(  ) {

    ?>
    <form action='options.php' method='post'>

        <h2>GovRight Corpus Widgets</h2>

        <?php
        settings_fields( 'wpcw_settings_page' );
        do_settings_sections( 'wpcw_settings_page' );
        submit_button();
        ?>

    </form>
<?php

}

?>
