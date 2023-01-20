<?php

namespace App\Http\Controllers\Admin\Auth\Register;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function registerpage()
    {
        $title = 'Admin';

        return view('admin.Auth.Register.register', compact('title'));
    }
    public function register(Request $request){
        $validasi = $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:admin',
            'password' => 'required|min:6'
        ]);

        $admin = Admin::create(array_merge($validasi, [
            'password' => bcrypt($request->password)
        ]));
        if ($admin){
            return back()->with('success','Berhasil, Akun Pegawai siap digunakan');
        }else{
            return back()->with('fail','Terjadi Kesalahan');
        }
    }
}
