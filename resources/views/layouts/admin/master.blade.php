<!DOCTYPE html>
<html lang="en" data-menu-color="brand">

    <head>
        <meta charset="utf-8" />
        <title>
            @if (isset($title))
                {{ $title }}
            @endif
    
            @if (View::hasSection('title'))
                @yield('title')
            @else
                Page Title
            @endif
        </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

        <!-- Plugins css -->
        <link href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Theme Config Js -->
        <script src="{{ asset('admin/assets/js/head.js') }}"></script>

        <!-- Bootstrap css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- App css -->
        <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Icons css -->
        <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.min.css" rel="stylesheet"> --}}

        <link rel="stylesheet" href="{{ asset('sweetalert/sweetalert2.min.css') }}">
        @stack('styles')
        @vite(['resources/js/app.js'])

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- ========== Menu ========== -->
                @include('layouts.admin.sidebar')
            <!-- ========== Left menu End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- ========== Topbar Start ========== -->
                @include('layouts.admin.header')

                <!-- ========== Topbar End ========== -->

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        

                        @yield('content')

                        <!-- end row-->


                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('layouts.admin.footer')
               

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->


        
        <!-- Vendor js -->
        <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>
        
        <!-- Plugins js-->
        <script src="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        {{-- <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}
        <script src="{{ asset('admin/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{ asset('admin/assets/js/pages/dashboard-1.init.js') }}"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.all.min.js"></script> --}}

        <script src="{{ asset('sweetalert/sweetalert2.all.min.js') }}"></script>
               <!-- custom dmeo js-->
               <script src="{{ asset('admin/assets/js/pages/fontawesome.init.js') }}"></script>
        <script>
            @if(Session::has('success'))
                // alert('success');
                $(document).ready( function () {
                    Swal.fire({
                        position: "bottom-start",
                        icon: "success",
                        title: "{{ session('success') }}",
                        showConfirmButton: false,
                        timer: 2500,
                        toast :true,
                        backdrop : false,
                        timerProgressBar: true,
                        width: '300px',
                        height: '40px',
                        
                        });
                    
                    });    
            @endif
        </script>
        @stack('scripts')
        {{-- @include('sweetalert::alert') --}}


    </body>
</html>