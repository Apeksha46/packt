<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-10 offset-md-1">
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row">
                            <div class="col-md-3 form-group">
                                <div class="input-group input-group-lg">
                                    <input class="form-control filter-page-books"
                                        type="search"  placeholder="Type to search by title"
                                        name="title"
                                        id="title"
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                <div class="input-group input-group-lg">
                                    <input class="form-control filter-page-books"
                                        type="search"  placeholder="Type to search by author"
                                        name="author"
                                        id="author"
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                <div class="input-group input-group-lg">
                                    <input class="form-control filter-page-books"
                                        type="search"  placeholder="Type to search by genre"
                                        name="genre"
                                        id="genre"
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                <div class="input-group input-group-lg">
                                    <input class="form-control filter-page-books"
                                        type="search"  placeholder="Type to search by isbn"
                                        name="isbn"
                                        id="isbn"
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                <div class="input-group input-group-lg">
                                    <input class="form-control filter-page-books"
                                        type="search"  placeholder="Type to search by publisher"
                                        name="publisher"
                                        id="publisher"
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                <div class="input-group input-group-lg">
                                    <input class="form-control filter-page-books"
                                        type="search"  placeholder="Select date"
                                        name="published"
                                        id="published-page"
                                        autocomplete="off"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 form-group">
                                <div class="input-group input-group-lg">
                                    <a href="{{ route('home') }}" class="btn btn-danger">Reset</a>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-10 offset-md-1" id="show-page">

        </div>
    </div>
</div>
<script>
    getAllBook({{$page}});

    $(document).ready(function() {

        $('.filter-page-books').on('input', async function (e) {
            var page = 1;
            var title = $("#title").val()
            var author = $("#author").val()
            var genre = $("#genre").val()
            var isbn = $("#isbn").val()
            var published = $("#published-page").val()
            var publisher = $("#publisher").val()
            $("span#loader").show();
            await getAllBook(page, title, author, genre, isbn, published, publisher);
            $("span#loader").hide();
        });

        $('#published-page').on('change', async function (e) {
            var page = 1;
            var title = $("#title").val()
            var author = $("#author").val()
            var genre = $("#genre").val()
            var isbn = $("#isbn").val()
            var published = $("#published-page").val()
            var publisher = $("#publisher").val()
            $("span#loader").show();
            await getAllBook(page, title, author, genre, isbn, published, publisher);
            $("span#loader").hide();
        });

        $('#published-page').datepicker(Object.assign({}, pickerOptsGeneral, {
            changeMonth: true,
            endDate:new Date(),
            changeYear: true
        }));

    });
</script>
