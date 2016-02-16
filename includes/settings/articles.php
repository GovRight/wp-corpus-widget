<?php

function wpcw_settings_section_callback() { ?>
    <p>
        <b>Available variables: </b>
    </p>
    <p>
    <code>{{articles}}</code> -  articles object
    </p>
    <p>
        <code>{{= locale}}</code> - current locale code
    </p>
    <p>
        <code>{{= discussion.lawSlug}}</code> - parent law slug
    </p>
    <p>
        <code>{{= discussion.slug}}</code> - discussion slug
    </p>
    <p>
        <code>{{= discussion.title}}</code> - discussion title in current locale
    </p>
    <p>
        <code>{{= article.id}}</code> - id of article
    </p>
    <p>
        <code>{{= article.title}}</code> - title of article in current locale
    </p>
    <p>
        <code>{{= article.stats.votesUp}}</code> - number of up votes
    </p>
    <p>
        <code>{{= article.stats.votesDown}}</code> - number of down votes
    </p>
    <p>
        <code>{{= article.stats.comments}}</code> - number of comments
    </p>
<?php }

register_setting( 'wpcw_settings_page', 'wpcw_articles_tpl' );
register_setting( 'wpcw_settings_page', 'wpcw_articles_css' );
register_setting( 'wpcw_settings_page', 'wpcw_articles_use_default_tpl' );
register_setting( 'wpcw_settings_page', 'wpcw_articles_use_default_css' );

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

function wpcw_field_articles_tpl_render() {
    $wpcw_defaults = wpcw_get_defaults('articles');
    ?>
    <textarea rows='25' name='wpcw_articles_tpl' style="width: 95%;"><?php echo get_option( 'wpcw_articles_tpl' ) ?: $wpcw_defaults['tpl'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset" data-section="articles" data-item="tpl">Reset template</button>
        <label for="wpcw_articles_use_default_tpl">
            <input id="wpcw_articles_use_default_tpl" name="wpcw_articles_use_default_tpl" type="checkbox" <?php checked( 'on', get_option( 'wpcw_articles_use_default_tpl', 'on') ); ?>> Use default template
        </label>
    </div>
    <?php

}

function wpcw_field_articles_css_render ( ) {
    $wpcw_defaults = wpcw_get_defaults('articles');
    ?>
    <textarea rows='25' name='wpcw_articles_css' style="width: 95%;"><?php echo get_option( 'wpcw_articles_css' ) ?: $wpcw_defaults['css'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset" data-section="articles" data-item="css">Reset styles</button>
        <label for="wpcw_articles_use_default_css">
            <input id="wpcw_articles_use_default_css" name="wpcw_articles_use_default_css" type="checkbox" <?php checked( 'on', get_option( 'wpcw_articles_use_default_css', 'on') ); ?>> Use default style
        </label>
    </div>
    <?php

}