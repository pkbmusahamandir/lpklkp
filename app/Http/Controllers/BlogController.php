<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // fungsi index
    public function index()
    {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

        // fungsi create
    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,webp',
            'desc'  => 'required|min:20',
        ]);
        $slug = Str::slug($request->judul);
        $originalSlug = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }
        // Ambil file gambar
        $image = $request->file('image');
        $randName = time(); // atau bisa pakai Str::random(10)
        $extension = $image->getClientOriginalExtension();
        $filename = "{$randName}.{$extension}";

        // Simpan ke folder storage/app/public/artikel
        $path = $image->storeAs('artikel', $filename, 'public');

        // Simpan ke database
        $blog = new Blog();
        $blog->judul = $request->judul;
        $blog->desc = $request->desc;
        $blog->slug=$slug;
        $blog->image = $path; // simpan path relatif: artikel/namafile.jpg
        $blog->save();

         return redirect()->route('blog')->with('success', 'Data berhasil disimpan');
    }


// fungsi edit
    public function edit($id)
    {
        $artikel = Blog::find($id);
        return view('admin.blog.edit', [
            'artikel' => $artikel
        ]);
    }
    // fungsi update
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'desc'  => 'required|min:20',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp',
        ]);

        $artikel = Blog::findOrFail($id);

        // Perbarui slug jika judul diubah
        $slug = Str::slug($request->judul);
        $originalSlug = $slug;
        $count = 1;
        while (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $artikel->judul = $request->judul;
        $artikel->desc = $request->desc;
        $artikel->slug = $slug;

        // Jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::disk('public')->delete($artikel->image);

            // Simpan gambar baru
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('artikel', $filename, 'public');

            $artikel->image = $path;
        }

        $artikel->save();

        return redirect()->route('blog')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('blog')->with('success', 'Data berhasil dihapus');
    }

}
