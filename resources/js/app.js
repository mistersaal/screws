import $ from 'jquery';
window.jQuery = $;
window.$ = $;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

require('@fortawesome/fontawesome-free/js/all.js');
