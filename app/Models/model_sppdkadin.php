<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_sppdkadin extends Model
{
    use HasFactory;
    protected $table='kadinsppd';
    protected $fillable=[
    'nama',
    'tanggal_sppd',
    'tanggal_berangkat',
    'tanggal_kembali',
    'tujuan',
    'maksud',
    'kendaraan',
    'dasar',
    'anggaran',
    'pptk'

    ];

}
