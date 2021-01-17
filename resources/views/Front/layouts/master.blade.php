<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('front.layouts.Inc.head')

</head>
<body>
@include('front.layouts.Inc.header')
<!-- Header End====================================================================== -->

@include('front.layouts.Inc.slider')


<div id="mainBody">
    <div class="container">
        <div class="row">
            <!-- Sidebar ================================================== -->
        @include('front.layouts.Inc.category-sidebar')
        <!-- Sidebar end=============================================== -->
            @yield('content')

        </div>
    </div>
</div>


<!-- Footer ================================================================== -->
@include('front.layouts.Inc.footer')
@include('front.layouts.Inc.footer-script')


</body>
</html>