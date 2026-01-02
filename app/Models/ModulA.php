<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulA extends Model
{
    use HasFactory;

    protected $table = 'modul_as';

    protected $fillable = [
        'judul',
        'deskripsi', // ✅ tambahkan deskripsi
        'file',
        'kelas',
    ];
}
