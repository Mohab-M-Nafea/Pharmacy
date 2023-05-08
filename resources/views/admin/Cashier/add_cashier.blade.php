@extends('layout.app')

@section('content-title-class', 'fa fa-user-plus')
@section('content-title', 'Add Cashier')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cashier Information</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                          action="{{ route('admin.cashier.store') }}" method="post">
                        @csrf
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <label><i class="fa fa-user"></i> Cashier Information</label>
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="name" class="form-control has-feedback-left"
                                       placeholder="Full Name" value="{{ old('name') }}" required>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('name')
                            <div class="text-danger font-weight-bold">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="tel" name="phone" class="form-control has-feedback-left"
                                       placeholder="ex. 09809879797" value="{{ old('phone') }}">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('phone')
                            <div class="text-danger font-weight-bold">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="email" name="email" class="form-control has-feedback-left"
                                       placeholder="ex. supplier@gmail.com" value="{{ old('email') }}" required>
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('email')
                            <div class="text-danger font-weight-bold">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <label><i class="fa fa-key"></i> Account Information</label>
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="username" class="form-control has-feedback-left"
                                       placeholder="Username" value="{{ old('username') }}" required>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('username')
                            <div class="text-danger font-weight-bold">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <input type="text" name="password" class="form-control has-feedback-left"
                                       placeholder="************"
                                       value="{{ old('password', \Illuminate\Support\Str::password(12)) }}" readonly
                                       required>
                                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            @error('password')
                            <div class="text-danger font-weight-bold">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="item form-group">
                            <div class="col-md-8 col-sm-8 offset-md-2">
                                <a href="{{ route('admin.cashier') }}" class="btn btn-primary" type="button">Cancel</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
