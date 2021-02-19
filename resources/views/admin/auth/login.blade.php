<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/radiant/jquery/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Sep 2018 08:33:52 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
            <div class="row d-flex align-items-stretch">
                <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                    <div class="slide-content bg-1">
                    </div>
                </div>
                <div class="col-12 col-md-8 h-100 bg-white">
                    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">

                        <form action="{{route('admin.login')}}"  method="post">
                            @csrf
                            <h3 class="mr-auto">Hello! let's get started</h3>
                            <p class="mb-5 mr-auto">Enter your details below.</p>
                            @include('admin.errors.errors')
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn">SIGN IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="/admin/vendors/js/vendor.bundle.base.js"></script>
<script src="/admin/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/admin/js/off-canvas.js"></script>
<script src="/admin/js/hoverable-collapse.js"></script>
<script src="/admin/js/misc.js"></script>
<script src="/admin/js/settings.js"></script>
<script src="/admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/radiant/jquery/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Sep 2018 08:33:52 GMT -->
</html>