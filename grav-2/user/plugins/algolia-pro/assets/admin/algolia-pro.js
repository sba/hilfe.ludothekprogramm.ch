((function ($) {

    const request = window.Grav.default.Utils.request || function () {
    };
    const base_url = window.GravAdmin.config.base_url_relative;

    $(document).on('click', '.algolia-reindex', function (event) {
        event.preventDefault();
        const target = $(event.currentTarget);
        if (target.is('[disabled]')) {
            return false;
        }

        const elements = $('.algolia-reindex');

        elements
        .attr('disabled', 'disabled')
        .find('> .fa').removeClass('fa-magic').addClass('fa-refresh fa-spin');

        return request(`${base_url}.json/action:reindexAlgolia/admin-nonce:${GravAdmin.config.admin_nonce}`, function (result) {
            elements
            .removeAttr('disabled')
            .find('> .fa').removeClass('fa-refresh fa-spin fa-clock-o').addClass('fa-clock-o');
        });
    });

    $(document).on('click', '[data-algolia-pro-reset]', function (event) {
        event.preventDefault();
        const target = $(event.currentTarget);
        const cancel = target.siblings('[data-remodal-action="cancel"]');
        if (target.is('[disabled]')) {
            return false;
        }

        cancel.attr('disabled', 'disabled');
        target.attr('disabled', 'disabled').find('> .fa').removeClass('fa-check').addClass('fa-refresh fa-spin');

        return request(`${base_url}.json/action:resetIndexAlgolia/admin-nonce:${GravAdmin.config.admin_nonce}`, function (result) {
            cancel.removeAttr('disabled');
            target
            .removeAttr('disabled')
            .find('> .fa').removeClass('fa-refresh fa-spin fa-check').addClass('fa-check');

            if (result.status && result.status === 'success') {
                cancel.trigger('click');
            }
        });
    });

    // workaround to ensure `<form>` is where needed to guarantee grav admin styling
    $('[data-remodal-id="reset-indexes"] > div').replaceWith(function() {
        const content = $(this).contents();
        console.log(content);
        return $('<form />').append(content);
    });
})(jQuery));
