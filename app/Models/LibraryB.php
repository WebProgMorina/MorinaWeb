<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryB extends Model
{
    use HasFactory;

    protected $table = 'libraries_b';

    protected $fillable = [
        'title',
        'file_path',
    ];
}
