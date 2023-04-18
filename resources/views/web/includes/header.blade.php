<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Book Store</title>

    <!---- New Url For Book Store    -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Theme style -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/book-store.css') }}">
    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('public/plugins/toastr/toastr.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- End Url For Book Store    -->

    <script type="text/javascript">
        const SITE_URL = "{{ URL::to('/') }}";
    </script>

</head>

<body class="book-store-web hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed dark-mode">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-danger bg-dark bg-dark navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="">
                        <img src="{{ asset('public/dist/img/logo-new.svg') }}" alt="Book Store" class="nav-link">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Book List</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="" data-toggle="dropdown" href="#">
                        {{-- <img src="{{ Auth::user()->profilePic }}" alt="BookStore Logo" class="brand-image img-circle"
                            style="width: 40px; height: 40px;"> --}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                        {{-- <span class="dropdown-item dropdown-header" style="background-color: #20c997;">
                            <img src="{{ Auth::user()->profilePic }}" alt="BookStore Logo"
                                class="brand-image img-circle profile-user-img">
                        </span> --}}

                        <div class="dropdown-divider"></div>
                        <div class="row" style="padding: 10px;">
                            <div class="col-md-12">
                                <a href="javascript:void(0)" type="button" class="btn btn-book-store float-right"
                                    data-toggle="modal" data-target="#adminLogout">Logout</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <div class="modal fade" id="adminLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Admin Logout</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to logout.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-book-store" data-dismiss="modal">No</button>
                        <a href="{{ route('logout') }}" class="btn btn-book-store">Yes</a>
                    </div>
                </div>
            </div>
        </div>
