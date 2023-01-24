<?php

namespace App\Http\Controllers\Admin\TambahAbsensi;

use App\Http\Controllers\Controller;
use App\Models\TokenAbsensiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class TambahAbsensiController extends Controller
{
    public function tambahAbsensiPage()
    {
        return view("admin.TambahAbsensi.index");
    }

    public function tambahAbsensi(Request $request)
    {
        $validasi = $request->validate([
            'start_date' => 'required',
            'end_date' => 'required',
            'jenis_absensi' => 'required',
        ]);



        $data = [
            "id_admin" => Session::get('admin.id_admin'),
            "token_absensi" => Crypt::encryptString($request->start_date . $request->end_date . $request->jenis_absensi . "Absensi Dinas Pendidikan Kukar")
        ];

        $buatAbsen = TokenAbsensiModel::create($data);

        if ($buatAbsen){
            return back()->with('success','Berhasil, Akun Pegawai siap digunakan');
        }else{
            return back()->with('fail','Terjadi Kesalahan');
        }
    }
}
