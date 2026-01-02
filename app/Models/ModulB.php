<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulB extends Model
{
    use HasFactory;

    protected $table = 'modul_b';

    protected $fillable = [
        'judul',
        'deskripsi',
        'kelas',
        'file',
    ];
}