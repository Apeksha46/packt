
<!-- /.content-wrapper -->
<footer class="main-footer dark-mode" style="height: 100px">

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-10 offset-md-1" id="show-page">
                <strong>&copy; {{ date("2022") }}-{{ date('Y', strtotime('+1 year')) }} <a href="#" style="color:#fd7e14;">Packt Book Store</a>.</strong>
                    All rights reserved.

            </div>
        </div>
    </div>


</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="{{ asset('public/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('public/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('public/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('public/plugins/jquery-validation/additional-methods.min.js') }}"></script>


<!-- Admin App -->
<script src="{{ asset('public/dist/js/book-store.js') }}"></script>
<script src="{{ asset('public/dist/js/custom.js') }}"></script>
<script src="{{ asset('public/dist/js/datepickers.js') }}"></script>
<script src="{{ asset('public/dist/js/validation.js') }}"></script>

<!-- Page specific script -->

<script>
@if(Session::has('success'))
      toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
      toastr.error("{{ session('error') }}");
  @endif

</script>
</body>
</html>
