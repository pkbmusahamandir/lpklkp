@extends('layouts.layouts')

@section('content')
<section style="margin-top: 200px; background-color:#f8f9fa;" class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center text-dark">Video Kegiatan LPK/LKP Prisma One</h2>
        <p class="text-muted text-center mb-5">Kumpulan video kegiatan terbaru LPK/LKP Prisma One</p>

        <div class="row g-4">
            @foreach ($videos as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="card video-card h-100">
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/{{ $item->youtube_code }}"
                                title="{{ $item->judul }}"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body text-center">
                            <p class="fw-semibold mb-0">{{ $item->judul }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Custom Style --}}
<style>
    .video-card {
        border: 2px solid #dee2e6; /* border abu tipis */
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
        background-color: #fff;
    }
    .ratio iframe {
        border-radius: 10px 10px 0 0;
    }
</style>
@endsection
