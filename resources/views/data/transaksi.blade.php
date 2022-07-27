@extends('base.index')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
                <h4 class="page-title">Transaksi</h4>
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
                        <p>Transaksi</p>
                    </li>
                </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">List Transaksi</h4>
                            <a class="btn btn-primary btn-round ml-auto" href="/transaksi/inputTransaksi">
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
                                        <th style="width: 20%; text-align:center">Kode Keranjang</th>
                                        <th style="width: 20%; text-align:center">Kode Barang</th>
                                        {{-- <th style="width: 10%; text-align:center">Berat Barang</th> --}}
                                        <th style="width: 10%; text-align:center">QTY</th>
                                        <th style="width: 15%; text-align:center">Harga</th>
                                        {{-- <th style="widht: 25%; text-align:center">Gambar Barang</th> --}}
                                        <th style="widht: 10%; text-align:center">Status Barang</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th style="width: 5%; text-align:center">No</th>
                                        <th style="width: 20%; text-align:center">Kode Keranjang</th>
                                        <th style="width: 20%; text-align:center">Kode Barang</th>
                                        {{-- <th style="width: 10%; text-align:center">Berat Barang</th> --}}
                                        <th style="width: 10%; text-align:center">QTY</th>
                                        <th style="width: 15%; text-align:center">Harga</th>
                                        {{-- <th style="widht: 25%; text-align:center">Gambar Barang</th> --}}
                                        <th style="widht: 10%; text-align:center">Status Barang</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($transaksi as $index=>$data)
                                    <tr>
                                        <td style="text-align: center">{{ $index+1 }}</td>
                                        <td>{{ $data->kkeranjang_k }}</td>
                                        <td>{{ $data->kbarang_k }}</td>
                                        <td style="text-align: center">{{ $data->qty_k }}</td>
                                        <td style="text-align:center">{{ $data->harga_k }}</td>
                                        {{-- <td style="text-align: center"></td>
                                        <td style="text-align: center">
                                            <img class="img-upload-preview img-circle" width="50" height="50" src="" alt="preview">
                                        </td> --}}
                                        @if ($data->is_status === 0)
                                            <td style="text-align: center"><button class="btn btn-warning btn-round ml-auto">Belum Dibayar</button></td>
                                        @else
                                            <td style="text-align: center"><button class="btn btn-success btn-round ml-auto">Sudah Dibayar</button></td>
                                        @endif
                                        <td style=" text-align:center">
                                            <div class="form-button-action">
                                                <a type="button" data-toggle="tooltip" title="" href="/transaksi/destroyTransaksi/{{$data->id}}" class="btn btn-link btn-danger">
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
