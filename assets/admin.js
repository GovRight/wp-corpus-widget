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
        var $btn = $(this);
        var data = {
            action: 'wpcw_get_defaults',
            section: $btn.data('section'),
            data: $btn.data('item')
        };
        $.post(ajaxurl, data, function(response) {
            $btn.parent().parent().find('textarea').val(response);
        });
        return false;
    });
})(jQuery);