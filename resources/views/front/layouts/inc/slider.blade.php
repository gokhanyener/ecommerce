<div id="carouselBlk">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">

            @foreach($sliders as $key=> $slider)
                <div class="item @if($key === 0) active @else '' @endif ">
                    <div class="container">
                        <a href="{{route('product-detail',$slider->product->slug)}}">

                            <img style="width:100%" src="http://via.placeholder.com/1170x480?text=Slider Image"
                                 alt="special offers"/>
                        </a>
                        <div class="carousel-caption">
                            <h4>{{$slider->product->title}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
