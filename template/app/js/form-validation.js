$(function () {
    $(".form-validate").validate({
        errorPlacement: function(error, element)
        {
            error.insertAfter(element);
        }
    });
    $(".form-validate-signin").validate({
        errorPlacement: function(error, element)
        {
            error.insertAfter(element);
        }
    });
    $(".form-validate-signup").validate({
        rules: {
            age: {
                range: [0,100]
            }
        },
        errorPlacement: function(error, element)
        {
            error.insertAfter(element);
        }
    });

});

$(document).ready(function() {
    $.extend(jQuery.validator.messages, {
        required: "This field is required.",
        remote: "Please fix this field.",
        email: "Please enter a valid email address.",
        url: "Please enter a valid URL.",
        date: "Please enter a valid date.",
        dateISO: "Please enter a valid date (ISO)s.",
        number: "Please enter a valid number.",
        digits: "Please enter only digits.",
        creditcard: "Please enter a valid credit card number.",
        equalTo: "Enter the same values.",
        accept: "Please enter a value with a valid extension.",
        maxlength: $.validator.format("Please enter no more than {0} characters."),
        minlength: $.validator.format("Please enter at least {0} characters."),
        rangelength: $.validator.format("Por favor, introduzca un valor entre {0} y {1} caracteres de longitud."),
        range: $.validator.format("Please enter a value between {0} and {1} length characters."),
        max: $.validator.format("Please enter a value between {0} and {1}."),
        min: $.validator.format("Please enter a value greater than or equal to {0}.")
    });
});


$.datepicker.regional['es'] = {
 closeText: 'Close',
 prevText: '<Ant',
 nextText: 'Sig>',
 currentText: 'Hoy',
 monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
 monthNamesShort: ['Jan','Feb','Mar','Apr', 'May','Jun','Jul','Aug','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
 dayNamesShort: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
 dayNamesMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
$(function () {
$("#fecha").datepicker();
});