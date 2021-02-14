@extends('admin.layouts.master')
@section('title','Kategoriler')
@section('content')

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-4">
                            <h4 class="card-title">Categories</h4>
                        </div>
                        <div class="col-4">
                            <form action="{{route('admin.category')}}" method="post">
                                @csrf
                                <div class="form-group d-flex">
                                    <input type="text" name="search" class="form-control" placeholder="Search Here"
                                           value="{{old('search')}}">
                                    <button type="submit" class="btn btn-primary ml-3">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <a href="{{route('admin.category.new')}}" type="submit" class="btn btn-danger ml-3 float-right">Add</a>
                        </div>

                    </div>




                    <div class="row">
                        <div class="table-sorter-wrapper col-lg-12 table-responsive">
                            <table id="sortable-table-2" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="sortStyle">Title<i class="mdi mdi-chevron-down"></i></th>
                                    <th class="sortStyle">Slug<i class="mdi mdi-chevron-down"></i></th>
                                    <th class="sortStyle float-right" >Action<i class="mdi mdi-chevron-down"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $key => $item)

                                    <tr>
                                        <td>{{$key +1 }}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->slug}}</td>
                                        <td class="float-right">

                                            <a href="{{route('admin.category.edit',$item->id)}}" type="button" class="btn btn-outline-primary btn-fw">
                                                <i class="mdi mdi-file-document"></i>Edit</a>
                                            <button type="button" class="btn btn-sm btn-outline-danger btn-fw"><i class="mdi mdi-alert-outline"></i>Delete</button>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br>
                            {!! $list->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer')
    <script src="/admin/js/jq.tablesort.js"></script>
    <script src="/admin/js/tablesorter.js"></script>
@endsection

