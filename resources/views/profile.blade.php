@extends('layout.app')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Profile Information</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-3 col-sm-3  profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" style="border-radius:10px">
                            </div>
                        </div>
                        <h3>{{ auth()->user()->name }}</h3>

{{--                        <ul class="list-unstyled user_data">--}}
{{--                            <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA--}}
{{--                            </li>--}}

{{--                            <li>--}}
{{--                                <i class="fa fa-user user-profile-icon"></i> Cashier--}}
{{--                            </li>--}}

{{--                            <li class="m-top-xs">--}}
{{--                                <i class="fa fa-external-link user-profile-icon"></i>--}}
{{--                                <a href="#" target="_blank">www.facebook.com</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                    <div class="col-md-9 col-sm-9  profile_left">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('profile.update') }}" method="post">
                            @csrf
                            @method('head')
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"><strong><i class="fa fa-user"></i> Profile Information</strong></label>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" >Full Name <span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-4 ">
                                    <input type="text" name="name" required="required" class="form-control" placeholder="First Name" value="{{ old('name', auth()->user()->name) }}">
                                </div>
{{--                                <div class="col-md-4 col-sm-4 ">--}}
{{--                                    <input type="text" required="required" class="form-control" placeholder="Last Name">--}}
{{--                                </div>--}}
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input class="form-control" type="text" name="email" placeholder="support@gmail.com" value="{{ old('email', auth()->user()->email) }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Contact</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input class="form-control" type="text" name="phone" placeholder="09486087489" value="{{ old('phone', auth()->user()->phone) }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"><strong><i class="fa fa-key"></i> Account Information</strong></label>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input class="form-control" type="text" name="username" placeholder="Username" value="{{ old('username', auth()->user()->username) }}">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                                <div class="col-md-8 col-sm-8 ">
                                    <input class="form-control" type="password" name="password" placeholder="************">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
{{--                                    <a href="{{ route('') }}" class="btn btn-primary" type="button">Cancel</a>--}}
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
