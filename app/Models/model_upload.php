<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_upload extends Model
{
    use HasFactory;
    protected $table='upload';
    protected $fillable=[
        'tahun',
        'nama',
        'jenis', 
        'filex', 
        ];
    
    }
    
