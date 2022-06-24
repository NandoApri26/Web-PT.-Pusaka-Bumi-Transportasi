<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorganisasi extends Model
{
    use HasFactory;
    // protected $table = 'sorganisasis';
    protected $fillable = ['nama', 'jabatan', 'gambar'];
}
