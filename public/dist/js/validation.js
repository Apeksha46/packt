jQuery.validator.addMethod("noSpace", function(value, element) {
  return value.indexOf(" ") < 0 && value != "";
}, "No space please and don't leave it empty");


jQuery.validator.addMethod("regex", function(value, element) {
    var EmailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return EmailRegex.test(value);
  }, "Please enter a valid email address.");



$('#add-book-form').validate({
    rules: {
        title: {
            required: true,
            maxlength: 200
        },
        image: {
            required: true,
        },
        author: {
            required: true,
            maxlength: 100
        },
        genre: {
            required: true,
            maxlength: 100
        },
        isbn: {
            required: true,
            number: true,
            maxlength: 100
        },
        published: {
            required: true,
        },
        publisher: {
            required: true,
            maxlength: 100
        },
        description: {
            required: true,
            minlength: 3
        },
    },
    messages: {
        title: {
            required: "The title field is required.",
            maxlength: "The title must be less than 200 characters.",
        },
        image: {
            required: "The image field is required.",
        },
        author: {
            required: "The author field is required.",
            maxlength: "The author must be less than 100 characters.",
        },
        genre: {
            required: "The genre field is required.",
            maxlength: "The genre must be less than 100 characters.",
        },
        isbn: {
            required: "The isbn field is required.",
            maxlength: "The isbn must be less than 100 number.",
        },
        published: {
            required: "The published field is required.",
        },
        publisher: {
            required: "The publisher field is required.",
            maxlength: "The publisher must be less than 100 characters.",
        },
        description: {
            required: "The description field is required.",
            minlength: "The description must be greater than 3 characters.",
        }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {

        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
          url: SITE_URL + "/books-store",
          cache: false,
          contentType: false,
          processData: false,
          type: "POST",
          data: new FormData($("#add-book-form")[0]),
          success:function(response){
            toastr.success(response.message);
            $("#add-book-form")[0].reset();
            $('.product-image-thumb').css('display', 'none');
          },
          error: function(data){
            var errors = $.parseJSON(data.responseText);
            console.log(errors);
        }
         });
      }

});


$('#edit-book-form').validate({
    rules: {
        title: {
            required: true,
            maxlength: 200
        },
        author: {
            required: true,
            maxlength: 100
        },
        genre: {
            required: true,
            maxlength: 100
        },
        isbn: {
            required: true,
            number: true,
            maxlength: 100
        },
        published: {
            required: true,
        },
        publisher: {
            required: true,
            maxlength: 100
        },
        description: {
            required: true,
            minlength: 3
        },
    },
    messages: {
        title: {
            required: "The title field is required.",
            maxlength: "The title must be less than 200 characters.",
        },
        author: {
            required: "The author field is required.",
            maxlength: "The author must be less than 100 characters.",
        },
        genre: {
            required: "The genre field is required.",
            maxlength: "The genre must be less than 100 characters.",
        },
        isbn: {
            required: "The isbn field is required.",
            maxlength: "The isbn must be less than 100 number.",
        },
        published: {
            required: "The published field is required.",
        },
        publisher: {
            required: "The publisher field is required.",
            maxlength: "The publisher must be less than 100 characters.",
        },
        description: {
            required: "The description field is required.",
            minlength: "The description must be greater than 3 characters.",
        }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {

        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
          url: SITE_URL + "/books-update",
          cache: false,
            contentType: false,
            processData: false,
          type: "POST",
          data: new FormData($("#edit-book-form")[0]),
          success:function(response){
            toastr.success(response.message);
          },
          error: function(data){
            var errors = $.parseJSON(data.responseText);
            toastr.error(errors.message);
        }
         });
      }

});
