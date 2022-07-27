@extends('base_kasir.indexKasir')

@section('kasir')
<div class="container">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Kasir</h2>
                    <h5 class="text-white op-7 mb-2">PT. IndoMoon Nusantara</h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-white btn-border btn-round mr-2">Pilih Keranjang</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5 row row-card-grid container-lg">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width:10%;" class="text-center">No</td>
                                <th style="width:50%;">Nama Barang</th>
                                <th style="width:10%;" class="text-center">PCS</th>
                                <th class="text-center">Harga</th>
                            </tr>
                        </thead>
                    </table>
                    <div class="cardd">
                        <table class="table">
                            <tbody>
                                <tr style="height: 100px;">
                                    <td style="width:10%" class="text-center">
                                        <h4> 1 </h4>
                                    </td>
                                    <td style="width:50%">
                                        <div class="col-stats">
                                            <h4 class="mb-1 fw-bold">Citatos</h4>
                                            <small class="text-muted">100 g</small>
                                        </div>
                                    </td>
                                    <td style="width:10%;"class="text-center">
                                        <h4>1</h4>
                                    </td>
                                    <td class="text-center">Rp 10.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="card card-profile">
                <div class="card-header" style="background-image: url('{{asset('img/blogpost.jpg')}}')">
                    <div class="profile-picture">
                        <div class="avatar avatar-xl">
                            <img src="{{asset('img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-profile text-center">
                        <h2 class="fw-bold mb-2">Fauzan Rabbani</h2>
                        <div class="name">Kasir 1</div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="view-profile">
                        <div class="row user-stats pb-4">
                            <div class="col">
                                <h3 class="fw-bold">Total Harga</h3>
                            </div>
                            <div class="col">
                                <h3 class="fw-bold">Rp 19.000</h3>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-block">Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection