<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('app.name')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
     <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
     -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->

    <!-- Bootstrap style -->
    @include('front.layouts.inc.head')
</head>
<body>
@include('front.layouts.inc.header')
<!-- Header End====================================================================== -->
@include('front.layouts.inc.slider')


<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
        @include('front.layouts.inc.category-slidebar')
        <!-- Sidebar end=============================================== -->
            @yield('content')
        </div>
    </div>
</div>







<!-- Footer ================================================================== -->
@include('front.layouts.inc.footer')
@include('front.layouts.inc.footer-script')
</body>
</html>

