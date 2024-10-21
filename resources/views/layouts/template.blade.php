<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Resbult - Repair Your Racket</title>
    <!-- plugins:css -->
    {{-- <link rel="stylesheet" href="{{ url('/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('assets/css/vertical-layout-light/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor.css') }}"> --}}

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    {{-- <link href="{{ url('/assets/vendors/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ url('/assets/vendors/sweetalert2/dist/sweetalert2.all.min.js') }}"></script> --}}

</head>

<body>

  
        <!-- partial:partials/_navbar.html -->
        <!-- partial -->
       
            <!-- partial:partials/_settings-panel.html -->

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->

            @include('layouts.header')

            <!-- partial -->
           
            @yield('content')
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('layouts.footer')
            <!-- partial -->
              
        

    <!-- container-scroller -->
    <script src="{{ url('/assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <script src="{{ url('/assets/js/modernizr.js') }}"></script>
    <script src="{{ url('/assets/js/plugins.js') }}"></script>
    <script src="{{ url('/assets/js/script.js') }}"></script>
   
    <!-- plugins:js -->
    {{-- <script src="{{ url('/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ url('/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ url('/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ url('/assets/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('/assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('/assets/js/template.js') }}"></script>

    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ url('/assets/js/dashboard.js') }}"></script>
    <script src="{{ url('/assets/js/Chart.roundedBarCharts.js') }}"></script>
    <script src="{{ url('/assets/js/chart.js') }}"></script>
    <script src="{{ url('/assets/js/view-image.js?v2.1.0') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ url('/assets/js/jquery.bootstrap-growl.js') }}"></script> --}}

        <!-- End custom js for this page-->


        <script type="text/javascript">
            new DataTable('#example');
        </script>
</body>

</html>