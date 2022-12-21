<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    use HasFactory;
    protected $table = 'penitipan';
    
    protected $fillable = [
        'nopenitipan',
        'pemilik',
        'tipe',
        'pj',
        'harga',
        'hargapokok',
        'status'
    ];
}
