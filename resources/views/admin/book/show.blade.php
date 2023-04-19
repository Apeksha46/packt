@extends('admin.layouts.default')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Book Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{ route('books.index') }}" class="btn btn-book-store"><i class="fa fa-arrow-left"></i> Back</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">{{$book->title}}</h3>
              <div class="col-12">
                <img src="{{ $book->image}}" class="product-image" alt="Product Image">
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
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @stop
