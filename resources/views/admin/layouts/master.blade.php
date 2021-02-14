<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title',config('app.name'))</title>

    @include('admin.layouts.inc.head')
</head>

<body class="sidebar-fixed">
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
@include('admin.layouts.inc.navbar')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
    @include('admin.layouts.inc.template-skin')
    <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
    @include('admin.layouts.inc.sidebar')
    <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
           {{--     <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="highlight-icon bg-light mr-3">
                                        <i class="mdi mdi-cube text-success icon-lg"></i>
                                    </div>
                                    <div class="wrapper">
                                        <p class="card-text mb-0">Revenue</p>
                                        <div class="fluid-container">
                                            <h3 class="card-title mb-0">$65,650</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="highlight-icon bg-light mr-3">
                                        <i class="mdi mdi-briefcase-check text-primary icon-lg"></i>
                                    </div>
                                    <div class="wrapper">
                                        <p class="card-text mb-0">Orders</p>
                                        <div class="fluid-container">
                                            <h3 class="card-title mb-0">$45,650</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="highlight-icon bg-light mr-3">
                                        <i class="mdi mdi-account-multiple text-danger icon-lg"></i>
                                    </div>
                                    <div class="wrapper">
                                        <p class="card-text mb-0">Returns</p>
                                        <div class="fluid-container">
                                            <h3 class="card-title mb-0">$12,357</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="highlight-icon bg-light mr-3">
                                        <i class="mdi mdi-airballoon text-info icon-lg"></i>
                                    </div>
                                    <div class="wrapper">
                                        <p class="card-text mb-0">Sales</p>
                                        <div class="fluid-container">
                                            <h3 class="card-title mb-0">$45,650</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}

                @yield('content')

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
        @include('admin.layouts.inc.footer')
        <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@include('admin.layouts.inc.footer-script')
@yield('footer')
</body>
</html>
