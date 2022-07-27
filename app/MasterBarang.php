<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBarang extends Model
{
    protected $table='master_barang';

    protected $fillable=[
        'kode_b','nama_b', 'berat_b', 'qty', 'harga_b', 'img_b'
    ];

}
