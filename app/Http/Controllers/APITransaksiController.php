<?php

namespace App\Http\Controllers;

use App\APITransaksi;
use App\MasterBarang;
use Illuminate\Http\Request;

class APITransaksiController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

        $request->validate([
            'kkeranjang_k' => 'required|string',
            'kbarang_k' => 'required|string',
        ]);

        $master_barang = MasterBarang::where('kode_b', $request->kbarang_k)->first();

        if ($master_barang != null) {
            $apiTransaksi = new APITransaksi;
            $apiTransaksi->kkeranjang_k = $request->kkeranjang_k;
            $apiTransaksi->kbarang_k = $request->kbarang_k;
            $apiTransaksi->qty_k = 1;
            $apiTransaksi->harga_k = $master_barang->harga_b;
            $apiTransaksi->is_status = 0 ;
            $apiTransaksi->save();

            return response()->json([
                'data' => $apiTransaksi,
                'message' => "Data Berhasil Ditambahkan"
            ]);
        } else {
            return response()->json([
                'data' => null,
                'message' => "Barang tidak ditemukan"
            ]);
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\APITransaksi  $apiTransaksi
    * @return \Illuminate\Http\Response
    */
    public function show(APITransaksi $apiTransaksi)
    {
        return $apiTransaksi->all();
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\APITransaksi  $apiTransaksi
    * @return \Illuminate\Http\Response
    */
    public function edit(APITransaksi $apiTransaksi)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\APITransaksi  $apiTransaksi
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, APITransaksi $apiTransaksi)
    {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\APITransaksi  $apiTransaksi
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request)
    {
        $data = APITransaksi::find($request->id);

        if($data->delete()){
            return response()->json([
                'message' => 'Data Berhasil Di Hapus'
            ]);
        }else{
            return response()->json([
                'message' => 'Data Gagal Dihapus'
            ]);
        }


    }
}
