@extends('admin.layouts.master')
@section('title','Category Edit')
@section('content')

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-4">
                            <h4 class="card-title">Category Edit</h4>
                        </div>

                    </div>


                    <div class="row">
                        <div class="table-sorter-wrapper col-lg-12 table-responsive">

                            @include('admin.errors.errors')
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit</h4>
                                        <form class="forms-sample" method="post"
                                              action="{{route('admin.category.update')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="ex">Title</label>
                                                <input type="text" name="title" class="form-control"
                                                       id="ex" placeholder="Title"
                                                       value="{{old('title',$list->title)}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Slug</label>
                                                <input type="text" name="slug" class="form-control"
                                                       id="exampleInputPassword1" placeholder="Slug"
                                                       value="{{old('slug',$list->slug)}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectPrimary">Categories</label>
                                                <select name="up_id" class="form-control border-primary"
                                                        id="exampleSelectPrimary">
                                                    <option value="">Base Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}"
                                                            @php
                                                                if($category->id === $list->up_id){
                                                                            echo 'selected';
                                                                        }
                                                            @endphp
                                                        >{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

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


