<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APITransaksi extends Model
{
    protected $table='transaksi';
    protected $fillable=[
        'kkeranjang_k','kbarang_k', 'qty_k', 'harga_k', 'is_status'
    ];
}
