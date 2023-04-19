<!-- Default box -->
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row">
            @forelse ($books as $book)
                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">

                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b><a href="javascript:void(0)" class="title-link" onclick="getBookDetail({{$book->id}}, {{$page}})"> {{ $book->title }}</a></b></h2>
                                    <p class="text-muted text-sm"><b>isbn: </b> {{ $book->isbn }}</p>

                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-user"></i></span>Author:
                                            {{ $book->author }}</li>
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-calendar"></i></span> Published:
                                            {{ $book->published }}</li>
                                        <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-book"></i></span> Genre:
                                            {{ $book->genre }}</li>
                                        <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-user"></i></span> Publisher:
                                            {{ $book->publisher }}</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center profile-user-div">
                                    <img src="{{ $book->image }}" alt="user-avatar" class="profile-user-img img-fluid img-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">

                                <a href="javascript:void(0)" class="btn btn-sm btn-primary" style="color: #ededed;" onclick="getBookDetail({{$book->id}}, {{$page}})">
                                     View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr class="no-data-row">
                    <td colspan="9" rowspan="2" align="center">
                        <div class="message"><p>No data available in table</p></div>

                    </td>
                </tr>
            @endforelse

        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        @if ($pagination != 1)
            <nav aria-label="Contacts Page Navigation">
                <ul class="pagination pagination-album justify-content-center m-0" id="album-pagination">

                </ul>
            </nav>
        @endif
    </div>
    <!-- /.card-footer -->
</div>
<!-- /.card -->

<input type="hidden" name="page" id="page-product" value="{{ $page }}">
<input type="hidden" name="paginations" id="paginations-album" value="{{ $pagination }}">

    <script>
$(document).ready(function() {

    $('.delete-book').on('click', async function (e) {

        var id = $(this).data("id")
        var page = $("#page-product").val();
        var title = $("#title").val()
        var author = $("#author").val()
        var genre = $("#genre").val()
        var isbn = $("#isbn").val()
        var published = $("#published").val()
        var publisher = $("#publisher").val()
        $("span#loader").show();
        await deleteProduct(id, page, title, author, genre, isbn, published, publisher);
        $("span#loader").hide();
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
        .insertBefore("#next-page-book");
    });
    return true;
}
// Include the prev/next buttons:
$("#album-pagination").append(
    $("<li>").addClass("page-item").attr({ id: "previous-page-book" }).append(
    $("<a>")
        .addClass("page-link")
        .attr({
        "data-toggle": "pagination-tab",
        "data-page":  ((previousPageAlbum == 0 )? 1 : previousPageAlbum)
        })
        .text("Prev")
    ),
    $("<li>").addClass("page-item").attr({ id: "next-page-book" }).append(
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
$("#next-page-book").on("click", function() {
    return showPage(nextPageAlbum);
});
$("#previous-page-book").on("click", function() {
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
    await getAllBook(page, title, author, genre, isbn, published, publisher);
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
