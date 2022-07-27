@extends('base.edit')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tambah Master Barang</h4>
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
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <p>Tambah Master Barang</p>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Master Barang</div>
                        <div class="card-category">Masukan Data Dengan Benar!</a></div>
                    </div>
                    <form id="exampleValidation" action="{{ route('masterBarang.simpanMasterBarang')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kode Barang <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="kode_b" name="kode_b" placeholder="Enter Kode Barang" required>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Barang <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nama_b" name="nama_b" placeholder="Enter Nama Barang" required>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="berat_b" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Berat Barang <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="berat_b" name="berat_b" placeholder="Enter Berat Barang" required>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="qty" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">QTY <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter QTY" required>
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="berat_b" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Harga <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" id="harga_b" name="harga_b" placeholder="Enter Harga" required>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-solid"></div>
                            <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview img-circle" width="100" height="100" src="http://placehold.it/100x100" alt="preview">
                                        <input type="file" class="form-control form-control-file" id="img_b" name="img_b" accept="image/*" required >
                                        <label for="img_b" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload a Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col ml-auto">
                                    <input class="btn btn-success" type="submit" id="alert_demo_3_3" value="Validate">
                                    <a class="btn btn-danger" href="/masterBarang">Cancel</a>
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
