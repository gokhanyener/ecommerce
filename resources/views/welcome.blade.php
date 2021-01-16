<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Ticaret Gokhan</title>
</head>
<body class="antialiased">
@php
    $country = 'Türkiye';
@endphp
Ad : {{$name}} <br>
Soyad : {{$lastname}} <br>
Ülke : {{$country}}
<hr>
Merhaba {{$name .'-'.$lastname}}, ve ülkesi {{$country}} .

<hr>

@if ($name === 'Gokhan')
    Hoşgeldin {{$name}} Hocam ...
@elseif($name1 === 'Ömer')
    Hoşgeldin {{$name1}}
@else
    Hoşgeldin ...
@endif

<hr>

@switch($name)
    @case('Gokhan')
    Hoşgeldin Gokhan
    @case('Ömer')
    Hoşgeldin Ömer
    @default
    Hoşgeldin Hasan
@endswitch

<hr>

@for ($i = 0; $i < 15; $i++)
    Döngü index : {{$i}} <br>
@endfor

<hr>

{{--@php($i=0)--}}
@php
    $i=0
@endphp

@while($i<15)
    Döngü index: {{$i}} <br>
    @php $i++ @endphp
@endwhile
















</body>
</html>
