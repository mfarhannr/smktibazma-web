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

        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg">
                        <div class="col-md">
                            {{-- <div class="row gx-1"> --}}
                            @foreach ($ppdb as $item)
                                {{-- <div class="col-lg-2 col-md-4 col-6"> --}}
                                <img src="{{ asset('img/' . $item->gambar) }}" class=" w-100" alt="">
                            @endforeach

                            <div class="mt- text-justify">
                                <p style="font-weight: bold">
                                <p>
                                    SMK Teknologi Informasi berasrama dengan kualitas bagus tapi gratis? Emang boleeeh?🤯
                                </p>
                                <p>
                                    Biaya pendidikan bukan lagi hambatan buat kamu yang memiliki minat dan bakat di bidang
                                    digital! SMK TI BAZMA membuka peluang dan kesempatan ini untuk kamu!
                                </p>
                                <p>
                                    𝗗𝗔𝗙𝗧𝗔𝗥 𝗦𝗘𝗚𝗘𝗥𝗔! 𝗣𝗲𝗻𝗲𝗿𝗶𝗺𝗮𝗮𝗻 𝗣𝗲𝘀𝗲𝗿𝘁𝗮 𝗗𝗶𝗱𝗶𝗸 𝗕𝗮𝗿𝘂
                                    (𝗣𝗣𝗗𝗕) 𝗜𝘀𝗹𝗮𝗺𝗶𝗰 𝗕𝗼𝗮𝗿𝗱𝗶𝗻𝗴 𝗦𝗰𝗵𝗼𝗼𝗹 𝗦𝗠𝗞 𝗧𝗜 𝗕𝗔𝗭𝗠𝗔 𝗧𝗣
                                    𝟮𝟬𝟮𝟰/𝟮𝟬𝟮𝟱
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
                                    Kompetensi Keahlian :
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
                                        <div class="accordion-body opacity-8">
                                            <ul style="text-align: justify">
                                                <li>
                                                    Laki-laki Muslim dan mampu membaca Al-Qur'an
                                                    dengan baik;
                                                </li>
                                                <li>
                                                    Berasal dari keluarga tidak mampu (dibuktikan
                                                    dengan SKTM dari pemerintah setempat);
                                                </li>
                                                <li>
                                                    Lulus jenjang SMP/MTs/Sederajat pada TP 2022 atau
                                                    2023;
                                                </li>
                                                <li>
                                                    Usia maksimal 17 tahun pada tanggal 30 Juni 2023;
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
                                            </ul>
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
                                        <div class="accordion-body opacity-8">
                                            <ul style="text-align: justify">
                                                <li>Kartu Keluarga;</li>
                                                <li>Akta Kelahiran/Surat Keterangan Lahir;</li>
                                                <li>Pas foto berwarna terbaru;</li>
                                                <li>SKTM;</li>
                                                <li>KIS/BPJS(jika ada);</li>
                                                <li>
                                                    Foto berwarna rumah yang ditempati (tampak depan,
                                                    tampak samping, kamar tidur, ruang tamu dan kamar
                                                    mandi);
                                                </li>
                                                <li>
                                                    Membuat essay/karangan bebas tentang diri sendiri
                                                    dan motivasi mendaftar PPDB SMK TI BAZMA.
                                                </li>
                                            </ul>
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
        </section>
        <!-- End of Content-2 -->

        <!-- Content-3 -->
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg">
                        <div class="col-md">
                            <div class="mt-4 text-justify">
                                <p>
                                    ⏳Pengisian formulir dan upload berkas maksimal 31 Mei
                                    2023 (jam 23.59)
                                </p>
                                <p>
                                    (Kuota Terbatas, jika sudah terpenuhi oleh siswa yang
                                    lolos seleksi maka pendaftaran akan ditutup)
                                </p>
                                <p class="text-bold">
                                    Calon siswa PPDB yang memiliki keterbatasan dalam
                                    mengakses pendaftaran dapat menghubungi pihak narahubung
                                </p>
                                <p>Terima Kasih,</p>
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
