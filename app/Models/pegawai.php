<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    public $timestamp = false;

    protected $fillable = [
        'id_pegawai',
        'nama',
        'jenis_kelamin',
        'nomor_hp',
        'jabatan',
        'email',
        'password'
    ];
}
