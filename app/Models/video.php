<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['judul', 'url', 'deskripsi']; // sesuaikan kolomnya
}
