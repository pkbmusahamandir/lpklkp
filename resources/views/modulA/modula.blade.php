@extends('layouts.layouts')

@section('content')
<section style="margin-top: 120px; background-color:#f8f9fa;">
    <div class="container py-5">
        <h3 class="fw-bold mb-4 text-center text-dark">📘 Modul Paket A</h3>
        <p class="text-muted text-center mb-5">Pilih kelas untuk melihat daftar modul pembelajaran</p>

        <!-- Tab kelas -->
        <ul class="nav nav-tabs justify-content-center mb-4 border-0" id="kelasTab">
            <li class="nav-item">
                <button class="nav-link active fw-semibold" data-bs-toggle="tab" data-bs-target="#kelas4">Kelas 4</button>
            </li>
            <li class="nav-item">
                <button class="nav-link fw-semibold" data-bs-toggle="tab" data-bs-target="#kelas5">Kelas 5</button>
            </li>
            <li class="nav-item">
                <button class="nav-link fw-semibold" data-bs-toggle="tab" data-bs-target="#kelas6">Kelas 6</button>
            </li>
        </ul>

        <div class="tab-content">
            <!-- Kelas 4 -->
            <div class="tab-pane fade show active" id="kelas4">
                <div class="row">
                    @forelse($moduls->where('kelas', 4) as $modul)
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
                        <p class="text-center text-muted">Belum ada modul kelas 4.</p>
                    @endforelse
                </div>
            </div>

            <!-- Kelas 5 -->
            <div class="tab-pane fade" id="kelas5">
                <div class="row">
                    @forelse($moduls->where('kelas', 5) as $modul)
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
                        <p class="text-center text-muted">Belum ada modul kelas 5.</p>
                    @endforelse
                </div>
            </div>

            <!-- Kelas 6 -->
            <div class="tab-pane fade" id="kelas6">
                <div class="row">
                    @forelse($moduls->where('kelas', 6) as $modul)
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
                        <p class="text-center text-muted">Belum ada modul kelas 6.</p>
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
        box-shadow: none;
        border: 2px solid;
        border-image: linear-gradient(to bottom, #000, #555) 1;
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
