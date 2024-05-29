<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryC extends Model
{
    use HasFactory;

    protected $table = 'libraries_c';

    protected $fillable = [
        'title',
        'file_path',
    ];
}
