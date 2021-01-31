@extends('front.layouts.master')
@section('title',$product->title)
@section('content')
    <div class="span9">
        <ul class="breadcrumb">

            <li><a href="{{route('homepage')}}">Homepage</a> <span class="divider">/</span></li>

            @foreach ($product->categories as $category)
                <li><a href="{{route('category',$category->slug)}}">{{$category->title}}</a> <span class="divider">/</span></li>
            @endforeach

            <li class="active">{{$product->title}}</li>


        </ul>
        <div class="row">
            <div id="gallery" class="span3">
                <a href="/themes/images/products/large/f1.jpg" title="Fujifilm FinePix S2950 Digital Camera">
                    <img src="/themes/images/products/large/3.jpg" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
                </a>
                <div id="differentview" class="moreOptopm carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="/themes/images/products/large/f1.jpg"> <img style="width:29%" src="/themes/images/products/large/f1.jpg" alt=""/></a>
                            <a href="/themes/images/products/large/f2.jpg"> <img style="width:29%" src="/themes/images/products/large/f2.jpg" alt=""/></a>
                            <a href="/themes/images/products/large/f3.jpg" > <img style="width:29%" src="/themes/images/products/large/f3.jpg" alt=""/></a>
                        </div>
                        <div class="item">
                            <a href="/themes/images/products/large/f3.jpg" > <img style="width:29%" src="/themes/images/products/large/f3.jpg" alt=""/></a>
                            <a href="/themes/images/products/large/f1.jpg"> <img style="width:29%" src="/themes/images/products/large/f1.jpg" alt=""/></a>
                            <a href="/themes/images/products/large/f2.jpg"> <img style="width:29%" src="/themes/images/products/large/f2.jpg" alt=""/></a>
                        </div>
                    </div>
                    <!--
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                    -->
                </div>

                <div class="btn-toolbar">
                    <div class="btn-group">
                        <span class="btn"><i class="icon-envelope"></i></span>
                        <span class="btn" ><i class="icon-print"></i></span>
                        <span class="btn" ><i class="icon-zoom-in"></i></span>
                        <span class="btn" ><i class="icon-star"></i></span>
                        <span class="btn" ><i class=" icon-thumbs-up"></i></span>
                        <span class="btn" ><i class="icon-thumbs-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="span6">
                <h3> {{$product->title}} </h3>
                <hr class="soft"/>
                <form class="form-horizontal qtyFrm">
                    <div class="control-group">
                        <label class="control-label"><span>${{$product->price}}</span></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
                        </div>
                    </div>
                </form>

                <hr class="soft"/>

                <hr class="soft clr"/>
                <p>
                   {{$product->description}}
                </p>
                <a class="btn btn-small pull-right" href="#detail">More Details</a>
                <br class="clr"/>
                <a href="#" name="detail"></a>
                <hr class="soft"/>
            </div>


        </div>
    </div>
@endsection
