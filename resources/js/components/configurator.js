import $ from 'jquery';

$(document).ready(function() {
    $('.configurator-select').change(function () {
        if ($(this).val() === '0') {
            $('#another_' + $(this).attr('id')).removeClass('is-not-visible');
        } else {
            $('#another_' + $(this).attr('id')).addClass('is-not-visible');
        }
    });
});
