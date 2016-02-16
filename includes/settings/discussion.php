<?php

function wpcw_settings_section_callback() { ?>
    <p>
        <b>Available variables: </b>
    </p>
    <p>
        <code>{{discussion}}</code> - discussion object
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
        <code>{{= GovRight.truncateString(discussion.overview)}}</code> - short description of discussion.
    The <code>GovRight.truncateString(text, length)</code> function truncates the description to
    200 characters by default, but you can specify any number of chars:
    <code>{{= GovRight.truncateString(article.text, 20)}}</code>
    </p>
    <p>
        <code>{{= discussion.stats.votesUp}}</code> - number of up votes
    </p>
    <p>
        <code>{{= discussion.stats.votesDown}}</code> - number of down votes
    </p>
    <p>
        <code>{{= discussion.stats.comments}}</code> - number of comments
    </p>
    <p>
        <code>{{= discussion.stats.versions}}</code> - number of versions
    </p>
    <p>
        <code>{{= discussion.stats.comparisons}}</code> - number of comprasions
    </p>
<?php }

register_setting('wpcw_settings_page', 'wpcw_discussion_tpl');
register_setting('wpcw_settings_page', 'wpcw_discussion_css');
register_setting('wpcw_settings_page', 'wpcw_discussion_use_default_tpl');
register_setting('wpcw_settings_page', 'wpcw_discussion_use_default_css');

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

function wpcw_field_discussion_tpl_render() {
    $wpcw_defaults = wpcw_get_defaults('discussion');
    ?>
    <textarea rows='18' name='wpcw_discussion_tpl' style="width: 95%;"><?php echo get_option( 'wpcw_discussion_tpl' ) ?: $wpcw_defaults['tpl'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset" data-section="discussion" data-item="tpl">Reset template</button>
        <label for="wpcw_discussion_use_default_tpl">
            <input id="wpcw_discussion_use_default_tpl" name="wpcw_discussion_use_default_tpl" type="checkbox" <?php checked( 'on', get_option( 'wpcw_discussion_use_default_tpl', 'on' ) ); ?>> Use default template
        </label>
    </div>
    <?php
}

function wpcw_field_discussion_css_render ( ) {
    $wpcw_defaults = wpcw_get_defaults('discussion');
    ?>
    <textarea rows='25' name='wpcw_discussion_css' style="width: 95%;"><?php echo get_option( 'wpcw_discussion_css' ) ?: $wpcw_defaults['css'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset" data-section="discussion" data-item="css">Reset styles</button>
        <label for="wpcw_discussion_use_default_css">
            <input id="wpcw_discussion_use_default_css" name="wpcw_discussion_use_default_css" type="checkbox" <?php checked( 'on', get_option( 'wpcw_discussion_use_default_css', 'on' ) ); ?>> Use default style
        </label>
    </div>
    <?php

}