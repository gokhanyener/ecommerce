<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',config('app.name'))</title>
</head>
<body>

@include('Front.layouts.Inc.navbar')
<hr>
@yield('content')
<hr>


@include('front.layouts.Inc.footer',['year'=>date('Y')])

</body>
</html>
