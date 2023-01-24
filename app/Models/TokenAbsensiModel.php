<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenAbsensiModel extends Model
{
    use HasFactory;

    protected $table = 'token_absensi';
    protected $primaryKey = 'id_token_absensi';
    public $timestamps = false;

    protected $fillable = [
        'id_token_absensi',
        'id_admin',
        'token_absensi',
        "tanggal_dibuat"
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }
}
