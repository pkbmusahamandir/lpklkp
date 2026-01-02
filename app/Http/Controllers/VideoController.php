<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video; // pastikan model Video ada

class VideoController extends Controller
{
    // Halaman admin
    public function index()
    {
        return view('admin.video.index', [
            'videos' => Video::orderBy('id', 'desc')->get(),
        ]);
    }

    // Halaman publik
    public function publicIndex()
    {
        return view('video.video', [
            'videos' => Video::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'youtube_code' => 'required',
        ]);

        Video::create([
            'judul' => $request->judul,
            'youtube_code' => $request->youtube_code,
        ]);

        return redirect()->back()->with('success', 'Video berhasil ditambahkan');
    }

    // Update video
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'        => 'required',
            'youtube_code' => 'required',
        ]);

        $video = Video::findOrFail($id);
        $video->judul = $request->judul;
        $video->youtube_code = $request->youtube_code;
        $video->save();

        return redirect()->route('video')->with('success', 'Video berhasil diperbarui!');
    }

    // Hapus video
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('video')->with('success', 'Video berhasil dihapus!');
    }

    
}
