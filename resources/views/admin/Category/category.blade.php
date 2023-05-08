@extends('layout.app')

@section('content-title-class', 'fa fa-medkit')
@section('content-title', 'Medicine Category')

@section('page-content')
    <div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>List of Medicine Category</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="{{ route('admin.category.add') }}" class="btn btn-sm btn-info text-white"><i
                                class="fa fa-plus"></i>
                            Add Category</a>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.category.edit', $category->category_id) }}"
                                       class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                                    <form action="{{ route('admin.category.delete', $category->category_id) }}"
                                          method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i>
                                            delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
