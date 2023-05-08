@extends('layout.app')

@section('content-title-class', 'fa fa-truck')
@section('content-title', 'Add Supplier')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Supplier Information</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('admin.supplier.store') }}" method="post">
                        @csrf
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="supplier_name" class="form-control has-feedback-left" placeholder="Supplier Name" value="{{ old('supplier_name') }}" required>
                                <span class="fa fa-truck form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('supplier_name')
                            <div class="text-danger font-weight-bold text-center">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="supplier_phone" class="form-control has-feedback-left" placeholder="ex. 09809879797" value="{{ old('supplier_phone') }}" required>
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('supplier_phone')
                            <div class="text-danger font-weight-bold text-center">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="supplier_email" class="form-control has-feedback-left" placeholder="ex. supplier@gmail.com" value="{{ old('supplier_email') }}" required>
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('supplier_email')
                            <div class="text-danger font-weight-bold text-center">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="supplier_address" class="form-control has-feedback-left" placeholder="Address" value="{{ old('supplier_address') }}" required>
                                <span class="fa fa-map form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('supplier_address')
                            <div class="text-danger font-weight-bold text-center">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <a href="{{ route('admin.supplier') }}" role="button" class="btn btn-primary" type="button">Cancel</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
