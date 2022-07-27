<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\MasterBarang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function index(Transaksi $transaksi){
        $transaksi = Transaksi::all();
        return view('data.transaksi', ['transaksi'=>$transaksi]);
    }

    public function editTransaksi(){
        return view('edit.transaksi');
    }
    public function inputTransaksi(){
        return view('input.inputTransaksi');
    }

    public function simpanTransaksi(request $request){

        $masterBarang = MasterBarang::where('kode_b', $request->kbarang_k)->first();

        if($masterBarang != null){
            $transaksi = new Transaksi;
            $transaksi->kkeranjang_k = $request->kkeranjang_k;
            $transaksi->kbarang_k = $request->kbarang_k;
            $transaksi->qty_k = 1;
            $transaksi->harga_k = $masterBarang->harga_b;
            $transaksi->is_status = 0;
            $transaksi->save();

            Alert::success('Berhasil', 'Barang Ditambahkan');
            return redirect()->route('transaksi');

        }else{
            Alert::error('Gagal', 'Barang Tidak Tersedia');
            return redirect()->route('transaksi');
        }


        // $transaksi->berat_k = $request->berat_k;

        // $file = $request->file('img_k');
        // $filename = $file->getClientOriginalName();
        // $request->img_k->move(public_path('img/img_foto'),$filename);
        // $transaksi->img_k = $filename;




    }

    public function destroyTransaksi($id){
        Transaksi::find($id)->delete();
        Alert::success('Berhasil', 'Data Anda Berhasil Dihapus');
        return redirect()->route('transaksi');
    }
}
