@extends('layouts.layouts')

@section('content')
<div class="container py-5" style="margin-top: 100px;">
    <h3 class="fw-bold mb-4">Edit Modul Paket C</h3>

    <form action="{{ route('modul_c.update', $modul_c->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $modul_c->judul }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $modul_c->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas" class="form-control" required>
                <option value="10" {{ $modul_c->kelas == '10' ? 'selected' : '' }}>Kelas 10</option>
                <option value="11" {{ $modul_c->kelas == '11' ? 'selected' : '' }}>Kelas 11</option>
                <option value="12" {{ $modul_c->kelas == '12' ? 'selected' : '' }}>Kelas 12</option>
            </select>
        </div>
        <div class="mb-3">
            <label>File Modul</label>
            @if($modul_c->file)
                <p>File saat ini: <a href="{{ asset('storage/'.$modul_c->file) }}" target="_blank">Lihat</a></p>
            @endif
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark">Update</button>
        <a href="{{ route('modul_c.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
