@extends('base.edit')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tambah Master Keranjang</h4>
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
                    <p>Master Keranjang</p>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <p>Tambah Master Keranjang</p>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Master Keranjang</div>
                        <div class="card-category">Masukan Data Dengan Benar!</a></div>
                    </div>
                    <form id="exampleValidation" action="{{ route('masterKeranjang.simpanMasterKeranjang')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kode Keranjang <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="kode_keranjang" name="kode_keranjang" placeholder="Enter Kode Keranjang" required>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Keranjang <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nama_keranjang" name="nama_keranjang" placeholder="Enter Nama Keranjang" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col ml-auto">
                                    <input class="btn btn-success" type="submit" id="alert_demo_3_3" value="Validate">
                                    <a class="btn btn-danger" href="/masterKeranjang">Cancel</a>
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
