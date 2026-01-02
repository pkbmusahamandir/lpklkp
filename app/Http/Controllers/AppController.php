<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Video;
use App\Models\ModulC;
use App\Models\ModulA; // ✅ Tambahkan ini

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'videos'   => Video::orderBy('id', 'desc')->limit(3)->get(),
            'photos'   => Photo::orderBy('id', 'desc')->limit(4)->get(),
        ]);
    }

    public function berita()
    {
        return view('berita.berita', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel
        ]);
    }

    // === Modul Paket C untuk user ===
    public function modulC()
    {
        $moduls = ModulC::orderBy('kelas')->get();
        return view('modulC.modulc', compact('moduls'));
    }

    // === Modul Paket A untuk user ===
    public function modulA()
    {
        $moduls = ModulA::orderBy('kelas')->get();
        return view('modulA.modula', compact('moduls')); // ✅ view khusus modul A
    }
}
