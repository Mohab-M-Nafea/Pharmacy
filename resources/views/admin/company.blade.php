@extends('layout.app')

@section('content-title-class', 'fa fa-cog')
@section('content-title', 'Company Settings')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>System Configuration</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Company Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" required="required" class="form-control" placeholder="Pharmacy Management System">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" >Address <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control " placeholder="Napico Manggahan, Pasig City"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" placeholder="support@gmail.com">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Contact</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="text" placeholder="09486087489">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Logo</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
