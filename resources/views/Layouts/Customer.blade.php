<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>D'Suniart | Dashboard</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

   {{-- Datatables --}}
   <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
   <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
   <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Tempusdominus Bootstrap 4 -->
   <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
   <!-- iCheck -->
   <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
   <!-- JQVMap -->
   <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
   <!-- Theme style -->
   <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
   <!-- overlayScrollbars -->
   <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
   <!-- summernote -->
   <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
   <!-- select2 -->
   <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
   <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
      integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

   @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center bg-white">
         <img src="{{ asset('Logo/Spinner.svg') }}" alt="Logo">
      </div>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
         <div class="container">
            <a class="navbar-brand" href="#">D'Suniart</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Produk <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Penyewaan</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Keranjang</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Sejarah</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">About</a>
                  </li>
               </ul>
               <div class="dropdown my-2">
                  <a class="text-white dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                     aria-expanded="false">
                     Agus Widiatmika
                  </a>

                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                  </div>
               </div>
               {{-- <form class="form-inline ">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form> --}}
            </div>
         </div>
      </nav>
      <!-- /.navbar -->

      <div class="container">

         @yield('customer-page')

      </div><!-- /.container-fluid -->

   </div>
   <!-- ./wrapper -->

   <!-- jQuery -->
   <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
   <!-- jQuery UI 1.11.4 -->
   <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

   {{-- Sweet alert 2 --}}
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   {{-- Sweet alert 2 --}}

   <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
      integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

   <!-- DataTables  & Plugins -->
   <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
   <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
   <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
   <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
   <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
   <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

   <script>
      $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- ChartJS -->
   <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
   <!-- Sparkline -->
   <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
   <!-- JQVMap -->
   <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
   <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
   <!-- jQuery Knob Chart -->
   <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
   <!-- daterangepicker -->
   <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
   <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
   <!-- Summernote -->
   <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
   <!-- overlayScrollbars -->
   <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('dist/js/adminlte.js') }}"></script>
   <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

   @stack('scripts')
</body>

</html>