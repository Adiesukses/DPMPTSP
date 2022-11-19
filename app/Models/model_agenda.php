<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_agenda extends Model
{
    use HasFactory;
    protected $table='agenda';
    protected $fillable=[
    'kegiatan',
    'opd',
    'deadline',
    'keterangan',
    'progres'

    ];
}
