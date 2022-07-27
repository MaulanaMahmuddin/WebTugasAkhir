<?php

namespace App\Http\Controllers;

use App\MasterKeranjang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MasterKeranjangController extends Controller
{
    public function index(MasterKeranjang $masterKeranjang){
        $masterKeranjang = MasterKeranjang::all();
        return view('data.masterKeranjang', ['masterKeranjang'=>$masterKeranjang]);
    }

    public function editMasterKeranjang($id){
        $masterKeranjang = MasterKeranjang::find($id);
        return view('edit.editMasterKeranjang',['masterKeranjang'=>$masterKeranjang]);
    }

    public function inputMasterKeranjang(){
        return view('input.inputMasterKeranjang');
    }
    public function updateMasterKeranjang(request $request, $id){
        $masterKeranjang = MasterKeranjang::find($id);
        $masterKeranjang->kode_keranjang = $request->kode_keranjang;
        $masterKeranjang->nama_keranjang = $request->nama_keranjang;

        $masterKeranjang->save();

        Alert::success('Berhasil', 'Data Anda Berhasil Diupdate');
        return redirect()->route('masterKeranjang');
    }

    public function simpanMasterKeranjang(request $request){
        $masterKeranjang = new MasterKeranjang();
        $masterKeranjang->kode_keranjang = $request->kode_keranjang;
        $masterKeranjang->nama_keranjang = $request->nama_keranjang;

        $masterKeranjang->save();

        Alert::success('Berhasil', 'Data Anda Berhasil Disimpan');
        return redirect()->route('masterKeranjang');
    }

    public function destroyMasterKeranjang($id){
        MasterKeranjang::find($id)->delete();
        Alert::success('Berhasil', 'Data Anda Berhasil Dihapus');
        return redirect()->route('masterKeranjang');
    }
}
