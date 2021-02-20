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
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">{{trans('global.new')}} {{trans('global.product.title_singular')}}</h4>
                                        <form class="forms-sample" method="post"
                                              action="{{route('admin.product.create')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="ex">{{trans('global.product.title_singular')}}
                                                    {{trans('global.name')}}
                                                </label>
                                                <input type="text" name="title" class="form-control"
                                                       id="ex" placeholder="{{trans('global.product.title_singular')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">{{trans('global.slug')}}</label>
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
                                                <label for="ex">{{trans('global.product.price')}}
                                                </label>
                                                <input type="text" name="price" class="form-control"
                                                       id="ex" placeholder="{{trans('global.product.price')}}">
                                            </div>



                             {{--               <div class="form-group">
                                                <label for="exampleSelectPrimary">Categories</label>
                                                <select name="up_id" class="form-control border-primary"
                                                        id="exampleSelectPrimary">
                                                    <option value="">Base Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>--}}

                                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
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


