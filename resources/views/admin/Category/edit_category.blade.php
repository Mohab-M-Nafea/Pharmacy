@extends('layout.app')

@section('content-title-class', 'fa fa-list')
@section('content-title', "Edit $category->category_name Category")

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Category Information</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                          action="{{ route('admin.category.update',  $category->category_id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="category_name" class="form-control has-feedback-left"
                                       placeholder="Category Name"
                                       value="{{ old('category_name', $category->category_name) }}" required>
                                <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                                @error('category_name')
                                <div class="text-danger font-weight-bold">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="category_description" class="form-control has-feedback-left"
                                       placeholder="Category Description"
                                       value="{{ old('category_description', $category->category_description) }}"
                                       required>
                                <span class="fa fa-map form-control-feedback left" aria-hidden="true"></span>
                                @error('category_description')
                                <div class="text-danger font-weight-bold">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
