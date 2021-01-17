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
@include('front.layouts.inc.header')
<!-- Header End====================================================================== -->

@include('front.layouts.inc.slider')


@yield('content')

<!-- Footer ================================================================== -->

@include('front.layouts.inc.footer')

@include('front.layouts.inc.footer-script')


</body>
</html>

