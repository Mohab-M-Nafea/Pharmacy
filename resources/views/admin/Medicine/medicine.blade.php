@extends('layout.app')

@section('content-title-class', 'fa fa-medkit')
@section('content-title', 'Medicine')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>List of Medicines</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="{{ route('admin.medicine.add') }}" class="btn btn-sm btn-info text-white"><i
                                class="fa fa-plus"></i>
                            Add Medicine</a>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Medicine Code</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Purchase Price</th>
                            <th>Retail Price</th>
                            <th>Quantity</th>
                            <th>Unit</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($medicines as $medicine)
                            <tr>
                                <td>{{ $medicine->medicine_code }}</td>
                                <td>
                                    @if(!is_null($medicine->medicine_image))
                                    <img src="{{ asset('images/' . $medicine->medicine_image) }}" width="50" style="border-radius:10px"
                                         alt="Image">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>{{ $medicine->medicine_name }}</td>
                                <td>{{ $medicine->medicine_purchase_price }}</td>
                                <td>{{ $medicine->medicine_retail_price }}</td>
                                <td>{{ $medicine->medicine_quantity }}</td>
                                <td>{{ $medicine->medicine_unit }}</td>
                                <td class="d-flex">
                                    {{--                                    <a class="btn btn-sm btn-info text-white"><i class="fa fa-eye"></i> details</a>--}}
                                    <a href="{{ route('admin.medicine.edit', $medicine->medicine_id) }}"
                                       class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                                    <form action="{{ route('admin.medicine.delete', $medicine->medicine_id) }}"
                                          method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger text-white"><i
                                                class="fa fa-trash"></i> delete
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
