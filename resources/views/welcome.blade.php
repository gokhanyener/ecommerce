<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Ticaret</title>
    </head>
    <body class="antialiased">
      <h1>Hoşgeldiniz</h1>
    <h2>denemee</h2>
    sdasdada
  @for($i=0;$i<15;$i++)
      dongu index : {{$i}} <br>
  @endfor
      <hr>
      @php
      $i =0
      @endphp
      @while($i<15)
          dongu index : {{$i}} <br>
        @php($i++)
      @endwhile


    </body>
</html>
