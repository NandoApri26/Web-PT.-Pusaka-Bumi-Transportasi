<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarpekerjaan extends Model
{
    use HasFactory;
    protected $table = 'daftarpekerjaans';
    protected $fillable = ['id', 'nama_pekerjaan'];
}
