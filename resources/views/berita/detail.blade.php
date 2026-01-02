@extends('layouts.layouts')

@section('content')
<section id="detail" style="margin-top: 100px; background-color: #f9f9f9;" class="py-5">
    <div class="container col-xxl-8">
        
        <!-- CARD UNTUK HEADER ARTIKEL -->
        <div class="p-4 rounded shadow-sm mb-4" style="background-color: #ffffff;">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb bg-transparent p-0 mb-0">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none text-muted">Home</a></li>
                    <li class="breadcrumb-item"><a href="/berita" class="text-decoration-none text-muted">Berita</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">{{ $artikel->judul }}</li>
                </ol>
            </nav>

            <!-- Gambar Artikel -->
            <div class="mb-4 text-center">
                <img src="{{ asset('storage/' . $artikel->image) }}" 
                     class="img-fluid rounded shadow-sm" 
                     alt="{{ $artikel->judul }}">
            </div>

            <!-- Judul & Info -->
            <p class="mb-2 text-muted" style="font-size: 0.9rem;">
                <i class="bi bi-calendar"></i> {{ $artikel->created_at->format('d M Y') }}
            </p>
            <h2 class="fw-bold mb-3" style="color: #222;">{{ $artikel->judul }}</h2>

            <!-- Share Buttons -->
            <div class="mb-2">
                <span class="me-2 fw-bold">Share:</span>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                   target="_blank" class="btn btn-primary btn-sm me-1">
                   Facebook
                </a>
                <a href="https://api.whatsapp.com/send?text={{ urlencode($artikel->judul . ' ' . request()->fullUrl()) }}" 
                   target="_blank" class="btn btn-success btn-sm me-1">
                   WhatsApp
                </a>
                <button class="btn btn-secondary btn-sm" onclick="copyLink()">Copy Link</button>
            </div>
        </div>

        <!-- DESKRIPSI BENAR-BENAR DI LUAR CARD -->
        <div class="text-secondary" style="line-height: 1.8; font-size: 1rem;">
            {!! $artikel->desc !!}
        </div>
    </div>
</section>

<script>
function copyLink() {
    navigator.clipboard.writeText(window.location.href)
        .then(() => alert('Link berhasil disalin!'))
        .catch(() => alert('Gagal menyalin link.'));
}
</script>
@endsection
