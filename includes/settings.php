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
    register_setting( 'wpcw_settings_page', 'wpcw_articles_use_default_tpl' );
    register_setting( 'wpcw_settings_page', 'wpcw_articles_use_default_css' );
    register_setting('wpcw_settings_page', 'wpcw_discussion_tpl');
    register_setting('wpcw_settings_page', 'wpcw_discussion_css');
    register_setting('wpcw_settings_page', 'wpcw_discussion_use_default_tpl');
    register_setting('wpcw_settings_page', 'wpcw_discussion_use_default_css');
    register_setting('wpcw_settings_page', 'wpcw_recent_comments_tpl');
    register_setting('wpcw_settings_page', 'wpcw_recent_comments_css');
    register_setting('wpcw_settings_page', 'wpcw_recent_comments_use_default_tpl');
    register_setting('wpcw_settings_page', 'wpcw_recent_comments_use_default_css');


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
        'wpcw_field_articles_css',
        __( 'Articles CSS styles', 'wpcw' ),
        'wpcw_field_articles_css_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );

    add_settings_field(
        'wpcw_field_discussion_tpl',
        __( 'Discussion template', 'wpcw' ),
        'wpcw_field_discussion_tpl_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );

    add_settings_field (
        'wpcw_field_discussion_css',
        __( 'Discussion CSS styles', 'wpcw' ),
        'wpcw_field_discussion_css_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );

    add_settings_field(
        'wpcw_field_recent_comments_tpl',
        __( 'Recent comments template', 'wpcw' ),
        'wpcw_field_recent_comments_tpl_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );

    add_settings_field (
        'wpcw_field_recent_comments_css',
        __( 'Recent comments CSS styles', 'wpcw' ),
        'wpcw_field_recent_comments_css_render',
        'wpcw_settings_page',
        'wpcw_settings_page_section'
    );
}


function wpcw_select_field_0_render(  ) {
    ?>
    <select>
        <option>Discussion</option>
        <option>Discussions</option>
        <option>Recent comments</option>
        <option>Top articles</option>
    </select>
<?php

}

function wpcw_field_articles_tpl_render(  ) {
    $wpcw_defaults = require(__DIR__ . '/defaults.php');
    ?>
    <textarea rows='25' name='wpcw_articles_tpl' style="width: 95%;"><?php echo get_option( 'wpcw_articles_tpl' ) ?: $wpcw_defaults['articles']['tpl'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset">Reset template</button>
        <label for="wpcw_articles_use_default_tpl">
            <input id="wpcw_articles_use_default_tpl" name="wpcw_articles_use_default_tpl" type="checkbox" <?php checked( 'on', get_option( 'wpcw_articles_use_default_tpl' ) ); ?>> Use default template
        </label>
    </div>
<?php

}

function wpcw_field_articles_css_render ( ) {
    $wpcw_defaults = require(__DIR__ . '/defaults.php');
    ?>
    <textarea rows='25' name='wpcw_articles_css' style="width: 95%;"><?php echo get_option( 'wpcw_articles_css' ) ?: $wpcw_defaults['articles']['css'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset">Reset styles</button>
        <label for="wpcw_articles_use_default_css">
            <input id="wpcw_articles_use_default_css" name="wpcw_articles_use_default_css" type="checkbox" <?php checked( 'on', get_option( 'wpcw_articles_use_default_css' ) ); ?>> Use default style
        </label>
    </div>
<?php

}

function wpcw_field_discussion_tpl_render() {
    $wpcw_defaults = require(__DIR__ . '/defaults.php');
    ?>
    <textarea rows='25' name='wpcw_discussion_tpl' style="width: 95%;"><?php echo get_option( 'wpcw_discussion_tpl' ) ?: $wpcw_defaults['discussion']['tpl'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset">Reset template</button>
        <label for="wpcw_discussion_use_default_tpl">
            <input id="wpcw_discussion_use_default_tpl" name="wpcw_discussion_use_default_tpl" type="checkbox" <?php checked( 'on', get_option( 'wpcw_discussion_use_default_tpl' ) ); ?>> Use default template
        </label>
    </div>
    <?php
}

function wpcw_field_discussion_css_render ( ) {
    $wpcw_defaults = require(__DIR__ . '/defaults.php');
    ?>
    <textarea rows='25' name='wpcw_discussion_css' style="width: 95%;"><?php echo get_option( 'wpcw_discussion_css' ) ?: $wpcw_defaults['discussion']['css'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset">Reset styles</button>
        <label for="wpcw_discussion_use_default_css">
            <input id="wpcw_discussion_use_default_css" name="wpcw_discussion_use_default_css" type="checkbox" <?php checked( 'on', get_option( 'wpcw_discussion_use_default_css' ) ); ?>> Use default style
        </label>
    </div>
    <?php

}

function wpcw_field_recent_comments_tpl_render() {
    $wpcw_defaults = require(__DIR__ . '/defaults.php');
    ?>
    <textarea rows='25' name='wpcw_recent_comments_tpl' style="width: 95%;"><?php echo get_option( 'wpcw_recent_comments_tpl' ) ?: $wpcw_defaults['recent-comments']['tpl'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset">Reset template</button>
        <label for="wpcw_recent_comments_use_default_tpl">
            <input id="wpcw_recent_comments_use_default_tpl" name="wpcw_recent_comments_use_default_tpl" type="checkbox" <?php checked( 'on', get_option( 'wpcw_recent_comments_use_default_tpl' ) ); ?>> Use default template
        </label>
    </div>
    <?php
}

function wpcw_field_recent_comments_css_render ( ) {
    $wpcw_defaults = require(__DIR__ . '/defaults.php');
    ?>
    <textarea rows='25' name='wpcw_recent_comments_css' style="width: 95%;"><?php echo get_option( 'wpcw_recent_comments_css' ) ?: $wpcw_defaults['recent-comments']['css'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset">Reset styles</button>
        <label for="wpcw_recent_comments_use_default_css">
            <input id="wpcw_recent_comments_use_default_css" name="wpcw_recent_comments_use_default_css" type="checkbox" <?php checked( 'on', get_option( 'wpcw_recent_comments_use_default_css' ) ); ?>> Use default style
        </label>
    </div>
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

    <script>
        (function($) {
            $('[type=checkbox]').each(function() {
                disableTexarea(this);
            });
            $('[type=checkbox]').change(function() {
                disableTexarea(this);
            });
            function disableTexarea(checkbox) {
                $(checkbox).parent()
                    .parent()
                    .parent()
                    .find('textarea')
                    .prop('disabled', $(checkbox).is(':checked'));
            }

            $('.button-reset').click(function() {
                return false;
            });
        })(jQuery);
    </script>

    <style>
        .widget-controls {
            margin-top: 5px;
        }
        .widget-controls label {
            position: relative;
            top: 5px;
            margin-left: 10px;
        }
    </style>
<?php

}

?>
