<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file_path',
        'kode_kelas', // Tambahkan kode kelas ke fillable
    ];

}
