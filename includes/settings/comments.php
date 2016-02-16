<?php

function wpcw_settings_section_callback() { ?>
   <p>
       <b>Available variables: </b>
   </p>
    <p>
        <code>{{comments}}</code> - recent comments object
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
        <code>{{= comment.user.profile.id}}</code> - id number of comment author
    </p>
    <p>
        <code>{{= comment.user.profile.displayName}}</code> - profile name of comment author
    </p>
    <p>
        <code>{{= GovRight.formatDate(comment.created, "yyyy-MM-dd HH:mm")}}</code> - date of creation.
        The <code>GovRight.formatDate(date, format)</code> function formats date, you can specify date of needed format:
        <code>{{= GovRight.formatDate(comment.created, "yyyy-MM HH:mm:ss")}}</code>
    </p>
    <p>
        <code>{{= comment.versionId}}</code> - id of discussion version
    </p>
    <p>
        <code>{{= GovRight.truncateString(comment.text)}}</code> - text of comment.
        The <code>GovRight.truncateString(text, length)</code> function truncates the text of comment to
        200 characters by default, but you can specify any number of chars:
        <code>{{= GovRight.truncateString(comment.text, 150)}}</code>
    </p>
<?php }

register_setting('wpcw_settings_page', 'wpcw_recent_comments_tpl');
register_setting('wpcw_settings_page', 'wpcw_recent_comments_css');
register_setting('wpcw_settings_page', 'wpcw_recent_comments_use_default_tpl');
register_setting('wpcw_settings_page', 'wpcw_recent_comments_use_default_css');

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

function wpcw_field_recent_comments_tpl_render() {
    $wpcw_defaults = wpcw_get_defaults('recent-comments');
    ?>
    <textarea rows='25' name='wpcw_recent_comments_tpl' style="width: 95%;"><?php echo get_option( 'wpcw_recent_comments_tpl' ) ?: $wpcw_defaults['tpl'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset" data-section="recent-comments" data-item="tpl">Reset template</button>
        <label for="wpcw_recent_comments_use_default_tpl">
            <input id="wpcw_recent_comments_use_default_tpl" name="wpcw_recent_comments_use_default_tpl" type="checkbox" <?php checked( 'on', get_option( 'wpcw_recent_comments_use_default_tpl', 'on') ); ?>> Use default template
        </label>
    </div>
    <?php
}

function wpcw_field_recent_comments_css_render ( ) {
    $wpcw_defaults = wpcw_get_defaults('recent-comments');
    ?>
    <textarea rows='25' name='wpcw_recent_comments_css' style="width: 95%;"><?php echo get_option( 'wpcw_recent_comments_css' ) ?: $wpcw_defaults['css'] ?></textarea>
    <div class="widget-controls">
        <button class="button button-reset" data-section="recent-comments" data-item="css">Reset styles</button>
        <label for="wpcw_recent_comments_use_default_css">
            <input id="wpcw_recent_comments_use_default_css" name="wpcw_recent_comments_use_default_css" type="checkbox" <?php checked( 'on', get_option( 'wpcw_recent_comments_use_default_css', 'on' ) ); ?>> Use default style
        </label>
    </div>
    <?php

}