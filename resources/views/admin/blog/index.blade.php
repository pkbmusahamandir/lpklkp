@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">
            <h4>Halaman Blog Artikel</h4>

            <!-- Tombol kembali -->
            <a href="{{ route('dashboard.admin') }}" class="btn btn-secondary mb-3">
                << Dashboard
            </a>

            <!-- Tombol buat artikel -->
            <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Buat Artikel</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($artikels as $artikel)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $artikel->image) }}" class="img-thumbnail" style="width: 100px; height: auto;" alt="Foto">
                            </td>
                            <td>{{ $artikel->judul }}</td>
                            <td>
                                <a href="{{ route('blog.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('blog.destroy', $artikel->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
