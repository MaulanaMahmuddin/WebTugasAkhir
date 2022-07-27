@extends('base.index')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
                <h4 class="page-title">Super Admin</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <div>
                            <i class="flaticon-home"></i>
                        </div>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <p>Super Admin</p>
                    </li>
                </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">List Data Super Admin</h4>
                            <a class="btn btn-primary btn-round ml-auto" href="/superadmin/inputAdmin">
                                <i class="fa fa-plus"></i>
                                Add Data
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover" >
                                <thead>
                                    <tr>
                                        <th style="width: 5%; text-align:center">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th style="width: 20%;  text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th style="width: 5%; text-align:center">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th style="width: 20%;  text-align:center">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($user as $index=>$data)
                                        <tr>
                                            <td style="text-align: center">1</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td style=" text-align:center">
                                                <div class="form-button-action">
                                                    <a type="button" data-toggle="tooltip" title="" href="/superadmin/{{$data->id}}/editAdmin" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                        <a type="button" data-toggle="tooltip" href="/superadmin/destroy/{{$data->id}}" title="" id="alert_demo_7"class="btn btn-link btn-danger">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
