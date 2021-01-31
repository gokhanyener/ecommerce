@extends('front.layouts.master-main')
@section('title','Anasayfa')
@section('content')
    <div class="span9">
        <div class="well well-small">
            <h4>Featured Products <small class="pull-right">{{$featuresTotal}} featured products</small></h4>
            <div class="row-fluid">
                <div id="featured" class="carousel slide">
                    <div class="carousel-inner">


                            <div class="item active">
                                <ul class="thumbnails">

                                    @foreach($features as $feature)
                                    <li class="span3">
                                        <div class="thumbnail">
                                            <i class="tag"></i>
                                            <a href="{{route('product-detail',$feature->product->slug)}}">
                                                <img src="http://via.placeholder.com/160x160?text=Feature Image"
                                                                                alt=""></a>
                                            <div class="caption">
                                                <h5>{{$feature->product->title}}</h5>
                                                <h4><a class="btn" href="{{route('product-detail',$feature->product->slug)}}">VIEW</a> <span
                                                        class="pull-right">${{$feature->product->price}}</span></h4>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>



                    </div>
                    <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                </div>
            </div>
        </div>
        <h4>Latest Products </h4>
        <ul class="thumbnails">

            @foreach($latest as $item)
            <li class="span3">
                <div class="thumbnail">
                    <a href="{{route('product-detail',$item->product->slug)}}"><img src="http://via.placeholder.com/160x160?text=Latest Image" alt=""/></a>
                    <div class="caption">
                        <h5>{{$item->product->title}}</h5>
                        <p>
                            {{ Str::limit($item->product->description, 20) }}
                        </p>

                        <h4 style="text-align:center"><a class="btn" href="{{route('product-detail',$item->product->slug)}}"> <i
                                    class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                                    class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">${{$item->product->price}}</a>
                        </h4>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

    </div>
@endsection

