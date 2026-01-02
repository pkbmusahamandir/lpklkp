@extends('layouts.layouts')

@section('content')
<section style="margin-top: 120px; background-color:#f8f9fa;">
    <div class="container py-5">
        <h3 class="fw-bold mb-4 text-center text-dark">📚 Modul Paket C</h3>
        <p class="text-muted text-center mb-5">Pilih kelas untuk melihat daftar modul pembelajaran</p>

        <!-- Tab kelas -->
        <ul class="nav nav-tabs justify-content-center mb-4 border-0" id="kelasTab">
            <li class="nav-item">
                <button class="nav-link active fw-semibold" data-bs-toggle="tab" data-bs-target="#kelas10">Kelas 10</button>
            </li>
            <li class="nav-item">
                <button class="nav-link fw-semibold" data-bs-toggle="tab" data-bs-target="#kelas11">Kelas 11</button>
            </li>
            <li class="nav-item">
                <button class="nav-link fw-semibold" data-bs-toggle="tab" data-bs-target="#kelas12">Kelas 12</button>
            </li>
        </ul>

        <div class="tab-content">
            <!-- Kelas 10 -->
            <div class="tab-pane fade show active" id="kelas10">
                <div class="row">
                    @forelse($moduls->where('kelas', 10) as $modul)
                        <div class="col-md-4 mb-4">
                            <div class="card modul-card h-100">
                                <div class="card-body">
                                    <h5 class="fw-bold text-dark">
                                        <span style="color: #28a745;">📗</span> {{ $modul->judul }}
                                    </h5>
                                    <p class="text-muted">{{ $modul->deskripsi }}</p>
                                </div>
                                <div class="card-footer text-center bg-white border-0">
                                    @if($modul->file)
                                        <a href="{{ asset('storage/' . $modul->file) }}" target="_blank" class="btn btn-gradient btn-sm">📖 Lihat Materi</a>
                                    @else
                                        <span class="text-muted">Belum ada file</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted">Belum ada modul kelas 10.</p>
                    @endforelse
                </div>
            </div>

            <!-- Kelas 11 -->
            <div class="tab-pane fade" id="kelas11">
                <div class="row">
                    @forelse($moduls->where('kelas', 11) as $modul)
                        <div class="col-md-4 mb-4">
                            <div class="card modul-card h-100">
                                <div class="card-body">
                                    <h5 class="fw-bold text-dark">
                                        <span style="color: #ffc107;">📙</span> {{ $modul->judul }}
                                    </h5>
                                    <p class="text-muted">{{ $modul->deskripsi }}</p>
                                </div>
                                <div class="card-footer text-center bg-white border-0">
                                    @if($modul->file)
                                        <a href="{{ asset('storage/' . $modul->file) }}" target="_blank" class="btn btn-gradient btn-sm">📖 Lihat Materi</a>
                                    @else
                                        <span class="text-muted">Belum ada file</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted">Belum ada modul kelas 11.</p>
                    @endforelse
                </div>
            </div>

            <!-- Kelas 12 -->
            <div class="tab-pane fade" id="kelas12">
                <div class="row">
                    @forelse($moduls->where('kelas', 12) as $modul)
                        <div class="col-md-4 mb-4">
                            <div class="card modul-card h-100">
                                <div class="card-body">
                                    <h5 class="fw-bold text-dark">
                                        <span style="color: #dc3545;">📕</span> {{ $modul->judul }}
                                    </h5>
                                    <p class="text-muted">{{ $modul->deskripsi }}</p>
                                </div>
                                <div class="card-footer text-center bg-white border-0">
                                    @if($modul->file)
                                        <a href="{{ asset('storage/' . $modul->file) }}" target="_blank" class="btn btn-gradient btn-sm">📖 Lihat Materi</a>
                                    @else
                                        <span class="text-muted">Belum ada file</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted">Belum ada modul kelas 12.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Custom Style --}}
<style>
    .modul-card {
        border-width: 2px;
        border-radius: 15px;
        background: #fff;
        box-shadow: none; /* hilangkan shadow */
        border: 2px solid;
        border-image: linear-gradient(to bottom, #000, #555) 1; /* gradasi hitam */
    }
    .nav-tabs .nav-link {
        border: none;
        color: #6c757d;
    }
    .nav-tabs .nav-link.active {
        color: #000;
        font-weight: bold;
        border-bottom: 3px solid #0d6efd;
    }

    /* Tombol gradasi biru */
    .btn-gradient {
        background: linear-gradient(90deg, #1e3c72, #2a5298);
        color: #fff;
        border: none;
    }
    .btn-gradient:hover {
        background: linear-gradient(90deg, #2a5298, #1e3c72);
        color: #fff;
    }
</style>
@endsection
