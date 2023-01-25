<?php

namespace App\Http\Controllers\Pegawai\Absensi\ScanAbsensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class ScanAbsensiController extends Controller
{
    public function index()
    {
        return view('pegawai.absensi.scanabsensi.scanAbsensi');
    }

    public function doabsensi(Request $request)
    {
        $validasi = $request->validate([
            'kodeAbsensi' => 'required',
        ]);
        if (!$validasi)
        {
            return back()->with('fail','Terjadi Kesalahan');
        }
        $token_absensiEnc = Crypt::decryptString($request->kodeAbsensi);
        $token_absensi = explode(",", $token_absensiEnc);

        return dump(Session::get("pegawai.id_pegawai"));

        $data = [
            'id_admin'=>Session::get('admin.id_admin'),
            'judul' => $request->post('judul'),
            'informasi' => $request->post('informasiMading'),
            'foto' => $request->thumbnailMading->storeAs('', $fileName),
        ];

//        $mading = Mading::create($data);
        if ($mading){
            return redirect()->route('admin.halaman.mading')->with('success','Berhasil Menambahkan Mading');
        }else{
            return back()->with('fail','Terjadi Kesalahan');
        }
    }
}
