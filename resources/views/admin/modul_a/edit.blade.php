@extends('layouts.layouts')

@section('content')
<div class="container py-5" style="margin-top: 100px;">
    <h3 class="fw-bold mb-4">Edit Modul Paket A</h3>

    <form action="{{ route('modul_a.update', $modul_a->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $modul_a->judul }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $modul_a->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas" class="form-control" required>
                <option value="4" {{ $modul_a->kelas == '4' ? 'selected' : '' }}>Kelas 4</option>
                <option value="5" {{ $modul_a->kelas == '5' ? 'selected' : '' }}>Kelas 5</option>
                <option value="6" {{ $modul_a->kelas == '6' ? 'selected' : '' }}>Kelas 6</option>
            </select>
        </div>
        <div class="mb-3">
            <label>File Modul</label>
            @if($modul_a->file)
                <p>File saat ini: <a href="{{ asset('storage/'.$modul_a->file) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Update</button>
        <a href="{{ route('modul_a.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
