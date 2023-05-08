@extends('layout.app')

@section('content-title-class', 'fa fa-truck')
@section('content-title', 'Supplier')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>List of Suppliers</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="{{ route('admin.supplier.add') }}" class="btn btn-sm btn-info text-white"><i
                                class="fa fa-plus"></i>
                            Add Supplier</a>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Supplier Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Complete Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->supplier_name }}</td>
                                <td>{{ $supplier->supplier_phone }}</td>
                                <td>{{ $supplier->supplier_email }}</td>
                                <td>{{ $supplier->supplier_address }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.supplier.edit', $supplier->supplier_id) }}"
                                       class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                                    <form action="{{ route('admin.supplier.delete', $supplier->supplier_id) }}"
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
