<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("build/assets/app.css") }}" rel="stylesheet">
</head>
<body class="login">
<div class="login_wrapper">
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title d-flex justify-content-center">
                    <img src="{{ asset("images/logo.png") }}" alt="..." width="200">
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post"
                          action="{{ route('login') }}">
                        @csrf
                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                <input type="text" name="username" class="form-control has-feedback-left"
                                       placeholder="Username">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12  form-group has-feedback">
                                <input type="password" name="password" class="form-control has-feedback-left"
                                       placeholder="*************">
                                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-12 col-sm-12 d-flex justify-content-center">
                                <input type="submit"
                                       style="background-color: rgb(22, 104, 122);
                                                  color: rgb(192, 202, 211);"
                                       name="admin"
                                       class="btn"
                                       value="Login as Admin">
                                <input type="submit"
                                       style="background-color: rgb(121,146,168);
                                                  color: rgb(11, 52, 61);"
                                       name="cashier"
                                       class="btn"
                                       value="Login as Cashier">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
