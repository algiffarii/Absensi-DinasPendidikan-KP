<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan_absensi extends Model
{
    use HasFactory;
    protected $table = 'pengaduan_absensi';
    protected $primaryKey = 'id_pengaduan_absensi';
    public $timestamp = false;

    protected $fillable = [
        'id_pegawai',
        'id_admin',
        'tanggal_absensi',
        'keterangan_pengaduan',
        'status_pengaduan',
        'keterangan_admin',
        'tanggal_pengaduan'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }
}
