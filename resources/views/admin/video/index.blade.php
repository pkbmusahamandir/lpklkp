@extends('layouts.layouts')

@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4>Halaman Video Kegiatan</h4>
        <div class="mb-3">
            <!-- Tombol kembali -->
            <a href="{{ route('dashboard.admin') }}" class="btn btn-secondary me-2">
                << Dashboard
            </a>

            <!-- Tombol buka modal upload -->
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                Upload Video
            </a>
        </div>


        <!-- Alert error -->
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Alert sukses -->
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Tabel data -->
        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Video</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($videos as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <iframe width="200" height="113" src="https://www.youtube.com/embed/{{ $item->youtube_code }}" frameborder="0" allowfullscreen></iframe>
                        </td>
                        <td>{{ $item->judul }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                Edit
                            </a>

                            <!-- Form Hapus -->
                            <form action="{{ route('video.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah yakin akan dihapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Video</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <form action="{{ route('video.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" name="judul" class="form-control" value="{{ $item->judul }}" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Kode YouTube</label>
                                            <input type="text" name="youtube_code" class="form-control" value="{{ $item->youtube_code }}" required>
                                            <small class="text-muted">Contoh: dQw4w9WgXcQ</small>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Modal Upload -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('video.store') }}" method="POST">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Upload Video Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kode YouTube</label>
                        <input type="text" class="form-control" name="youtube_code" required>
                        <small class="text-muted">Contoh: dQw4w9WgXcQ</small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
