@extends('layout.app')

@section('content-title-class', 'fa fa-desktop')
@section('content-title', 'Sales')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>List of Sales</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Sales No.</th>
                            <th>Date</th>
                            <th>Total Amount</th>
                            <th>Cashier</th>
                            <th>View Details</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($sales as $sale)--}}
                            <tr>
                                <td>SLS-101-21</td>
                                <td>Nov 6, 2021</td>
                                <td>Php 20,000.00</td>
                                <td>John Kelly</td>
                                <td>
                                    <a href="sales-detail.php" class="btn btn-sm btn-info text-white"><i
                                            class="fa fa-eye"></i> view details</a>
                                </td>
                            </tr>
{{--                        @endforeach--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
