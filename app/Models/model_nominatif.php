<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class model_nominatif extends Model
{
    use HasFactory;
    protected $table='nominatif';
    protected $fillable=[
    'nama',
    'nip',
    'jabatan',
    'gol',
    'alamat',
    'no_hp'
    ];

}
