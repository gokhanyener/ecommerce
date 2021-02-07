@extends('front.layouts.master')
@section('title')
@section('content')

    <div class="span9">

        @if(count($products) === 0)
            <div class="alert alert-primary" role="alert">
                Arama sonucuda herhangi bir kayıt bulunamadı.
            </div>
        @endif
        @if(count($products) !== 0)
            <div class="row">
                <div class="col-12">
                    <form class="form-horizontal span6">
                        <div class="control-group">
                            <label class="control-label alignL">Sort By </label>
                            <select onchange="location = this.value;">
                                <option value="?sorting=ASC">A - Z</option>
                                <option value="?sorting=DESC">Z - A</option>
                                <option value="?sorting=Latest">Latest Product</option>
                                <option value="?sorting=Featured">Featured Product</option>
                            </select>

                        </div>
                    </form>
                </div>
            </div>
        @endif
        <ul class="thumbnails">

            @foreach($products as $product)

                <li class="span3">
                    <div class="thumbnail">
                        <a href="{{route('product-detail',$product->slug)}}">
                            <img src="http://via.placeholder.com/160x160?text=productName" alt=""/></a>
                        <div class="caption">
                            <h5>{{$product->title}}</h5>
                            <p>
                                @php echo \Illuminate\Support\Str::limit($product->description,100) @endphp
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

        {!! $products->appends(['search'=>old('search')])->links() !!}
{{--            {{ $products->onEachSide(5)->links() }}--}}



    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>

@endsection

