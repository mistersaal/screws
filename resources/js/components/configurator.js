import $ from 'jquery';

$(document).ready(function() {
    $('.configurator-select').change(function () {
        let formId = $(this).attr('id');
        let $another = $('#another_' + formId).closest('.field');
        if ($(this).val() === '0') {
            $another.removeClass('is-slim');
        } else {
            $another.addClass('is-slim');
        }
    });
});
