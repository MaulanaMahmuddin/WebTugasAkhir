<?php

namespace App\Http\Controllers;

use App\MasterBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class MasterBarangController extends Controller
{
    public function index(MasterBarang $masterBarang){
        $masterBarang = MasterBarang::all();
        return view('data.masterBarang', ['masterBarang'=>$masterBarang]);
    }

    public function editMasterBarang($id){
        $masterBarang = MasterBarang::find($id);
        return view('edit.editMasterBarang',['masterBarang'=>$masterBarang]);
    }
    public function inputMasterBarang(){
        return view('input.inputMasterBarang');
    }

    public function updateMasterBarang(request $request, $id){
        $masterBarang = MasterBarang::find($id);
        $masterBarang->kode_b = $request->kode_b;
        $masterBarang->nama_b = $request->nama_b;
        $masterBarang->berat_b = $request->berat_b;
        $masterBarang->qty = $request->qty;
        $masterBarang->harga_b = $request->harga_b;
        if($request->img_b){
            $file = $request->file('img_b');
            $filename = $file->getClientOriginalName();
            $request->img_b->move(public_path('img/foto'),$filename);
            $masterBarang->img_b = $filename;
        }
        $masterBarang->save();

        Alert::success('Berhasil', 'Data Anda Berhasil Diupdate');
        return redirect()->route('masterBarang');
    }

    public function simpanMasterBarang(request $request){
        $masterBarang = new MasterBarang;
        $masterBarang->kode_b = $request->kode_b;
        $masterBarang->nama_b = $request->nama_b;
        $masterBarang->berat_b = $request->berat_b;
        $masterBarang->qty = $request->qty;
        $masterBarang->harga_b = $request->harga_b;

        $file = $request->file('img_b');
        $filename = $file->getClientOriginalName();
        $request->img_b->move(public_path('img/img_foto'),$filename);
        $masterBarang->img_b = $filename;

        $masterBarang->save();

        Alert::success('Berhasil', 'Data Anda Berhasil Disimpan');
        return redirect()->route('masterBarang');
    }

    public function destroyMasterBarang($id){
        MasterBarang::find($id)->delete();
        Alert::success('Berhasil', 'Data Anda Berhasil Dihapus');
        return redirect()->route('masterBarang');
    }
}
