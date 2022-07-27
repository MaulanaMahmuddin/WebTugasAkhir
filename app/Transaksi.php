<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='transaksi';

    protected $fillable=[
        'kkeranjang_k','kbarang_k', 'qty_k', 'harga_k', 'is_status'
    ];
}
