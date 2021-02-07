<div id="sidebar" class="span3">

    <ul id="sideManu" class="nav nav-tabs nav-stacked">
        @foreach($categories as $category)
            @if($category->up_id === NULL  )
                <li class="subMenu"><a href="{{route('category',$category->slug)}}">{{$category->title}}</a>
                    @endif
                    <ul>
                        @foreach ($category->children as $children)
                            <li>
                                <a class="active" href="{{route('category',$children->slug)}}">
                                    <i class="icon-chevron-right"></i>
                                    {{ $children->title }}
                                </a></li>

                        @endforeach
                    </ul>
                </li>

                @endforeach
    </ul>


    <br/>


    @foreach($opportunities as $opportunity)
        <div class="thumbnail">
            <img src="http://via.placeholder.com/160x160?text=Opportunity Image" alt="Bootshop panasonoc New camera"/>
            <div class="caption">
                <h5>{{$opportunity->product->title}}</h5>
                <h4 style="text-align:center"><a class="btn"
                                                 href="{{route('product-detail',$opportunity->product->slug)}}"> <i
                            class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
                            class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
                                                                   href="#">${{$opportunity->product->price}}</a></h4>
            </div>
        </div>
        <br/>
    @endforeach

    <br/>


    <div class="thumbnail">
        <img src="{{asset('themes/images/payment_methods.png')}}" title="Bootshop Payment Methods"
             alt="Payments Methods">
        <div class="caption">
            <h5>Payment Methods</h5>
        </div>
    </div>
</div>
