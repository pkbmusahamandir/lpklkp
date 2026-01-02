@extends('layouts.layouts')

@section('content')
<div class="container py-5" style="margin-top: 100px;">
    <h3 class="fw-bold mb-4">Tambah Modul Paket A</h3>

    <form action="{{ route('modul_a.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas" class="form-control" required>
                <option value="">-- Pilih Kelas --</option>
                <option value="4">Kelas 4</option>
                <option value="5">Kelas 5</option>
                <option value="6">Kelas 6</option>
            </select>
        </div>
        <div class="mb-3">
            <label>File Modul</label>
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Simpan</button>
        <a href="{{ route('modul_a.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
