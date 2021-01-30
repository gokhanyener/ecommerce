@extends('front.layouts.master')
@section('title',$category->title)
@section('content')

    <div class="span9">

        <h4>{{$category->title}} </h4>

        <ul class="thumbnails">

            @foreach($products as $product)

                <li class="span3">
                    <div class="thumbnail">
                        <a href="{{route('product-detail',$product->slug)}}">
                            <img src="http://via.placeholder.com/160x160?text=productName" alt=""/></a>
                        <div class="caption">
                            <h5>{{$product->title}}</h5>
                            <p>
                                {{$product->description}}
                            </p>

                            <h4 style="text-align:center">
                                <a class="btn" href="{{route('product-detail',$product->slug)}}"> <i
                                        class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                        class="icon-shopping-cart"></i></a>
                                <a class="btn btn-primary" href="#">
                                    ${{$product->price}}
                                </a>
                            </h4>
                        </div>
                    </div>
                </li>

            @endforeach

        </ul>

    </div>
@endsection

