@extends('admin.layouts.master')
@section('title',trans('global.product.title') .' '. trans('global.update'))
@section('content')

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-4">
                            <h4 class="card-title"> {{trans('global.product.title') .' '. trans('global.update')}}
                                {{trans('global.names',['attr'=>'Gokhan'])}}
                            </h4>
                        </div>

                    </div>
                    <div class="row">
                        <div class="table-sorter-wrapper col-lg-12 table-responsive">

                            @include('admin.errors.errors')
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">{{trans('global.update')}}</h4>
                                        <form class="forms-sample" method="post"
                                              action="{{route('admin.product.update',$list->id)}}"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label
                                                            for="ex">{{trans('global.product.title_singular')}}</label>
                                                        <input type="text" name="title" class="form-control"
                                                               id="ex"
                                                               placeholder="{{trans('global.product.title_singular')}}"
                                                               value="{{old('title',$list->title)}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label
                                                            for="exampleInputPassword1">{{trans('global.slug')}}</label>
                                                        <input type="text" name="slug" class="form-control"
                                                               id="exampleInputPassword1"
                                                               placeholder="{{trans('global.slug')}}"
                                                               value="{{old('slug',$list->slug)}}">
                                                        <input type="hidden" name="old_slug" value="{{$list->slug}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            for="description">{{trans('global.description')}}</label>
                                                        <textarea name="description" class="form-control"
                                                                  id="description"
                                                                  placeholder="{{trans('global.description')}}">{{old('slug',$list->description)}}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ex">{{trans('global.product.price')}}
                                                        </label>
                                                        <input type="text" name="price" class="form-control"
                                                               id="ex" placeholder="{{trans('global.product.price')}}"
                                                               value="{{old('slug',$list->price)}}">
                                                    </div>

                                                    <div class="form-group">

                                                        @if ($list->productDetail->image)
                                                            <img src="{{asset($list->productDetail->image)}}"
                                                                 width="200" alt="">
                                                        @else
                                                            <img src="https://via.placeholder.com/100" alt="">
                                                        @endif

                                                        <label for="ex">{{trans('global.upload',['attr'=>'Resim'])}}
                                                        </label>
                                                        <input type="file" name="image" class="form-control"
                                                               id="ex" placeholder="{{trans('global.uploads')}}">

                                                        <input type="hidden" name="old_image"
                                                               value="{{$list->productDetail->image}}">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="form-radio">
                                                            <label class="form-check-label">
                                                                <input type="hidden" name="featured_product" value="0">
                                                                <input type="checkbox" class="form-check-input"
                                                                       name="featured_product"
                                                                       id="optionsRadios1" value="1"
                                                                    {{old('featured_product',$list->productDetail->featured_product) ? 'checked':'' }}
                                                                >
                                                                {{trans('global.product.featured')}}
                                                                <i class="input-helper"></i></label>
                                                        </div>
                                                        <div class="form-radio">
                                                            <label class="form-check-label">

                                                                <input type="hidden" name="slider_product" value="0">

                                                                <input type="checkbox" class="form-check-input"
                                                                       name="slider_product"
                                                                       id="optionsRadios1" value="1"
                                                                    {{old('slider_product',$list->productDetail->slider_product) ? 'checked':'' }}>
                                                                {{trans('global.product.slider')}}
                                                                <i class="input-helper"></i></label>
                                                        </div>

                                                        <div class="form-radio">
                                                            <label class="form-check-label">
                                                                <input type="hidden" name="latest_product" value="0">
                                                                <input type="checkbox" class="form-check-input"
                                                                       name="latest_product"
                                                                       id="optionsRadios1" value="1"
                                                                    {{old('latest_product',$list->productDetail->latest_product) ? 'checked':'' }}>
                                                                {{trans('global.product.latest')}}
                                                                <i class="input-helper"></i></label>
                                                        </div>

                                                        <div class="form-radio">
                                                            <label class="form-check-label">
                                                                <input type="hidden" name="opportunity_product"
                                                                       value="0">
                                                                <input type="checkbox" class="form-check-input"
                                                                       name="opportunity_product"
                                                                       id="optionsRadios1" value="1"
                                                                    {{old('opportunity_product',$list->productDetail->opportunity_product) ? 'checked':'' }}>
                                                                {{trans('global.product.opportunity')}}
                                                                <i class="input-helper"></i></label>
                                                        </div>


                                                    </div>
                                                    <div class="form-group">
                                                        <label>{{trans('global.category.title')}}</label>
                                                        <select name="up_id[]" class="js-example-basic-multiple"
                                                                multiple="multiple" style="width:100%">
                                                            <option value="">{{trans('global.product.base')}}</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}"
                                                                    {{collect($selectedCategory)->contains($category->id)  ? 'selected' : ''}}
                                                                >{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                </div>
                                            </div>


                                            {{--                 <input type="hidden" name="id" value="{{$list->id}}">--}}
                                            <button type="submit"
                                                    class="btn btn-success mr-2">{{trans('global.update')}}</button>
                                            <button class="btn btn-light">{{trans('global.cancel')}}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script src="/admin/js/select2.js"></script>
@endsection


