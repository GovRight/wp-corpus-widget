<?php
$section = wpcw_get_section();
add_action( 'admin_menu', 'wpcw_add_admin_menu' );
add_action( 'admin_init', 'wpcw_settings_init' );

function wpcw_add_admin_menu(  ) {
    require_once(__DIR__ . '/govright.php');
    add_submenu_page('govright_options', 'GovRight Corpus Widgets', 'Corpus Widgets', 'manage_options', 'wpcw_options', 'wp_corpus_widgets_options_page');
}

function wpcw_settings_init() {
    add_settings_section(
        'wpcw_settings_page_section',
        __( 'Widgets settings', 'wpcw' ),
        'wpcw_settings_section_callback',
        'wpcw_settings_page'
    );
    $section = wpcw_get_section();
    require_once __DIR__ . '/settings/' . $section . '.php';
}

function wp_corpus_widgets_options_page() {
    $section = wpcw_get_section(); ?>
    <div class="wrap">
        <h2>GovRight Corpus Widgets</h2>
        <p>
            Choose the widget you want to customize. Check <a target="_blank" href="https://github.com/GovRight/wp-corpus-widgets">the plugin Github page</a> for more details and instructions.
        </p>
        <h2 class="nav-tab-wrapper">
            <a class="nav-tab <?= $section === 'discussion' ? 'nav-tab-active' : '' ?>" href="<?php echo admin_url() ?>admin.php?page=wpcw_options&section=discussion">Discussion</a>
            <a class="nav-tab <?= $section === 'articles' ? 'nav-tab-active' : '' ?>" href="<?php echo admin_url() ?>admin.php?page=wpcw_options&section=articles">Articles</a>
            <a class="nav-tab <?= $section === 'comments' ? 'nav-tab-active' : '' ?>" href="<?php echo admin_url() ?>admin.php?page=wpcw_options&section=comments">Comments</a>
        </h2>
        <form action='options.php' method='post'>
            <?php
            settings_fields( 'wpcw_settings_page' );
            do_settings_sections( 'wpcw_settings_page' );
            submit_button(); ?>
            <input type="hidden" name="section" value="<?= $section ?>">
        </form>
    </div>
<?php } ?>