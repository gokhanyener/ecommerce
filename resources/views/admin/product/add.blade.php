@extends('admin.layouts.master')
@section('title',trans('global.product.title_singular') .' ' .trans('global.add'))
@section('content')

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-4">
                            <h4 class="card-title">{{trans('global.product.title_singular') .' ' .trans('global.add')}}</h4>
                        </div>

                    </div>


                    <div class="row">
                        <div class="table-sorter-wrapper col-lg-12 table-responsive">

                            @include('admin.errors.errors')
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">{{trans('global.new')}} {{trans('global.product.title_singular')}}</h4>
                                        <form class="forms-sample" method="post"
                                              action="{{route('admin.product.create')}}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="ex">{{trans('global.product.title_singular')}}
                                                            {{trans('global.name')}}
                                                        </label>
                                                        <input type="text" name="title" class="form-control"
                                                               id="ex"
                                                               placeholder="{{trans('global.product.title_singular')}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            for="exampleInputPassword1">{{trans('global.slug')}}</label>
                                                        <input type="text" name="slug" class="form-control"
                                                               id="exampleInputPassword1" placeholder="Slug">
                                                    </div>

                                                    <div class="form-group">
                                                        <label
                                                            for="description">{{trans('global.description')}}</label>
                                                        <textarea name="description" class="form-control"
                                                                  id="description"
                                                                  placeholder="{{trans('global.description')}}"></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>{{trans('global.category.title')}}</label>
                                                        <select name="up_id[]" class="js-example-basic-multiple"
                                                                multiple="multiple" style="width:100%">
                                                            <option value="">{{trans('global.product.base')}}</option>
                                                            @foreach($categories as $category)
                                                                <option
                                                                    value="{{$category->id}}">{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="ex">{{trans('global.product.price')}}
                                                        </label>
                                                        <input type="text" name="price" class="form-control"
                                                               id="ex" placeholder="{{trans('global.product.price')}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="form-radio">
                                                            <label class="form-check-label">
                                                                <input type="hidden" name="featured_product" value="0">
                                                                <input type="checkbox" class="form-check-input"
                                                                       name="featured_product"
                                                                       id="optionsRadios1" value="1">
                                                                {{trans('global.product.featured')}}
                                                                <i class="input-helper"></i></label>
                                                        </div>
                                                        <div class="form-radio">
                                                            <label class="form-check-label">

                                                                <input type="hidden" name="slider_product" value="0">

                                                                <input type="checkbox" class="form-check-input"
                                                                       name="slider_product"
                                                                       id="optionsRadios1" value="1">
                                                                {{trans('global.product.slider')}}
                                                                <i class="input-helper"></i></label>
                                                        </div>

                                                        <div class="form-radio">
                                                            <label class="form-check-label">
                                                                <input type="hidden" name="latest_product" value="0">
                                                                <input type="checkbox" class="form-check-input"
                                                                       name="latest_product"
                                                                       id="optionsRadios1" value="1">
                                                                {{trans('global.product.latest')}}
                                                                <i class="input-helper"></i></label>
                                                        </div>

                                                        <div class="form-radio">
                                                            <label class="form-check-label">
                                                                <input type="hidden" name="opportunity_product"
                                                                       value="0">
                                                                <input type="checkbox" class="form-check-input"
                                                                       name="opportunity_product"
                                                                       id="optionsRadios1" value="1">
                                                                {{trans('global.product.opportunity')}}
                                                                <i class="input-helper"></i></label>
                                                        </div>


                                                    </div>

                                                    <div class="form-group">
                                                        <label for="ex">{{trans('global.upload',['attr'=>'Resim'])}}
                                                        </label>
                                                        <input type="file" name="image" class="form-control"
                                                               id="ex" placeholder="{{trans('global.uploads')}}">
                                                    </div>

                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-success mr-2">{{trans('global.submit')}}</button>
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


