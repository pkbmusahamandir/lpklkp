@extends('layouts.layouts')

@section('content')
<section style="margin-top: 200px; background-color:#f8f9fa;" class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center text-dark">Foto Kegiatan LPK/LKP Prisma One</h2>
        <p class="text-muted text-center mb-5">Dokumentasi berbagai kegiatan LPK/LKP Prisma One</p>

        <div class="row g-4">
            @foreach ($photos as $photo)
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="photo-card shadow-sm rounded overflow-hidden">
                        <a class="image-link d-block" href="{{ asset('storage/' . $photo->image) }}">
                            <img src="{{ asset('storage/' . $photo->image) }}"
                                 class="img-fluid w-100 h-100 object-fit-cover"
                                 alt="{{ $photo->judul }}">
                        </a>
                    </div>
                    <p class="fw-semibold mt-3">{{ $photo->judul }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Custom Style --}}
<style>
    .photo-card {
        position: relative;
        height: 250px;
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .photo-card img {
        border-radius: 12px;
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    .photo-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }
    .photo-card:hover img {
        transform: scale(1.05);
    }
</style>
@endsection
