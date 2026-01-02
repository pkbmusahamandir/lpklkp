@extends('layouts.layouts')

@section('content')
<div class="container py-5" style="margin-top: 100px;">
    <h3 class="fw-bold mb-4">Edit Modul Paket B</h3>

    <form action="{{ route('modul_b.update', $modul_b->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $modul_b->judul }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $modul_b->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas" class="form-control" required>
                <option value="7" {{ $modul_b->kelas == '7' ? 'selected' : '' }}>Kelas 7</option>
                <option value="8" {{ $modul_b->kelas == '8' ? 'selected' : '' }}>Kelas 8</option>
                <option value="9" {{ $modul_b->kelas == '9' ? 'selected' : '' }}>Kelas 9</option>
            </select>
        </div>
        <div class="mb-3">
            <label>File Modul</label>
            @if($modul_b->file)
                <p>File saat ini: <a href="{{ asset('storage/'.$modul_b->file) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Update</button>
        <a href="{{ route('modul_b.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
