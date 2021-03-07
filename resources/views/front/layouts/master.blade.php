<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title',config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('front.layouts.inc.head')

</head>
<body>
<div id="app">
@include('front.layouts.inc.header')
<!-- Header End====================================================================== -->

    <div id="mainBody">
        <div class="container">
            <div class="row">
                <!-- Sidebar ================================================== -->

            @if (Request::path() !== 'contact' )
                @include('front.layouts.inc.category-sidebar')
            @endif

            <!-- Sidebar end=============================================== -->
                @yield('content')

            </div>
        </div>
    </div>


    <!-- Footer ================================================================== -->

    @include('front.layouts.inc.footer')

    @include('front.layouts.inc.footer-script')

    @yield('script')
</div>
</body>
</html>

