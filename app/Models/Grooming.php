<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grooming extends Model
{
    use HasFactory;
    protected $table='grooming'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    public $timestamps = false;
    protected $primaryKey = 'idgrooming';
    
    protected $fillable = [
        'nogrooming',
        'pemilik',
        'tipe',
        'pj',
        'harga',
        'hargapokok',
        'status'
    ];
}
