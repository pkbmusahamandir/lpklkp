<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    // Halaman admin
    public function index()
    {
        return view('admin.photo.index', [
            'photos' => Photo::orderBy('id', 'desc')->get(),
        ]);
    }

    // Halaman publik foto
    public function publicIndex()
    {
        return view('foto.foto', [
            'photos' => Photo::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,webp|max:1000',
        ]);

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();

        // simpan ke storage/app/public/photo
        $path = $image->storeAs('photo', $filename, 'public');

        Photo::create([
            'judul' => $request->judul,
            'image' => $path,
        ]);

        return redirect()->route('photo')->with('success', 'Foto berhasil diupload!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp|max:1000',
        ]);

        $photo = Photo::findOrFail($id);
        $photo->judul = $request->judul;

        if ($request->hasFile('image')) {
            if ($photo->image && file_exists(storage_path('app/public/' . $photo->image))) {
                unlink(storage_path('app/public/' . $photo->image));
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('photo', $filename, 'public');
            $photo->image = $path;
        }

        $photo->save();

        return redirect()->route('photo')->with('success', 'Foto berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        if ($photo->image && file_exists(storage_path('app/public/' . $photo->image))) {
            unlink(storage_path('app/public/' . $photo->image));
        }
        $photo->delete();

        return redirect()->route('photo')->with('success', 'Foto berhasil dihapus!');
    }
}

