@extends('layouts.layouts')

@section('content')
    <section style="margin-top:120px;background:#fafafa;min-height:100vh;">
        <div class="container py-5">

            {{-- TAB NAV --}}
            <ul class="nav nav-pills justify-content-center mb-5">
                <li class="nav-item">
                    <button class="nav-link active px-4" data-bs-toggle="pill" data-bs-target="#lpk">
                        Profil LPK
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link px-4" data-bs-toggle="pill" data-bs-target="#lkp">
                        Profil LKP
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                {{-- ===================== LPK PRISMA ONE ===================== --}}
                <div class="tab-pane fade show active" id="lpk">

                    {{-- PIMPINAN --}}
                    <div class="row align-items-center mb-5">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/pimpinan-lpk.jpg') }}" class="img-fluid rounded-4 shadow"
                                style="max-width:260px;">
                        </div>
                        <div class="col-md-8">
                            <h4 class="fw-bold">Drs. Setiawan Adi S., M.Pd</h4>
                            <small class="text-muted">Pimpinan LPK Prisma One</small>
                            <p class="mt-3">
                                LPK Prisma One didirikan pada tahun 2023 dengan lokasi yang strategis dan mudah diakses,
                                dekat dengan berbagai lembaga pendidikan dan fasilitas umum serta Usaha Kecil Menengah
                                (UKM).
                                Lembaga pelatihan kerja ini bergerak di bidang Kewirausahaan dengan memperhatikan kearifan
                                lokal serta pemasaran Digital, Industri Kreatif, Desain Grafis dan TIK, serta pelatihan yang
                                disesuaikan dengan kebutuhan masyarakat. Tujuan kegiatan pelatihan ini mempersiapkan peserta
                                pelatihan agar memiliki pengetahuan dan keterampilan yang memadai untuk bekerja di Dunia
                                Usaha dan Industri ataupun membuka usaha mandiri. Melalui kegiatan pelatihan ini diharapkan
                                dapat meningkatkan sumber daya masyarakat dan kesejahteraan ekonomi keluarga mencakup
                                pemagangan, bantuan usaha, bimbingan usaha dan penempatan lulusan.

                            </p>
                        </div>
                    </div>

                    <h3 class="text-center fw-bold mb-3">LPK PRISMA ONE</h3>
                    <p class="text-center mb-4">
                        Berdiri tahun 2023 untuk meningkatkan kompetensi masyarakat agar siap kerja dan berwirausaha.
                    </p>

                    <div class="row g-4 mb-4">
                        <div class="col-md-4">
                            <div class="card custom-card p-3 h-100">
                                <h5 class="fw-bold">Visi</h5>
                                <p>Meningkatkan Sumber Daya Masyarakat Melalui Program Kewirausahaan dan Pelatihan Kerja
                                    Berbasis teknologi.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card p-3 h-100">
                                <h5 class="fw-bold">Misi</h5>
                                <ul>
                                    <li>1. Meningkatkan Sumber Daya Manusia sesuai bidang keahliannya.</li>
                                    <li>2. Meningkatkan Sumber Daya Masyarakat melalui Program Kewirausahaan.</li>
                                    <li>3. Meningkatkan Sumber Daya Masyarakat melalui Pelatihan Kerja Berbasis Teknologi.
                                    </li>
                                    <li>4. Meningkatkan kesejahteraan masyarakat dan mengurangi angka pengangguran.</li>
                                    <li>5. Meningkatkan harkat dan martabat manusia-manusia yang tangguh.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card p-3 h-100">
                                <h5 class="fw-bold">Bidang Pelatihan</h5>
                                <ul>
                                    <li>Kewirausahaan</li>
                                    <li>Digital Marketing</li>
                                    <li>Komputer</li>
                                    <li>Agribisnis</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-5">
                        <button class="btn btn-gradient-blue me-2" data-bs-toggle="modal"
                            data-bs-target="#pengurusLPK">Pengurus LPK</button>
                        <button class="btn btn-gradient-blue" data-bs-toggle="modal"
                            data-bs-target="#instrukturLPK">Instruktur LPK</button>
                    </div>
                </div>

                {{-- ===================== LKP PRISMA KOMPUTER ===================== --}}
                <div class="tab-pane fade" id="lkp">

                    {{-- PIMPINAN --}}
                    <div class="row align-items-center mb-5">
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('assets/images/pimpinan-lkp.jpg') }}" class="img-fluid rounded-4 shadow"
                                style="max-width:260px;">
                        </div>
                        <div class="col-md-8">
                            <h4 class="fw-bold">Sutiarsih</h4>
                            <small class="text-muted">Pimpinan LKP Prisma Komputer</small>
                            <p class="mt-3">
                                LKP PRISMA KOMPUTER didirikan pada tahun 2008 dengan lokasi yang strategis dan mudah
                                diakses, dekat dengan berbagai lembaga pendidikan dan fasilitas umum. Lembaga Kursus dan
                                Pelatihan ini bergerak di bidang Pelatihan Digital Marketing, Industri Kreatif, Desain
                                Grafis, Teknologi Informasi, serta pelatihan yang disesuaikan dengan kebutuhan masyarakat.
                                Tujuan kegiatan Kursus dan Pelatihan ini mempersiapkan peserta pelatihan agar memiliki
                                pengetahuan dan keterampilan yang memadai untuk bekerja di Dunia Usaha dan Industri ataupun
                                membuka usaha mandiri. Melalui kegiatan Kursus dan pelatihan ini diharapkan dapat
                                meningkatkan sumber daya masyarakat dan kesejahteraan ekonomi keluarga mencakup pemagangan,
                                bantuan usaha, bimbingan usaha dan penempatan lulusan.
                            </p>
                        </div>
                    </div>

                    <h3 class="text-center fw-bold mb-3">LKP PRISMA KOMPUTER</h3>
                    <p class="text-center mb-4">
                        Berdiri sejak 2008 sebagai lembaga kursus dan pelatihan berbasis IPTEK dan IMTAQ.
                    </p>

                    <div class="row g-4 mb-4">
                        <div class="col-md-4">
                            <div class="card custom-card p-3 h-100">
                                <h5 class="fw-bold">Visi</h5>
                                <p>Terwujudnya lembaga pendidikan unggulan sebagai wahana pelayanan masyarakat untuk
                                    meningkatkan pengetahuan, keterampilanm dan kualitas sumber daya manusia berbasis pada
                                    Imtaq dan Iptek.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card p-3 h-100">
                                <h5 class="fw-bold">Misi</h5>
                                <ul>
                                    <li>1. Memotivasi masyarakat untuk sadar akan pentingnya mengikuti perkembangan Ilmu
                                        Pengetahuan dan Teknologi.</li>
                                    <li>2. Meningkatkan mutu pengelolaan kelembagaan.</li>
                                    <li>3. Meningkaktan mutu tenaga pendidik dan tenaga kependidikan.</li>
                                    <li>4. Menerapkan model-model pembelajaran aktual.</li>
                                    <li>5. Memenuhi sarana prasarana yang menunjang proses pembelajaran.</li>
                                    <li>6. Mengikut sertakan peserta didik dalam uji kompetensi.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card p-3 h-100">
                                <h5 class="fw-bold">Bidang Kursus</h5>
                                <ul>
                                    <li>TI</li>
                                    <li>Digital Marketing</li>
                                    <li>Content Creator</li>
                                    <li>Kewirausahaan</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-5">
                        <button class="btn btn-gradient-blue me-2" data-bs-toggle="modal"
                            data-bs-target="#pengurusLKP">Pengurus LKP</button>
                        <button class="btn btn-gradient-blue" data-bs-toggle="modal"
                            data-bs-target="#instrukturLKP">Instruktur LKP</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================= MODAL LPK ================= --}}
    <div class="modal fade" id="pengurusLPK" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header bg-gradient-blue text-white">
                    <h5 class="modal-title">Pengelola LPK Prisma One</h5>
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <table class="table table-bordered table-striped">
                        <thead class="table-light text-center">
                            <tr>
                                <th style="width: 60px;">No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Drs. Setiawan Adi S., M.Pd</td>
                                <td>Pimpinan</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Frida Luthvita Setiawan, M.Pd</td>
                                <td>Sekretaris</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Sutiarsih</td>
                                <td>Bendahara</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td>Lutfi Fatimah, S.Pd</td>
                                <td>Divisi Pemasaran</td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Hani Pratiwi</td>
                                <td>Divisi Evaluasi Program</td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td>Erdawati</td>
                                <td>Divisi Kepegawaian</td>
                            </tr>
                            <tr>
                                <td class="text-center">7</td>
                                <td>Wardi Edi Cahyono</td>
                                <td>Divisi Pelatihan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="instrukturLPK" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header bg-gradient-blue text-white">
                    <h5 class="modal-title">Instruktur Internal LPK Prisma One</h5>
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-light text-center">
                                <tr>
                                    <th style="width:60px">No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Bidang Keahlian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Nanda Adi Susilo, S.Sos</td>
                                    <td>Instruktur</td>
                                    <td>Agribisnis</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Frida Luthvita S., M.Pd</td>
                                    <td>Instruktur</td>
                                    <td>Digital Marketing</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Lutfi Fatimah, S.Pd</td>
                                    <td>Instruktur</td>
                                    <td>Content Creator</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Umma Latifa Nur Aziza, S.E</td>
                                    <td>Instruktur</td>
                                    <td>Digital Marketing</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Hani Pratiwi</td>
                                    <td>Instruktur</td>
                                    <td>Kewirausahaan</td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>Erdawati</td>
                                    <td>Instruktur</td>
                                    <td>Teknologi Informasi</td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td>Wardi Edi Cahyono</td>
                                    <td>Instruktur</td>
                                    <td>Teknologi Informasi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- ================= MODAL LKP ================= --}}
    <div class="modal fade" id="pengurusLKP" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header bg-gradient-blue text-white">
                    <h5 class="modal-title">Pengelola LKP Prisma Komputer</h5>
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-light text-center">
                                <tr>
                                    <th style="width:60px">No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Sutiarsih</td>
                                    <td>Pimpinan</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Drs. Setiawan Adi S., M.Pd</td>
                                    <td>Sekretaris</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Frida Luthvita Setiawan, M.Pd</td>
                                    <td>Bendahara</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Lutfi Fatimah, S.Pd</td>
                                    <td>Divisi Kemitraan</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Ida Putri Rarasati</td>
                                    <td>Divisi Layanan Program</td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>Wardi Edi Cahyono</td>
                                    <td>Divisi Pendidikan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="instrukturLKP" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header bg-gradient-blue text-white">
                    <h5 class="modal-title">Instruktur Internal LKP Prisma Komputer</h5>
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-light text-center">
                                <tr>
                                    <th style="width:60px">No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Bidang Keahlian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Frida Luthvita S., M.Pd</td>
                                    <td>Instruktur</td>
                                    <td>Digital Marketing</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Lutfi Fatimah, S.Pd</td>
                                    <td>Instruktur</td>
                                    <td>Content Creator</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Umma Latifa Nur Aziza, S.E</td>
                                    <td>Instruktur</td>
                                    <td>Digital Marketing</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Hani Pratiwi</td>
                                    <td>Instruktur</td>
                                    <td>Kewirausahaan</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Erdawati</td>
                                    <td>Instruktur</td>
                                    <td>Teknologi Informasi</td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>Wardi Edi Cahyono</td>
                                    <td>Instruktur</td>
                                    <td>Teknologi Informasi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <style>
        .btn-gradient-blue {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff
        }

        .custom-card {
            background: none;
            border-radius: 15px;
            position: relative
        }

        .custom-card::before {
            content: "";
            position: absolute;
            inset: 0;
            padding: 2px;
            border-radius: 15px;
            background: linear-gradient(135deg, #000, #555);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
        }
    </style>
@endsection
