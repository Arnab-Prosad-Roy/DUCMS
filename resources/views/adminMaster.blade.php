<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content=""/>
  <title>@yield('title')</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('public/backends/assets/images/favicon.ico')}}" type="image/x-icon"/>
  <!-- simplebar CSS-->
  <link href="{{asset('public/backends/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('public/backends/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>

  <!--Data Tables -->
  <link href="{{asset('public/backends/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('public/backends/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <!-- animate CSS-->
  <link href="{{asset('public/backends/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('public/backends/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('public/backends/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('public/backends/assets/css/app-style.css')}}" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
}
</style>
</head>
<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   @include('admin_side.sidebar')
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
   @include('admin_side.header')
<!--End topbar header-->

<div class="clearfix"></div>  
<div class="content-wrapper">
    <div class="container-fluid">
	                     <!-- mainContent -->
                        @yield('mainContent')
                        <!-- mainContent -->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
  <!--End content-wrapper-->

   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
  <!--Start footer-->
  <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Rocker Admin
        </div>
      </div>
    </footer>
  <!--End footer-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/backends/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/js/bootstrap.min.js')}}"></script>
  
  <!-- simplebar js -->
  <script src="{{asset('public/backends/assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('public/backends/assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('public/backends/assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('public/backends/assets/js/app-script.js')}}"></script>

  <!--Data Tables js-->
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('public/backends/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>

  @stack('scripts')
</body>
</html>
