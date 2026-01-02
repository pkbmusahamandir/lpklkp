@extends('layouts.layouts')

@section('content')
<section style="margin-top: 80px; min-height:100vh; background:#ffffff; display:flex; align-items:center; justify-content:center;">
    <div class="container col-md-6 col-lg-4">
        <div class="card shadow-lg border-0 rounded-4" 
             style="background: linear-gradient(135deg, #fdfcfb, #e2d1c3);">
            <div class="card-body p-4 text-dark">
                <!-- Judul -->
                <h3 class="fw-bold mb-3 text-center">Login PKBM Usaha Mandiri</h3>
                <p class="text-center mb-4 text-muted">Silakan masuk untuk mengakses dashboard</p>

                {{-- Tampilkan error jika login gagal --}}
                @if (session('loginError'))
                    <div class="alert alert-danger rounded-3">
                        {{ session('loginError') }}
                    </div>
                @endif

                <!-- Form Login -->
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="email" class="fw-semibold">Masukkan Email</label>
                        <input type="email" name="email" id="email" 
                               class="form-control rounded-3 p-2" required autofocus>
                    </div>

                    <div class="form-group mb-4">
                        <label for="password" class="fw-semibold">Masukkan Password</label>
                        <input type="password" name="password" id="password" 
                               class="form-control rounded-3 p-2" required>
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-2 rounded-3 fw-bold">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Tambah style elegan -->
<style>
    /* Input tetap putih agar kontras */
    .form-control {
        background: #fff;
        color: #000;
    }
    .form-control:focus {
        border-color: #e2d1c3;
        box-shadow: 0 0 6px rgba(226, 209, 195, 0.6);
    }

    /* Tombol dark elegan */
    .btn-dark {
        background: #2c3e50;
        border: none;
        transition: 0.3s;
    }
    .btn-dark:hover {
        background: #1a252f;
    }
</style>
@endsection
