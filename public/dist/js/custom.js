
$(document).ready(function() {
    // alert();
    getBookData();
    showContentpage();

    $('.filter-books').on('keyup', async function (e) {
        var page = 1;
        var title = $("#title").val()
        var author = $("#author").val()
        var genre = $("#genre").val()
        var isbn = $("#isbn").val()
        var published = $("#published").val()
        var publisher = $("#publisher").val()
        $("span#loader").show();
        await getBookData(page, title, author, genre, isbn, published, publisher);
        $("span#loader").hide();
    });

    $('#published').on('change', async function (e) {
        var page = 1;
        var title = $("#title").val()
        var author = $("#author").val()
        var genre = $("#genre").val()
        var isbn = $("#isbn").val()
        var published = $("#published").val()
        var publisher = $("#publisher").val()
        $("span#loader").show();
        await getBookData(page, title, author, genre, isbn, published, publisher);
        $("span#loader").hide();
    });

});

// validation hidden...............
$('.form-control').on('keypress', function(e) {
    $(this).parents(".form-group").children('span').css( "display", "none" );
    $(this).parents(".form-group").find('input').removeClass( "form-control is-invalid" ).addClass( "form-control" );
});


function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('.file-upload-image').attr('src', e.target.result);
      };
      $('.product-image-thumb').css('display', 'block');
      reader.readAsDataURL(input.files[0]);
    }
  }

  async function getBookData(page = 1, title = null, author = null, genre = null, isbn = null, published = null, publisher = null) {
    let result;
    try {
        result = await $.ajax({
            url: SITE_URL + "/books-get",
            type: "GET",
            data: { page: page, title: title, author : author, genre : genre, isbn: isbn, published : published, publisher: publisher},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "html",
            success: function(reportHtmlContent) {
                $("#show-books").html("");
                $("#show-books").html(reportHtmlContent);
            },
        });
        return result;
    } catch (error) {
        $("span#loader").hide();
        errorObj = $.parseJSON(error.responseText);
        console.log(errorObj);
    }
}


async function getAllBook(page = 1, title = null, author = null, genre = null, isbn = null, published = null, publisher = null) {
    let result;
    try {
        result = await $.ajax({
            url: SITE_URL + "/get-all-book",
            type: "GET",
            data: { page: page, title: title, author : author, genre : genre, isbn: isbn, published : published, publisher: publisher},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "html",
            success: function(reportHtmlContent) {
                $("#show-page").html("");
                $("#show-page").html(reportHtmlContent);
            },
        });
        return result;
    } catch (error) {
        $("span#loader").hide();
        errorObj = $.parseJSON(error.responseText);
        console.log(errorObj);
    }
}

async function showContentpage(page = 1) {
    let result;
    try {
        result = await $.ajax({
            url: SITE_URL + "/show-content",
            type: "GET",
            data: {page:page},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "html",
            success: function(reportHtmlContent) {
                $("#show-content-page").html("");
                $("#show-content-page").html(reportHtmlContent);
            },
        });
        return result;
    } catch (error) {
        $("span#loader").hide();
        errorObj = $.parseJSON(error.responseText);
        console.log(errorObj);
    }
}

async function getBookDetail(_id, page) {
    let result;
    try {
        result = await $.ajax({
            url: SITE_URL + "/get-book-detail/"+_id,
            type: "GET",
            data: {page:page},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "html",
            success: function(reportHtmlContent) {
                $("#show-content-page").html("");
                $("#show-content-page").html(reportHtmlContent);
            },
        });
        return result;
    } catch (error) {
        $("span#loader").hide();
        errorObj = $.parseJSON(error.responseText);
        console.log(errorObj);
    }
}


