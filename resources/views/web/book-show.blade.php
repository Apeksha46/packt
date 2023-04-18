<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-10 offset-md-1">
            <!-- Default box -->
            <div class="card card-solid">

                <div class="card-header p-2">
                    <h3 class="card-title">Book Detail</h3>
                    <div style="float:right">
                        <a href="javascript:void(0)" class="btn btn-book-store" onclick="showContentpage({{$page}})"><i class="fa fa-arrow-left"></i> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="d-inline-block d-sm-none">{{$book->title}}</h3>
                            <div class="col-12">
                                <img src="{{ $book->image}}" class="product-image" alt="Product Image"
                                    style="height: 600px;">
                            </div>

                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3">{{$book->title}}</h3>
                            <p>{{ $book->description}}</p>

                            <hr>

                            <strong> Author</strong>

                            <p class="text-muted">
                                {{$book->author}}
                            </p>

                            <hr>

                            <strong> Genre</strong>

                            <p class="text-muted">{{$book->genre}}</p>

                            <hr>

                            <strong>Isbn</strong>

                            <p class="text-muted">
                                {{$book->isbn}}
                            </p>

                            <hr>

                            <strong>Published</strong>

                            <p class="text-muted">{{$book->published}}</p>
                            <hr>
                            <strong> Publisher</strong>

                            <p class="text-muted">{{ $book->publisher}}</p>

                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
<!-- /.card -->
