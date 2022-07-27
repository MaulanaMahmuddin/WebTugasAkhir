<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterKeranjang extends Model
{
    protected $table='master_keranjang';

    protected $fillable=[
        'kode_keranjang','nama_keranjang'
    ];

}
