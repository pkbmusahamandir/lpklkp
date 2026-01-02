@extends('layouts.layouts')

@section('content')
<div class="container py-5" style="margin-top: 100px;">
    <h3 class="fw-bold mb-4">Daftar Modul Paket C</h3>

    <!-- Tombol kembali -->
    <a href="{{ route('dashboard.admin') }}" class="btn btn-secondary mb-3">
        << Dashboard </a>

            <a href="{{ route('modul_c.create') }}" class="btn btn-dark mb-3">Tambah Modul</a>

            <!-- Filter kelas -->
            <form method="GET" action="{{ route('modul_c.index') }}" class="mb-3">
                <select name="kelas" onchange="this.form.submit()" class="form-control w-auto d-inline-block">
                    <option value="">-- Semua Kelas --</option>
                    <option value="10" {{ request('kelas') == '10' ? 'selected' : '' }}>Kelas 10</option>
                    <option value="11" {{ request('kelas') == '11' ? 'selected' : '' }}>Kelas 11</option>
                    <option value="12" {{ request('kelas') == '12' ? 'selected' : '' }}>Kelas 12</option>
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
                    @forelse ($moduls as $modul)
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
                            <a href="{{ route('modul_c.edit', $modul->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('modul_c.destroy', $modul->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus modul?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada modul Paket C</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

</div>
@endsection
