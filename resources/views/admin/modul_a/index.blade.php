@extends('layouts.layouts')

@section('content')
<div class="container py-5" style="margin-top: 100px;">
    <h3 class="fw-bold mb-4">Daftar Modul Paket A</h3>

    <!-- Tombol kembali -->
    <a href="{{ route('dashboard.admin') }}" class="btn btn-secondary mb-3"><< Dashboard</a>
    <a href="{{ route('modul_a.create') }}" class="btn btn-dark mb-3">Tambah Modul</a>

    <!-- Filter kelas -->
    <form method="GET" action="{{ route('modul_a.index') }}" class="mb-3">
        <select name="kelas" onchange="this.form.submit()" class="form-control w-auto d-inline-block">
            <option value="">-- Semua Kelas --</option>
            <option value="4" {{ request('kelas') == '4' ? 'selected' : '' }}>Kelas 4</option>
            <option value="5" {{ request('kelas') == '5' ? 'selected' : '' }}>Kelas 5</option>
            <option value="6" {{ request('kelas') == '6' ? 'selected' : '' }}>Kelas 6</option>
        </select>
    </form>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Kelas</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($modul_as as $modul)
            <tr>
                <td>{{ $modul->judul }}</td>
                <td>{{ $modul->deskripsi }}</td>
                <td>Kelas {{ $modul->kelas }}</td>
                <td>
                    @if($modul->file)
                        <a href="{{ asset('storage/'.$modul->file) }}" target="_blank">Lihat File</a>
                    @else
                        -
                    @endif
                </td>
                <td>
                    <a href="{{ route('modul_a.edit', $modul->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('modul_a.destroy', $modul->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus modul?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Belum ada modul Paket A</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
