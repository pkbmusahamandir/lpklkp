@extends('layouts.layouts')

@section('content')
<div class="container py-5" style="margin-top: 100px;">
    <h3 class="fw-bold mb-4">Daftar Modul Paket B</h3>

    <!-- Tombol Dashboard & Tambah Modul -->
    <div class="d-flex justify-content-start mb-3 gap-2">
        <a href="{{ url('/dashboard') }}" class="btn btn-secondary"><< Dashboard</a>
        <a href="{{ route('modul_b.create') }}" class="btn btn-dark">Tambah Modul</a>
    </div>

    <!-- Filter kelas -->
    <form method="GET" action="{{ route('modul_b.index') }}" class="mb-3">
        <select name="kelas" onchange="this.form.submit()" class="form-select w-auto d-inline">
            <option value="">-- Semua Kelas --</option>
            <option value="7" {{ request('kelas') == '7' ? 'selected' : '' }}>Kelas 7</option>
            <option value="8" {{ request('kelas') == '8' ? 'selected' : '' }}>Kelas 8</option>
            <option value="9" {{ request('kelas') == '9' ? 'selected' : '' }}>Kelas 9</option>
        </select>
    </form>

    <!-- Notifikasi -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tabel modul -->
    <table class="table table-bordered text-center align-middle">
        <thead class="table-light">
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Kelas</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($modul as $m)
            <tr>
                <td>{{ $m->judul }}</td>
                <td>{{ $m->deskripsi }}</td>
                <td>Kelas {{ $m->kelas }}</td>
                <td><a href="{{ asset('storage/'.$m->file) }}" target="_blank">Lihat File</a></td>
                <td>
                    <a href="{{ route('modul_b.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('modul_b.destroy', $m->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada modul</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
