<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class KasirController extends Controller
{
    public function index(user $user){
        $user = User::where('is_admin', 0)->get();
        return view('data.kasir',['user'=>$user]);
    }

    public function editKasir($id){
        $user = User::find($id);
        return view('edit.editKasir',['user'=>$user]);
    }

    public function inputKasir(){
        return view('input.inputKasir');
    }

    public function updateKasir(request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = 0;
        $user->password = Hash::make($request->password);
        if($request->img){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $request->img->move(public_path('img/foto'),$filename);
            $user->img = $filename;
        }
        $user->save();

        Alert::success('Berhasil', 'Data Anda Berhasil Diupdate');
        return redirect()->route('kasir');
    }

    public function destroyKasir($id){
        User::find($id)->delete();
        Alert::success('Berhasil', 'Data Anda Berhasil Dihapus');
        return redirect()->route('kasir');
    }

    public function simpanKasir(request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = 0;
        $user->password = Hash::make($request->password);

        $file = $request->file('img');
        $filename = $file->getClientOriginalName();
        $request->img->move(public_path('img/foto'),$filename);
        $user->img = $filename;

        $user->save();
        Alert::success('Berhasil', 'Data Anda Berhasil Disimpan');
        return redirect()->route('kasir');
    }
}
