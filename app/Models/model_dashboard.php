<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
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
    public function getCreatedAtAttribute()
{
return Carbon::parse($this->attributes['created_at'])
->translatedFormat('l, d F y');
}

}



