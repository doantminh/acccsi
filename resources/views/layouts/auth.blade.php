<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from zoyothemes.com/tapeli/html/auth-login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 08:34:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8" />
        <title>Log In | Tapeli - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/admin/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('assets/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{ asset('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-white">
        <!-- Begin page -->
        <div class="account-page">
            <div class="container-fluid p-0">
                <div class="row align-items-center g-0">
                    @yield('content')
    
                    <div class="col-xl-7">
                        <div class="account-page-bg p-md-5 p-4">
                            <div class="text-center">
                                <h3 class="text-dark mb-3 pera-title">Quick, Effective, and Productive With Tapeli Admin Dashboard</h3>
                                <div class="auth-image">
                                    <img src="{{ asset('assets/admin/images/authentication.svg')}}" class="mx-auto img-fluid"  alt="images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- END wrapper -->

        <!-- Vendor -->
        <script src="{{ asset('assets/admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/admin/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{ asset('assets/admin/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/admin/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
        <script src="a{{ asset('ssets/libs/feather-icons/feather.min.js')}}"></script>

        <!-- App js-->
        <script src="{{ asset('assets/admin/js/app.js')}}"></script>
        
    </body>

<!-- Mirrored from zoyothemes.com/tapeli/html/auth-login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jul 2024 08:34:14 GMT -->
</html>