<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPK/LKP Prisma One</title>
    <link rel="shortcut icon" href="{{ asset('assets/icons/logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <!-- navbar -->
    @include('layouts.navbar')

    <!-- content -->
    @yield('content')

    <!-- Footer -->
    <section id="footer" class="text-dark" style="background: linear-gradient(to right, #e0e0e0, #ffffff);">
        <div class="container py-5">
            <footer>
                <div class="row gy-4">

                    <!-- Kontak -->
                    <div class="col-12 col-md-3">
                        <h5 class="fw-bold mb-3 text-uppercase">Kontak Kami</h5>
                        <ul class="list-unstyled">
                            <!-- Email dengan subject & body -->
                            <li class="mb-2">
                                <i class="bi bi-envelope me-2"></i>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=lpkprismaone@gmail.com&su=Permintaan%20Informasi&body=Halo%20PKBM%20Usaha%20Mandiri,%0A%0ASaya%20ingin%20bertanya%20tentang..." target="_blank" class="text-decoration-none text-dark">
                                    lpkprismaone@gmail.com
                                </a>

                            </li>

                            <!-- WhatsApp -->
                            <li class="mb-2">
                                <i class="bi bi-phone me-2"></i>
                                <a href="https://wa.me/6285655527913?text=Halo%20PKBM%20Usaha%20Mandiri,%20saya%20ingin%20bertanya%20tentang..." target="_blank" class="text-decoration-none text-dark">
                                    0342804627
                                </a>
                            </li>
                        </ul>
                    </div>



                    <!-- Alamat -->
                    <div class="col-12 col-md-3">
                        <h5 class="fw-bold mb-3 text-uppercase">Alamat Kami</h5>
                        <p class="small">Jalan Kresna No. 02, Kademangan, Kec. Kademangan, Kabupaten Blitar, Jawa Timur
                            66161.</p>
                        <a href="https://maps.app.goo.gl/frG64StasfmRocJi8" target="_blank">
                            <img src="{{ asset('assets/icons/maps.png') }}" height="50" width="50" alt="Google Maps" class="rounded-circle bg-white p-1 shadow-sm hover-scale">
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <!-- Copyright -->
    <section style="background: linear-gradient(to right, #000000ff, #000000);">
        <div class="container py-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-light text-center">
                <div class="mb-2 mb-md-0 fw-semibold">
                    © 2025 LPK/LKP Prisma One
                </div>
                <div class="d-flex gap-4">
                    <a href="#" class="text-light text-decoration-none fw-light">Syarat & Ketentuan</a>
                    <a href="/kebijakan" class="text-light text-decoration-none fw-light">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQKtsj8PCm0N9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200
            });
        });

        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
            } else {
                navbar.classList.remove("scroll-nav-active");
            }
        };

        AOS.init();

        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image'
                , retina: {
                    ratio: 1
                    , replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '2x' + m;
                        });
                    }
                }
            });
        });

    </script>
</body>

</html>
