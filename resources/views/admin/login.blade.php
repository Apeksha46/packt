<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Packt Book Store </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
  {{-- y --}}
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/dist/css/book-store.css') }}">



</head>
<body class="hold-transition login-page">

<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <center><img src="{{ asset('public/dist/img/logo-new.svg') }}" alt="Book Store" class="nav-link"></center>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Admin Login</p>

      @if (\Session::has('error'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('error') !!}</li>
            </ul>
        </div>
      @endif

      <form action="{{ route('showLogin') }}" method="post" id="loginForm">
        @csrf
        <div class="input-group form-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
          

        <div class="input-group form-group mb-3">
          <input type="password" class="form-control" id="upass"  placeholder="Password" name="password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="toggleBtn" onclick="toggelPassword()" class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-book-store">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</body>

<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-validation/jquery.validate.min.js') }}"></>
<script src="{{ asset('public/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script src="{{ asset('public/validation.js') }}"></script>
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 5000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>
<script>
  function toggelPassword() {
      var upass = document.getElementById('upass');
      var toggleBtn = document.getElementById('toggleBtn');
      $('#toggleBtn').removeClass("fas fa-lock");
      $('#toggleBtn').addClass("fas fa-unlock");
      if (upass.type == "password") {
          upass.type = "text";
          toggleBtn.value = "Hide password";
      } else {
          upass.type = "Password";
          toggleBtn.value = "Show the password";
          $('#toggleBtn').removeClass("fas fa-unlock");
          $('#toggleBtn').addClass("fas fa-lock");
      }
  }

</script>
</html>
