<table class="table table-bordered table-hover ">
    <thead>
    <tr>
      <th>No.</th>
      <th>Image</th>
      <th>Title</th>
      <th>Author</th>
      <th>Genre</th>
      <th>Isbn</th>
      <th>Published</th>
      <th>Publisher</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
      @php
      $i = 1;
      @endphp
      @forelse ($books as $book)
          <tr id="delete-row-{{$book->id}}">
              <td>{{ $i++."." }}</td>
              <td>
                  <a href="{{ $book->image }}" target="_blank">
                      <img src="{{ $book->image }}" alt="user" class="brand-image " style="width: 50px; height: 50px;">
                  </a>
              </td>
              <td>
                  {{ $book->title }}
              </td>
              <td>
                  {{ $book->author }}
              </td>
              <td>
                  {{ $book->genre }}
              </td>
              <td>
                  {{ $book->isbn }}
              </td>
              <td>
                  {{ $book->published }}
              </td>
              <td>
                  {{ $book->publisher }}
              </td>
              <td>
                  <a href="{{ route('books.show', $book->id) }}" id="show-book" class="btn btn-book-store"  ><i class="fa fa-eye"></i></a>
                  <a href="{{ route('books.edit', $book->id) }}" id="edit-book" class="btn btn-book-store" ><i class="fa fa-pencil"></i></a>
                  <a id="delete-book" class="btn btn-danger delete-book" data-id="{{ $book->id }}" ><i class="fa fa-trash"></i></a>
              </td>
          </tr>
      @empty
          <tr class="no-data-row">
              <td colspan="9" rowspan="2" align="center">
                  <div class="message"><p>No data available in table</p></div>

              </td>
          </tr>
      @endforelse
  </tbody>

  </table>

@if ($pagination != 1)
  <nav aria-label="Contacts Page Navigation">
      <ul class="pagination pagination-album justify-content-center m-0" id="album-pagination">

      </ul>
  </nav>
@endif

<input type="hidden" name="page" id="page-product" value="{{ $page }}">
<input type="hidden" name="paginations" id="paginations-album" value="{{ $pagination }}">

    <script>
$(document).ready(function() {

    $('.delete-book').on('click', async function (e) {      
        swal({
            title: "Are you sure want to delete this books?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var id = $(this).data("id")
                var page = $("#page-product").val();
                var title = $("#title").val()
                var author = $("#author").val()
                var genre = $("#genre").val()
                var isbn = $("#isbn").val()
                var published = $("#published").val()
                var publisher = $("#publisher").val()
                $("span#loader").show();

                $.ajax({
                    url: SITE_URL + "/book-delete",
                    type: "GET",
                    data: {id: id, page: page, title: title, author : author, genre : genre, isbn: isbn, published : published, publisher: publisher},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "html",
                    success: function(reportHtmlContent) {
                        $("#show-books").html("");
                        $("#show-books").html(reportHtmlContent);
                        toastr.success("book delete Successfully!");
                    },
                    error: function(data){
                        var errors = $.parseJSON(data.responseText);
                        toastr.error(errors.message);
                    }
                });
                $("span#loader").hide();
                
            } else {
                $("span#loader").hide();
                errorObj = $.parseJSON(error.responseText);
                console.log(errorObj);
                toastr.error("Somethings went wrong!");
            }
        });
       
    });

});

