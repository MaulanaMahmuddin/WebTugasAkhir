<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;
use RealRashid\SweetAlert\Facades\Alert;

class SuperadminController extends Controller
{
    public function index(user $user){
        $user = User::where('is_admin', 1)->get();
        return view('data.superadmin',['user'=> $user]);
    }

    public function editAdmin($id){
        $user = User::find($id);
        return view('edit.editAdmin', ['user'=>$user]);
    }

    public function updateAdmin(request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = 1;
        $user->password = Hash::make($request->password);
        if($request->img){
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $request->img->move(public_path('img/foto'),$filename);
            $user->img = $filename;
        }
        $user->save();

        Alert::success('Berhasil', 'Data Anda Berhasil Diupdate');
        return redirect()->route('superadmin');
    }

    public function inputAdmin(){
        return view('input.inputAdmin');
    }

    public function destroyAdmin($id){
        User::find($id)->delete();
        Alert::success('Berhasil', 'Data Anda Berhasil Dihapus');
        return redirect()->route('superadmin');
    }
    public function simpanAdmin(request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = 1;
        $user->password = Hash::make($request->password);

        $file = $request->file('img');
        $filename = $file->getClientOriginalName();
        $request->img->move(public_path('img/foto'),$filename);

        $user->img = $filename;
        $user->save();
        Alert::success('Berhasil', 'Data Anda Berhasil Disimpan');
        return redirect()->route('superadmin');
    }
}
