<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//        $this->middleware('guest:admin')->except('logout');
////        $this->middleware('guest:pegawai')->except('logout');
//    }

    public function index()
    {
        return view('Admin.Auth.Login.login');
    }

    public function indexPegawai()
    {
        return view('pegawai.Auth.Login.login');
    }
    public function login(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6']);

        if (Auth::guard('admin')->attempt($validasi)) {
            $request->session()->regenerate();
            $admin = Admin::where('email', $request->email)->first();

            Session::put('isLogin',true);
            Session::put('isAdmin',true);
            Session::put('admin',[
                'id_admin'=>$admin->id_admin,
                'nama'=>$admin->nama,
                'email'=>$admin->email,
            ]);
            return redirect()->route('dashboard');
        }

        return back()->with('fail','Email/Password anda salah');
    }

    public function loginPegawai(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6']);

        if (Auth::guard('pegawai')->attempt($validasi)) {
            $request->session()->regenerate();
            $pegawai= Pegawai::where('email', $request->email)->first();

            Session::put('isLogin',true);
            Session::put('isAdmin',false);
            Session::put('pegawai',[
                'id_pegawai'=>$pegawai->id_pegawai,
                'nama'=>$pegawai->nama,
                'email'=>$pegawai->email,
            ]);
            return redirect()->route('dashboard');
        }

        return back()->with('fail','Email/Password anda salah');
    }
}
