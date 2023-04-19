jQuery.validator.addMethod(
    "noSpace",
    function (value, element) {
        return value.indexOf(" ") < 0 && value != "";
    },
    "No space please and don't leave it empty"
);

jQuery.validator.addMethod(
    "regex",
    function (value, element) {
        var EmailRegex =
            /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return EmailRegex.test(value);
    },
    "Please enter a valid email address."
);

$("#loginForm").validate({
    rules: {
        password: {
            required: true,
            maxlength: 16,
            minlength: 6,
            noSpace: true,
        },
        email: {
            required: true,
            email: true,
            noSpace: true,
            regex: true,
        },
    },
    messages: {
        email: {
            required: "The email field is required.",
            pattern: "Please enter a valid email address.",
        },
        password: {
            required: "The password field is required.",
        },
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        element.closest(".form-group").append(error);
    },
    highlight: function (element, errorClass, validClass) {
        $(element).addClass("is-invalid");
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass("is-invalid");
    },
});


