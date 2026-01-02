@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px; background-color:#f8f9fa;">
    <div class="container col-xxl-10 py-5">
        <!-- Judul -->
        <h3 class="fw-bold mb-2 text-center text-dark">Halaman Dashboard Admin</h3>
        <p class="mb-4 text-center text-muted">Selamat datang di halaman dashboard admin</p>

        <!-- Row untuk kartu -->
        <div class="row g-4">

            <!-- Blog -->
            <div class="col-md-4">
                <div class="card h-100 text-dark shadow-lg border-gradient-black">
                    <div class="card-body text-center">
                        <div class="mb-3 text-black-gradient">
                            <i class="bi bi-journal-text fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Blog Artikel</h5>
                        <p class="card-text">Atur dan kelola kegiatan </p>
                        <a href="{{ route('blog') }}" class="btn btn-black btn-sm fw-bold">Buat Artikel</a>
                    </div>
                </div>
            </div>

            <!-- Photo -->
            <div class="col-md-4">
                <div class="card h-100 text-dark shadow-lg border-gradient-black">
                    <div class="card-body text-center">
                        <div class="mb-3 text-black-gradient">
                            <i class="bi bi-image fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Photo</h5>
                        <p class="card-text">Atur dan kelola kegiatan </p>
                        <a href="{{ route('photo') }}" class="btn btn-black btn-sm fw-bold">Tambah Photo</a>
                    </div>
                </div>
            </div>

            <!-- Video -->
            <div class="col-md-4">
                <div class="card h-100 text-dark shadow-lg border-gradient-black">
                    <div class="card-body text-center">
                        <div class="mb-3 text-black-gradient">
                            <i class="bi bi-camera-video fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Video</h5>
                        <p class="card-text">Atur dan kelola kegiatan </p>
                        <a href="{{ route('video') }}" class="btn btn-black btn-sm fw-bold">Tambah Video</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Tambah style border gradient -->
<style>
    .card {
        background: #fff;
        border: 3px solid transparent;
        border-radius: 15px;
        transition: 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    /* Gradasi hitam */
    .border-gradient-black {
        border-image: linear-gradient(135deg, #0f0f0f, #434343) 1;
    }

    /* Warna ikon (gradasi hitam → abu) */
    .text-black-gradient {
        background: linear-gradient(135deg, #0f0f0f, #434343);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Tombol gradasi hitam */
    .btn-black {
        background: linear-gradient(135deg, #0f0f0f, #434343);
        color: #fff;
        border: none;
    }
    .btn-black:hover {
        background: linear-gradient(135deg, #434343, #0f0f0f);
        color: #fff;
    }
</style>
@endsection
