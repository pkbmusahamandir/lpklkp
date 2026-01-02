<?php

namespace App\Http\Controllers;

use App\Models\ModulB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModulBController extends Controller
{
    public function index(Request $request)
    {
        $query = ModulB::query();

        if ($request->has('kelas') && $request->kelas != '') {
            $query->where('kelas', $request->kelas);
        }

        $modul = $query->get();
        return view('admin.modul_b.index', compact('modul'));
    }

    public function create()
    {
        return view('admin.modul_b.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kelas' => 'required|in:7,8,9',
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $filePath = $request->file('file')->store('modul_b', 'public');

        ModulB::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kelas' => $request->kelas,
            'file' => $filePath,
        ]);

        return redirect()->route('modul_b.index')->with('success', 'Modul berhasil ditambahkan!');
    }

    public function edit(ModulB $modul_b)
    {
        return view('admin.modul_b.edit', compact('modul_b'));
    }

    public function update(Request $request, ModulB $modul_b)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kelas' => 'required|in:7,8,9',
            'file' => 'nullable|mimes:pdf,doc,docx|max:2048',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'kelas']);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($modul_b->file);
            $filePath = $request->file('file')->store('modul_b', 'public');
            $data['file'] = $filePath;
        }

        $modul_b->update($data);

        return redirect()->route('modul_b.index')->with('success', 'Modul berhasil diperbarui!');
    }

    public function destroy(ModulB $modul_b)
    {
        Storage::disk('public')->delete($modul_b->file);
        $modul_b->delete();
        return redirect()->route('modul_b.index')->with('success', 'Modul berhasil dihapus!');
    }


        public function userIndex(Request $request)
    {
        $query = ModulB::query();

        // filter kelas
        if ($request->has('kelas') && $request->kelas != '') {
            $query->where('kelas', $request->kelas);
        }

        $modul = $query->get();

        // arahkan ke view user
        return view('modulB.modulb', compact('modul'));
    }

    }

