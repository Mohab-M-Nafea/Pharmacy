@extends('layout.app')

@section('content-title-class', 'fa fa-medkit')
@section('content-title', 'Add Medicine')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Medicine Information</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                          action="{{ route('admin.medicine.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <input type="text" name="medicine_code" class="form-control has-feedback-left"
                                       placeholder="Medicine Code" value="{{ old('medicine_code') }}" required>
                                <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                                @error('medicine_code')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <select name="category" class="form-control" required>
                                    <option disabled selected>
                                        Select Category
                                    </option>
                                    @foreach($categories as $category)
                                        <option
                                            value="{{ $category->category_id }}"
                                            @if(old('category') === $category->category_id) selected @endif
                                        >
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <select name="supplier" class="form-control" required>
                                    <option disabled selected>
                                        Select Supplier
                                    </option>
                                    @foreach($suppliers as $supplier)
                                        <option
                                            value="{{ $supplier->supplier_id }}"
                                            @if(old('supplier') === $supplier->supplier_id) selected @endif
                                        >
                                            {{ $supplier->supplier_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('supplier')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br><br><br>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" name="medicine_name" class="form-control has-feedback-left"
                                       placeholder="Medicine Name" value="{{ old('medicine_name') }}" required>
                                <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                                @error('medicine_name')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br><br><br>
                            <div class="col-md-12 col-sm-12">
                                <textarea name="medicine_description" class="form-control"
                                          placeholder="Medicine Description"
                                          required>{{ old('medicine_description') }}</textarea>
                                @error('medicine_description')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br><br><br><br>

                            <div class="col-md-4 col-sm-4">
                                <input type="text" name="medicine_generic_name" class="form-control has-feedback-left"
                                       placeholder="Generic Name" value="{{ old('medicine_generic_name') }}">
                                <span class="fa fa-medkit form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <input type="text" name="medicine_purchase_price" class="form-control has-feedback-left"
                                       placeholder="Purchase Price" value="{{ old('medicine_purchase_price') }}"
                                       required>
                                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                @error('medicine_purchase_price')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <input type="text" name="medicine_retail_price" class="form-control has-feedback-left"
                                       placeholder="Retail Price" value="{{ old('medicine_retail_price') }}" required>
                                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                @error('medicine_retail_price')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br><br><br>
                            <div class="col-md-4 col-sm-4">
                                <input type="text" name="medicine_quantity" class="form-control has-feedback-left"
                                       placeholder="Quantity" value="{{ old('medicine_quantity') }}" required>
                                <span class="fa fa-hourglass-o form-control-feedback left" aria-hidden="true"></span>
                                @error('medicine_quantity')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <input type="text" name="medicine_unit" class="form-control has-feedback-left"
                                       placeholder="Unit" value="{{ old('medicine_unit') }}" required>
                                <span class="fa fa-balance-scale form-control-feedback left" aria-hidden="true"></span>
                                @error('medicine_unit')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <input type="date" name="medicine_expired_date" class="form-control has-feedback-left"
                                       placeholder="" value="{{ old('medicine_expired_date') }}" required>
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                @error('medicine_expired_date')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br><br><br>
                            <div class="col-md-12 col-sm-12">
                                <input type="file" name="medicine_image" class="form-control has-feedback-left"
                                       placeholder="Medicine Image">
                                <span class="fa fa-image form-control-feedback left" aria-hidden="true"></span>
                                @error('medicine_image')
                                <div class="text-danger font-weight-bold text-center">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <br><br><br>
                            <div class="col-md-12 col-sm-12 ">
                                <a href="{{ route('admin.medicine') }}" role="button" class="btn btn-primary"
                                   type="button">Cancel</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
