@extends('layout.app')

@section('content-title-class', 'fa fa-user')
@section('content-title', 'Cashier')

@section('page-content')
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>List of Cashiers</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <a href="{{ route('admin.cashier.add') }}" class="btn btn-sm btn-info text-white"><i
                                class="fa fa-user-plus"></i> Add Cashier</a>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Username</th>
{{--                            <th>Account Status</th>--}}
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                                @foreach($cashiers as $cashier)
                        <tr>
                            <td>{{ $cashier->name }}</td>
                            <td>{{ $cashier->phone }}</td>
                            <td>{{ $cashier->email }}</td>
                            <td>{{ $cashier->username }}</td>
{{--                            <td><span class="btn btn-sm btn-success text-white">active</span></td>--}}
                            <td class="d-flex">
                                <a href="{{ route('admin.cashier.edit', $cashier->user_id) }}" class="btn btn-sm btn-success text-white"><i class="fa fa-edit"></i> edit</a>
                                <form action="{{ route('admin.cashier.delete', $cashier->user_id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger text-white"><i class="fa fa-trash"></i> delete</button>
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
