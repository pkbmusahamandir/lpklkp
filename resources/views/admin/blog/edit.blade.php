@extends('layouts.layouts')

@section('content')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        {{-- Navbar --}}
        <div class="d-flex mb-3">
            <a href="{{ route('blog') }}">Blog</a>
            <div class="mx-1">></div>
            <span>Edit Artikel</span>
        </div>

        <h4>Halaman Edit Artikel</h4>

        <form action="{{ route('blog.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $artikel->judul) }}" required>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Deskripsi</label>
                <textarea name="desc" id="desc" class="form-control" rows="4" required>{{ old('desc', $artikel->desc) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label><br>
                <img src="{{ asset('storage/' . $artikel->image) }}" alt="Current Image" height="100" class="mb-2">
                <input type="file" name="image" id="image" class="form-control">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</section>
@endsection
