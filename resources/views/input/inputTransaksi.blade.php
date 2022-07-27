@extends('base.edit')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tambah Transaksi</h4>
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
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <p>Tambah Transaksi</p>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Transaksi</div>
                        <div class="card-category">Masukan Data Dengan Benar!</a></div>
                    </div>
                    <form id="exampleValidation" action="{{ route('transaksi.simpanTransaksi')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kode Keranjang <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="kkeranjang_k" name="kkeranjang_k" placeholder="Enter Kode Barang" required>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kode Barang <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="kbarang_k" name="kbarang_k" placeholder="Enter Nama Barang" required>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group form-show-validation row">
                            <label for="qty" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">QTY <span class="required-label">*</span></label>
                            <div class="col-lg-4 col-md-9 col-sm-8">
                                <input type="text" class="form-control" id="qty_k" name="qty_k" placeholder="Enter QTY" required>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group form-show-validation row">
                            <label for="berat_b" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Harga <span class="required-label">*</span></label>
                            <div class="col-lg-4 col-md-9 col-sm-8">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" id="harga_k" name="harga_k" placeholder="Enter Harga" required>
                                </div>
                            </div>
                        </div> --}}
                        <div class="card-action">
                            <div class="row">
                                <div class="col ml-auto">
                                    <input class="btn btn-success" type="submit" id="alert_demo_3_3" value="Validate">
                                    <a class="btn btn-danger" href="/transaksi">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