(function($){
function getPageList(totalPagesAlbum, page, maxLength) {
if (maxLength < 5) throw "maxLength must be at least 5";
function range(start, end) {
    return Array.from(Array(end - start + 1), (_, i) => i + start);
}
var sideWidth = maxLength < 9 ? 1 : 2;
var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
if (totalPagesAlbum <= maxLength) {
    // no breaks in list
    return range(1, totalPagesAlbum);
}
if (page <= maxLength - sideWidth - 1 - rightWidth) {
    // no break on left of page
    return range(1, maxLength - sideWidth - 1)
    .concat([0])
    .concat(range(totalPagesAlbum - sideWidth + 1, totalPagesAlbum));
}
if (page >= totalPagesAlbum - sideWidth - 1 - rightWidth) {
    // no break on right of page
    return range(1, sideWidth)
    .concat([0])
    .concat(
        range(totalPagesAlbum - sideWidth - 1 - rightWidth - leftWidth, totalPagesAlbum)
    );
}
// Breaks on both sides
return range(1, sideWidth)
    .concat([0])
    .concat(range(page - leftWidth, page + rightWidth))
    .concat([0])
    .concat(range(totalPagesAlbum - sideWidth + 1, totalPagesAlbum));
}
$(function() {
// Number of items and limits the number of items per page
var numberOfItemsAlbum = $("#paginations-album").val();
var currentPageAlbum = parseInt($('#page-product').val());
var limitPerPageAlbum = 1;
var paginationSizeAlbum = 7;
var totalPagesAlbum = Math.ceil(numberOfItemsAlbum / limitPerPageAlbum);
var nextPageAlbum = parseInt(currentPageAlbum + 1);
var previousPageAlbum = parseInt(currentPageAlbum - 1);

function showPage(whichPage) {
    if (whichPage < 1 || whichPage > totalPagesAlbum) return false;
    currentPageAlbum = whichPage;
    // Replace the navigation items (not prev/next):
    $("#album-pagination li").slice(1, -1).remove();
    getPageList(totalPagesAlbum, currentPageAlbum, paginationSizeAlbum).forEach(item => {
        // console.log(currentPageAlbum,'currentPageAlbum');
        // console.log(item,'item');
    $("<li>")
        .addClass(
        "page-item " +
            (item ? "current-page " : "") +
            (item === currentPageAlbum ? "active " : "")
        )
        .append(
        $("<a>")
            .addClass("page-link")
            .attr({

                "data-toggle": "pagination-tab",
                "data-page": item
            })
            .text(item || "...")
            .prop('disabled', (item ? " " : true))
        )
        .insertBefore("#next-page-product");
    });
    return true;
}
// Include the prev/next buttons:
$("#album-pagination").append(
    $("<li>").addClass("page-item").attr({ id: "previous-page-product" }).append(
    $("<a>")
        .addClass("page-link")
        .attr({
        "data-toggle": "pagination-tab",
        "data-page":  ((previousPageAlbum == 0 )? 1 : previousPageAlbum)
        })
        .text("Prev")
    ),
    $("<li>").addClass("page-item").attr({ id: "next-page-product" }).append(
    $("<a>")
        .addClass("page-link")
        .attr({
        "data-toggle": "pagination-tab",
        "data-page": ((currentPageAlbum == totalPagesAlbum )? currentPageAlbum : nextPageAlbum)
        })
        .text("Next")
    )
);
// Show the page links
showPage(currentPageAlbum);
// Use event delegation, as these items are recreated later
$(
    document
).on("click", "#album-pagination li.current-page:not(.active)", function() {
    return showPage(+$(this).text());
});
$("#next-page-product").on("click", function() {
    return showPage(nextPageAlbum);
});
$("#previous-page-product").on("click", function() {
    return showPage(previousPageAlbum);
});
$("#album-pagination").on("click", function() {
    $("html,body").animate({ scrollTop: 0 }, 0);
});
$('a[data-toggle="pagination-tab"]').on('click', async function (e) {
    var activeTab = e.target // activated tab
    // get the category
    var page = $(activeTab).data('page');
    var title = $("#title").val()
    var author = $("#author").val()
    var genre = $("#genre").val()
    var isbn = $("#isbn").val()
    var published = $("#published").val()
    var publisher = $("#publisher").val()
    $("span#loader").show();
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
    $("span#loader").hide();
});
});

})(jQuery);
    $(document).ready(function() {
        var showChar = 36;
        var paginatLi = 5;
        var ellipsestext = "...";
        var moretext = "read more";
        var lesstext = "less";
        $('.more').each(function() {
            var content = $(this).html();
            if(content.length > showChar) {
                var c = content.substr(0, showChar);
                var h = content.substr(showChar-0, content.length - showChar);
                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
                $(this).html(html);
            }
        });
        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
    </script>

