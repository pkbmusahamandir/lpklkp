<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulC extends Model
{
    use HasFactory;

    protected $table = 'modul_cs'; // HARUS ada ini
    protected $fillable = ['judul', 'deskripsi', 'kelas', 'file'];
}

