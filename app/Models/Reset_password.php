<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reset_password extends Model
{
    use HasFactory;
    protected $table = 'reset_password';
    protected $primaryKey = 'id_reset_password';
    public $timestamp = false;

    protected $fillable = [
        'email',
        'token',
        'tanggal_diajukan'
    ];
}
