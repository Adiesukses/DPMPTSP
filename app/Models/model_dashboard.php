<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_dashboard extends Model
{
    use HasFactory;
    protected $table='kegiatan';
    protected $fillable=[
    'acara',
    'tanggal',
    'tempat',
    'waktu',
    'keterangan',
    'disposisi'

    ];
}

