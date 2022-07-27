@extends('base.index')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
                <h4 class="page-title">Master Barang</h4>
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
                        <p>Master Barang</p>
                    </li>
                </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">List Master Barang</h4>
                            <a class="btn btn-primary btn-round ml-auto" href="/masterBarang/inputMasterBarang">
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
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Berat Barang</th>
                                        <th style="width: 5%; text-align:center">QTY</th>
                                        <th>Harga</th>
                                        <th style="text-align:center">Gambar Barang</th>
                                        <th style="width: 20%;  text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th style="width: 5%; text-align:center">No</th>
                                        <th style="width: 20%;">Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Berat Barang</th>
                                        <th style="width: 5%; text-align:center">QTY</th>
                                        <th>Harga</th>
                                        <th style="text-align:center">Gambar Barang</th>
                                        <th style="width: 20%;  text-align:center">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($masterBarang as $index=>$data)
                                    <tr>
                                        <td style="text-align: center">{{ $index+1 }}</td>
                                        <td>{{ $data->kode_b }}</td>
                                        <td>{{ $data->nama_b }}</td>
                                        <td>{{ $data->berat_b }}</td>
                                        <td style="text-align:center">{{ $data->qty }}</td>
                                        <td>{{ $data->harga_b }}</td>
                                        <td style="text-align:center">
                                           <img class="img-upload-preview img-circle" width="50" height="50" src="{{ asset('img/foto/'.$data->img_b)}}" alt="preview">
                                        </td>
                                        <td style=" text-align:center">
                                            <div class="form-button-action">
                                                <a type="button" data-toggle="tooltip" title="" href="/masterBarang/{{$data->id}}/editMasterBarang" class="btn btn-link btn-primary btn-lg">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a type="button" data-toggle="tooltip" title="" href="/masterBarang/destroyMasterBarang/{{$data->id}}" class="btn btn-link btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </a>
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
