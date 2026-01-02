@extends('layouts.layouts')

@section('content')

<section id="hero">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

    <!-- Gambar Carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active hero-slide" style="background-image: url('{{ asset('assets/images/cr1.jpg') }}')"></div>
      <div class="carousel-item hero-slide" style="background-image: url('{{ asset('assets/images/cr2.png') }}')"></div>
      <div class="carousel-item hero-slide" style="background-image: url('{{ asset('assets/images/cr3.png') }}')"></div>
      <div class="carousel-item hero-slide" style="background-image: url('{{ asset('assets/images/cr4.png') }}')"></div>
    </div>

    <!-- Overlay Gradasi -->
    <div class="hero-overlay"></div>

    <!-- Konten Hero -->
    <div class="container position-absolute top-50 start-50 translate-middle" style="z-index:10;">

      <!-- Baris Atas: Tulisan & Card Pendiri -->
      <div class="row align-items-center hero-top">
        <!-- Tulisan -->
        <div class="col-lg-7 col-md-12 text-white hero-text">
          <h1 class="fw-bold mb-3">- Selamat Datang -</h1>
          <h2 class="fw-semibold mb-3">LPK/LKP Prisma One</h2>
          <p class="lead mb-4">"Kademangan - Blitar"</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showPopup(title, text, image) {
        Swal.fire({
            title: title
            , text: text
            , imageUrl: image
            , imageWidth: 80
            , imageHeight: 80
            , imageAlt: title
            , confirmButtonText: 'Tutup'
            , confirmButtonColor: '#3085d6'
            , background: '#ffffff'
            , color: '#333'
            , showClass: {
                popup: 'animate__animated animate__fadeInDown'
            }
            , hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        });
    }

</script>

<!-- Animate.css for animation -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    .program-card {
        transition: all 0.3s ease;
    }

    .program-card:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

</style>


<section id="berita" class="py-5 bg-light">
  <div class="container">

    <!-- Header -->
    <div class="header-berita text-center mb-5">
      <h2 class="fw-bold">📰 Berita Kegiatan LPK/LKP Prisma One</h2>
      <p class="text-muted">Informasi terbaru seputar kegiatan & aktivitas</p>
    </div>

    <!-- Daftar Berita -->
    <div class="row g-4" data-aos="fade-up">
      @foreach ($artikels as $item)
      <div class="col-lg-4 col-md-6">
        <div class="card berita-card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
          <!-- Gambar -->
          <div class="berita-img overflow-hidden">
            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
          </div>

          <!-- Konten -->
          <div class="p-4 konten-berita">
            <p class="mb-2 text-secondary small d-flex align-items-center">
              <i class="bi bi-calendar-date me-2"></i>
              {{ $item->created_at->format('d M Y') }}
            </p>
            <h4 class="fw-bold mb-3 berita-title">
              <a href="{{ route('blog.detail', ['slug' => $item->slug]) }}" class="text-dark text-decoration-none">
                {{ $item->judul }}
              </a>
            </h4>
            <p class="text-secondary small mb-3">#LPK/LKP Prisma One</p>
            <a href="{{ route('blog.detail', ['slug' => $item->slug]) }}" class="btn btn-sm btn-danger rounded-pill px-3">
              Selengkapnya <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Footer -->
    <div class="footer-berita text-center mt-5">
      <a href="/berita" class="btn btn-outline-danger rounded-pill px-4 py-2">
        Lihat Semua Berita
      </a>
    </div>

  </div>
</section>



<style>
    /* Animasi hover agar lebih elegan */
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-scale:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
    }

</style>


@endsection
