<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Has Factory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
use HasFactor;
protected $fillable = [
    'nama',
    'deskripsi',
    'harga',
    'stok',
    'gambar',
];
}
