@extends('layouts.app-pages')

@section('content')
    <!-- Hero -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50"
            style="
            background-image: url('./template/assets/img/examples/asrama.jpg');
          ">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white phenomena-bold">
                            PPDB
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Hero -->

    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 he">
        <!-- Content-1 -->

        <section class="py-4">
            <div class="container px-3">
                <div class="row align-items-center">
                    <div class="col-lg">
                        <div class="col-md">
                            {{-- <div class="row gx-1"> --}}
                            {{-- @foreach ($ppdb as $item) --}}
                            {{-- <div class="col-lg-2 col-md-4 col-6"> --}}
                            <img src="/template/assets/img/ppdb.png" class="w-100 img-fluid mb-5" alt="">
                            {{-- @endforeach --}}

                            <div class="mt- text-justify">
                                <p style="font-weight:400">
                                    SMK Teknologi Informasi berasrama dengan kualitas bagus tapi gratis? Emang boleeeh?🤯
                                </p>
                                <p>
                                    Biaya pendidikan bukan lagi hambatan buat kamu yang memiliki minat dan bakat di bidang
                                    digital! SMK TI BAZMA membuka peluang dan kesempatan ini untuk kamu!
                                </p>
                                <p style="font-weight:500">
                                    DAFTAR SEGERA! Penerimaan Peserta Didik Baru (PPDB) Islamic Boarding school SMK TI BAZMA
                                    TP 2024/2025
                                </p>
                                <p>
                                    SMK TI BAZMA Islamic Boarding School merupakan sekolah vokasi berasrama yang fasilitas
                                    maupun operasionalnya didanai dari pengelolaan ZISWAF dan sumber dana sosial kemanusiaan
                                    lainnya yang diamanahkan oleh masyarakat.
                                </p>
                                <p>
                                    Kami membuka Penerimaan Peserta Didik Baru (PPDB) Angkatan 4 Tahun Pelajaran 2024/2025.
                                    Disediakan beasiswa hingga 100%.
                                </p>
                                <p>
                                    Kompetensi Keahlian :<br>
                                    SIJA (Sistem Informatika, Jaringan & Aplikasi) dengan kombinasi kurikulum berbasis
                                    asrama yang ditempuh selama 4 tahun (3 tahun pembelajaran di sekolah dan 1 tahun Praktik
                                    kerja Lapang).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End of Content-1 -->

        <!-- Content-2 -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="mx-auto">
                        <div class="card">
                            <div class="accordion p-3 text-justify" id="accordionPricing">
                                <div class="accordion-item mb-3">
                                    <h3 class="accordion-header phenomena-bold" id="headingOne">
                                        <button class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            Persyaratan Calon Siswa :
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionPricing">
                                        <div class="accordion-body">
                                            <ol style="text-align: justify">
                                                <li>
                                                    Laki-laki Muslim dan mampu membaca Al-Qur'an
                                                    dengan baik;
                                                </li>
                                                <li>
                                                    Berasal dari keluarga tidak mampu (dibuktikan dengan SKTM dari Masjid
                                                    terdekat);
                                                </li>
                                                <li>
                                                    Lulus jenjang SMP/MTs/Sederajat pada TP 2023 atau
                                                    2024;
                                                </li>
                                                <li>
                                                    Usia maksimal 17 tahun pada tanggal 30 Juni 2024;
                                                </li>
                                                <li>
                                                    Sehat jasmani dan rohani (tidak buta warna, tidak
                                                    merokok dan tidak mempunyai penyakit menular);
                                                </li>
                                                <li>
                                                    Mendapat persetujuan Orangtua/Wali untuk tinggal
                                                    di asrama selama masa pendidikan;
                                                </li>
                                                <li>
                                                    Memiliki minat yang tinggi terhadap dunia digital
                                                    dan teknologi informasi.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header phenomena-bold" id="headingTwo">
                                        <button class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Upload Dokumen Pendukung :
                                            <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                            <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                aria-hidden="true"></i>
                                        </button>
                                    </h3>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionPricing">
                                        <div class="accordion-body">
                                            <ol style="text-align: justify">
                                                <li>Kartu Keluarga;</li>
                                                <li>Pas foto berwarna terbaru;</li>
                                                <li>SKTM dari Masjid Setempat (Download Template);</li>
                                                <li>Surat rekomendasi Kepala Sekolah/Wali Kelas/Guru SMP
                                                    <i><a href="https://drive.google.com/uc?export=donwload&amp;id=1YcNhyzV7zS7xfHP8SzxIg0aZS_c14_Uh"
                                                            target="_blank" class="text-danger">(Download Template)</a></i>;
                                                </li>
                                                <li>Foto berwarna rumah yang ditempati (tampak depan, tampak samping, kamar
                                                    tidur, ruang tamu, dapur, dan kamar mandi);</li>
                                                <li>
                                                    Foto berwarna rumah yang ditempati (tampak depan,
                                                    tampak samping, kamar tidur, ruang tamu dan kamar
                                                    mandi);
                                                </li>
                                                <li>
                                                    Membuat esai/karangan bebas tentang “Peran saya sebagai pemuda di Era
                                                    Digital” <i><a
                                                            href="https://drive.google.com/uc?export=donwload&amp;id=1FRPRFF3OMk9ckz8obCZJDmXYuLUIu7jU"
                                                            target="_blank" class="text-danger">(Download
                                                            Ketentuan)</a></i>;
                                                </li>
                                                <li>Input nilai rapor semester 3-5.</li>
                                            </ol>
                                            <a href="https://bit.ly/ppdbstb23" target="_blank"
                                                class="btn bg-gradient-info mt-4 mb-0">
                                                Formulir Pendaftaran
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- End of Content-2 -->

    <!-- Content-3 -->
    <section class="py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="col-md">
                        <div class="mt-4 text-justify">
                            <p>
                                ⏳Pengisian formulir dan upload berkas maksimal 31 Januari 2024 (pukul 23.59)
                            </p>
                            <p style="font-weight:500; margin: 0;">
                                Keterbatasan dalam mengakses formulir online dapat menghubungi narahubung Pak Dzikri :
                                0812-1593-1522
                            </p>
                            <a class="btn btn-success px-4 me-sm-3 mt-2" href="https://wa.me/6281215931522" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                                &nbsp; WhatsApp
                            </a>
                            <p style="margin: 16px 0px;">Terima Kasih,</p>
                            <p>TIM SELEKSI PPDB SMK TI BAZMA</p>
                            <p>Narahubung :</p>
                            <div class="row mt-3">
                                <div class="col-lg-3 mb-3">
                                    <div class="card card-body">
                                        <div class="author">
                                            <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                                                <i class="fi fi-brands-whatsapp"></i>
                                            </div>
                                            <h5 class="my-auto mx-auto phenomena-bold">
                                                08 1111 4433 9
                                            </h5>
                                        </div>
                                        <h5 class="my-auto mx-auto phenomena-bold">
                                            08 1111 4433 9
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-3">
                                <div class="card card-body">
                                    <div class="author">
                                        <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                                            <i class="fi fi-brands-instagram"></i>
                                        </div>
                                        <h5 class="my-auto mx-auto phenomena-bold">
                                            @smktibazma
                                        </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- End of Content-3 -->
    {{-- <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <h2>tdidak ada </h2>
                </div>
            </div>
        </div>
    </section> --}}


    </div>
@endsection
