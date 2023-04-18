@extends('admin.layouts.default')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Book</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header p-2">
                                <h3 class="card-title">Add Book</h3>
                                <div style="float:right">
                                    <a href="{{ route('books.index') }}" class="btn btn-book-store"><i class="fa fa-arrow-left"></i> Back</a>

                                </div>

                            </div><!-- /.card-header -->
                            <div class="loader-container">
                            <span id="loader" style="display: none;"></span>
                            </div>
                            <div class="card-body">
                            <form method="post"
                                id="add-book-form" enctype="multipart/form-data" action="javascript:void(0)" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label>Title</label>
                                            <input class="form-control"
                                                type="text" placeholder="Enter Title"
                                                name="title"
                                                value="{{ old('title', null) }}"
                                                >
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label>Author</label>
                                            <input class="form-control"
                                                type="text" placeholder="Enter Author"
                                                name="author"
                                                value="{{ old('author', null) }}"
                                                >
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label>Genre</label>
                                            <input class="form-control"
                                                type="text" placeholder="Enter Genre"
                                                name="genre"
                                                value="{{ old('genre', null) }}"
                                                >
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label>Isbn</label>
                                            <input class="form-control"
                                                type="text" placeholder="Enter Isbn"
                                                name="isbn"
                                                value="{{ old('isbn', null) }}"
                                                >
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label>Published</label>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input class="form-control"
                                                type="text" placeholder="Enter Published"
                                                name="published"
                                                id="date"
                                                value="{{ old('published', null) }}"
                                                autocomplete="off"
                                                >
                                                <div class="input-group-append">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label>Publisher</label>
                                            <input class="form-control"
                                                type="text" placeholder="Enter Publisher"
                                                name="publisher"
                                                value="{{ old('publisher', null) }}"
                                                >
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6">
                                            <label>Description</label>
                                            <textarea class="form-control"
                                                type="text"
                                                name="description"
                                                rows="8"
                                                >{{old('description') ?? null}}</textarea>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6">

                                            <div class="row">
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label>Image</label>
                                                    <input class="form-control file-upload-input"
                                                        type="file"
                                                        name="image"
                                                        id="image"
                                                        type='file' onchange="readURL(this);" accept="image/*"
                                                        aria-describedby="fileHelp"
                                                        >
                                                </div>
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <div class="product-image-thumb" style="display: none">
                                                        <img src="" class="file-upload-image img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-book-store" type="submit">Submit</button>
                                </div>
                            </form>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                        <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@stop
