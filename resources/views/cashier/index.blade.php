@extends('layout.app')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="tile_count d-grid justify-content-center text-center">
                            <div class="col-md-6 col-sm-6  tile_stats_count">
                                <span class="count_top"><i class="fa fa-money"></i> Number of Sales</span>
                                <div class="count">6,567</div>
                            </div>
                            <div class="col-md-6 col-sm-6  tile_stats_count">
                                <span class="count_top"><i class="fa fa-dollar"></i> Total Sales</span>
                                <div class="count">80,000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Sales Amount</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6  ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Top 10 Selling Items</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    {{--                                    <tr>--}}
                                    {{--                                        <td>Biogesic</td>--}}
                                    {{--                                        <td>30</td>--}}
                                    {{--                                        <td>Php7.00</td>--}}
                                    {{--                                        <td>Php210.00</td>--}}
                                    {{--                                    </tr>--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
