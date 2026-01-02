<?php

namespace App\Http\Controllers;

use App\Models\ModulC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModulCController extends Controller
{
    public function index(Request $request)
    {
        $query = ModulC::query();

        // Filter berdasarkan kelas jika ada
        if ($request->kelas) {
            $query->where('kelas', $request->kelas);
        }

        $moduls = $query->latest()->get();
        return view('admin.modul_c.index', compact('moduls'));
    }

    public function create()
    {
        return view('admin.modul_c.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kelas' => 'required|in:10,11,12',
            'file' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('modul_c', 'public');
        }

        ModulC::create($validated);
        return redirect()->route('modul_c.index')->with('success', 'Modul Paket C berhasil ditambahkan.');
    }

    public function edit(ModulC $modul_c)
    {
        return view('admin.modul_c.edit', compact('modul_c'));
    }

    public function update(Request $request, ModulC $modul_c)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kelas' => 'required|in:10,11,12',
            'file' => 'nullable|mimes:pdf,doc,docx,ppt,pptx|max:2048',
        ]);

        if ($request->hasFile('file')) {
            if ($modul_c->file) {
                Storage::disk('public')->delete($modul_c->file);
            }
            $validated['file'] = $request->file('file')->store('modul_c', 'public');
        }

        $modul_c->update($validated);
        return redirect()->route('modul_c.index')->with('success', 'Modul Paket C berhasil diperbarui.');
    }

    public function destroy(ModulC $modul_c)
    {
        if ($modul_c->file) {
            Storage::disk('public')->delete($modul_c->file);
        }
        $modul_c->delete();

        return redirect()->route('modul_c.index')->with('success', 'Modul Paket C berhasil dihapus.');
    }
}
