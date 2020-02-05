import $ from 'jquery';

$(document).ready(function() {
    setActive('manufacturer');

    $('.configurator-select').change(function () {
        let formId = $(this).attr('id');
        let $another = $('#another_' + formId).closest('.field');
        if ($(this).val() === '0') {
            $another.removeClass('is-slim');
            setActive(formId);
        } else {
            $another.addClass('is-slim');
            if (forms.indexOf(formId) + 1 < forms.length) {
                setActive(forms[forms.indexOf(formId) + 1]);
            }
        }
    });
    $('.configurator-another').on('input', function () {
        let formId = $(this).attr('id');
        formId = formId.replace('another_', '');
        console.log(formId);
        if ($(this).val() != false) {
            if (forms.indexOf(formId) + 1 < forms.length) {
                setActive(forms[forms.indexOf(formId) + 1]);
            }
        } else {
            setActive(formId);
        }
    });
});

let forms = [
    'manufacturer',
    'type'
];
function setActive(active) {
    let formsDisabled = [...forms];
    let formsEnabled = [...forms];
    formsDisabled = formsDisabled.slice(formsDisabled.indexOf(active) + 1);
    formsEnabled.splice(formsEnabled.indexOf(active) + 1);

    for (let i = 0; i < formsEnabled.length; i++) {
        $('#' + formsEnabled[i]).prop('disabled', false);
        $('#another_' + formsEnabled[i]).prop('disabled', false);
    }
    for (let i = 0; i < formsDisabled.length; i++) {
        $('#' + formsDisabled[i]).prop('disabled', true).val(-1).change();
        $('#another_' + formsDisabled[i]).prop('disabled', true);
    }
}
