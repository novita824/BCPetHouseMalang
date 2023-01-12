<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPenitipan extends Model
{
    use HasFactory;
    protected $table = 'client_penitipan';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = [];
}
