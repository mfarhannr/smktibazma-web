@extends('layouts.app-pages')

@section('content')

    <!-- Hero -->
    <header class="bg-gradient-dark">
      <div class="page-header min-vh-75" style="
            background-image: url('./template/assets/img/examples/asrama.jpg');
          ">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
              <h1 class="text-white phenomena-bold" style="font-size: 65px">
                TENTANG 
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
                <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                  <span class="text-success">• </span>Profil Sekolah
                </h3>
                <div class="mt-4 text-justify">
                  <p>
                    <span style="font-weight: bold">Sekolah Menengah Kejuruan Teknologi Informasi Bazma
                      (SMK TI BAZMA)</span>
                    merupakan sekolah unggulan berasrama yang diperuntukkan
                    bagi anak-anak tidak mampu. Pembangunan sekolah, baik
                    fasilitas maupun operasional didanai dari hasil
                    pengelolaan wakaf dan sumber dana sosial kemanusiaan
                    lainnya yang diamanahkan oleh masyarakat.
                  </p>
                  <p>
                    SMK TI BAZMA menyelenggarakan program pembelajaran yang
                    ditempuh selama 4 tahun dengan siswa-siswa yang berasal
                    dari berbagai daerah di seluruh Indonesia. SMK TI Bazma
                    menyelenggarakan pendidikan dengan jurusan SIJA (Sistem
                    Informatika, Jaringan & Aplikasi) dengan kombinasi
                    kurikulum berbasis asrama.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Content-1 -->

      <!-- Content-2 -->
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg">
              <div class="col-md">
                <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                  <span class="text-success">• </span>Visi dan Misi
                </h3>
                <div style="text-align: justify" class="mt-4">
                  <h4 class="phenomena-bold">Visi</h4>
                  <p>
                    Menjadi sekolah yang melahirkan generasi berkarakter
                    unggul, berkepribadian Islami, mandiri, beprestasi dan
                    menebar manfaat.
                  </p>
                  <h4 class="phenomena-bold">Misi</h4>
                  <ul>
                    <li>Menyelenggarkan Sekolah Menengah Kejuruan (SMK) yang berkualitas,</li>
                    <li>Melahirkan lulusan yang berkarakter unggul siap kerja,</li>
                    <li>Mewujudkan generasi SDM yang berdaya saing global.</li>
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
                <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                  <span class="text-success">• </span>Makna Logo dan Warna
                </h3>
                <section>
                  <div class="row justify-space-between py-3">
                    <div class="col-lg-3">
                      <div class="nav-wrapper position-relative">
                        <ul class="nav nav-pills nav-fill flex-column p-3 phenomena-bold text-lg" id="v-pills-tab"
                          role="tablist" aria-orientation="vertical">
                          <li class="nav-item">
                            <a class="nav-link active" id="heksagon-tab" data-bs-toggle="pill" href="#heksagon"
                              role="tab" aria-controls="heksagon" aria-selected="true">Heksagon</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="rumah-tab" data-bs-toggle="pill" href="#rumah" role="tab"
                              aria-controls="rumah" aria-selected="false">Rumah</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" id="orang-tab" data-bs-toggle="pill" href="#orang" role="tab"
                              aria-controls="orang" aria-selected="false">Orang</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" id="huruf-tab" data-bs-toggle="pill" href="#huruf" role="tab"
                              aria-controls="huruf" aria-selected="false">Huruf IT</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-8 me-auto py-5 my-auto text-start text-justify">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="heksagon" role="tabpanel"
                          aria-labelledby="heksagon-tab">
                          <img class="width-32-px mb-3" src="./template/assets/img/examples/hexagon.png" alt="logo">
                          <p>
                            Mengintrepretasikan teknologi, terinspirasi dari bentuk sarang lebah yang diciptakan
                            Allah Ta'ala dengan teknologi yang sangat tinggi.
                          </p>
                        </div>
                        <div class="tab-pane fade" id="rumah" role="tabpanel" aria-labelledby="rumah-tab">
                          <img class="width-32-px mb-3" src="./template/assets/img/examples/rumah.png" alt="logo">
                          <p>
                            Mengintrepretasikan tempat tinggal yang nyaman; (Merupakan sekolah dengan model asrama).
                          </p>
                        </div>
                        <div class="tab-pane fade" id="orang" role="tabpanel" aria-labelledby="orang-tab">
                          <img class="width-32-px mb-3" src="./template/assets/img/examples/orang.png" alt="logo">
                          <p>
                            Representasi dari visi SMK TI BAZMA membentuk pribadi unggul, berkarakter dan menebar
                            manfaat untuk sesama.
                          </p>
                        </div>
                        <div class="tab-pane fade" id="huruf" role="tabpanel" aria-labelledby="huruf-tab">
                          <img class="width-32-px mb-3" src="./template/assets/img/examples/huruf.png" alt="logo">
                          <p>
                            Akronim dari Teknologi Informasi.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <div style="text-align: justify">
                  <p class="py-5">
                    Warna SMK TI BAZMA diturunkan dari warna Pertamina sebagai
                    ruh atas lahirnya sekolah, hal ini mewakili semangat
                    berbagi para Perwira Pertamina. Makna dari warna logo
                    adalah :
                  </p>
                </div>
                <section>
                  <div class="row justify-space-between">
                    <div class="col-lg-3">
                      <div class="nav-wrapper position-relative">
                        <ul class="nav nav-pills nav-fill flex-column p-3 phenomena-bold text-lg" id="v-pills-tab"
                          role="tablist" aria-orientation="vertical">
                          <li class="nav-item">
                            <a class="nav-link active" id="biru-tab" data-bs-toggle="pill" href="#biru" role="tab"
                              aria-controls="biru" aria-selected="true">Biru</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="hijau-tab" data-bs-toggle="pill" href="#hijau" role="tab"
                              aria-controls="hijau" aria-selected="false">Hijau</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" id="merah-tab" data-bs-toggle="pill" href="#merah" role="tab"
                              aria-controls="merah" aria-selected="false">Merah</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-8 me-auto my-auto text-start text-justify">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="biru" role="tabpanel" aria-labelledby="biru-tab">
                          <img class="width-32-px mb-3" src="./template/assets/img/examples/biru.png" alt="logo">
                          <p>Warna Biru mencerminkan tekad SMK TI BAZMA dalam mencetak insan yang progresif, inovatif
                            dan kreatif di bidang Teknologi Digital. Warna ini juga bermakna kekuatan serta kewibawaan
                            para insan agar mampu menjalankan khasanah keilmuan dengan penuh tanggung jawab.
                          </p>
                        </div>
                        <div class="tab-pane fade" id="hijau" role="tabpanel" aria-labelledby="hijau-tab">
                          <img class="width-32-px mb-3" src="./template/assets/img/examples/hijau.png" alt="logo">
                          <p>Warna Hijau mencerminkan identitas alam dan ke-Islam-an, sebagai entitas yang peduli
                            terhadap lingkungan dan berpegang teguh kepada nilai-nilai Islami dalam kehidupan.
                          </p>
                        </div>
                        <div class="tab-pane fade" id="merah" role="tabpanel" aria-labelledby="merah-tab">
                          <img class="width-32-px mb-3" src="./template/assets/img/examples/merah.png" alt="logo">
                          <p>Warna Merah mencerminkan keberanian, pantang menyerah serta mampu memancarkan energi
                            positif bagi sekitar. Warna ini mencitrakan SMK TI BAZMA sebagai refleksi semangat Para
                            Perwira dalam mengharumkan citra Bangsa Indonesia ke manca negara.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Content-3 -->

      <!-- Content-4 -->
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg">
              <div class="col-md">
                <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                  <span class="text-success">• </span>Fasilitas Sekolah
                </h3>
                <section class="pb-0">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="card mt-5 mt-md-0">
                          <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">
                            <a class="d-block blur-shadow-image">
                              <img src="./template/assets/img/examples/kelas.jpg" alt="img-blur-shadow"
                                class="img-fluid border-radius-lg" loading="lazy" />
                            </a>
                          </div>
                          <div class="card-body pt-3 text-center">
                            <a href="javascript:;">
                              <h5 class="phenomena-bold">
                                Ruang Kelas & Lab
                              </h5>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="card mt-5 mt-md-0">
                          <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">
                            <a class="d-block blur-shadow-image">
                              <img src="./template/assets/img/examples/masjid.jpg" alt="img-blur-shadow"
                                class="img-fluid border-radius-lg" loading="lazy" />
                            </a>
                            <div class="colored-shadow" style="
                                  background-image: url('./template/assets/img/examples/masjid.jpg');
                                "></div>
                          </div>
                          <div class="card-body pt-3 text-center">
                            <a href="javascript:;">
                              <h5 class="phenomena-bold">Masjid & Aula</h5>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="card mt-5 mt-md-0">
                          <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">
                            <a class="d-block blur-shadow-image">
                              <img src="./template/assets/img/examples/asrama.jpg" alt="img-blur-shadow"
                                class="img-fluid border-radius-lg" loading="lazy" />
                            </a>
                            <div class="colored-shadow" style="
                                  background-image: url('./template/assets/img/examples/asrama.jpg');
                                "></div>
                          </div>
                          <div class="card-body pt-3 text-center">
                            <a href="javascript:;">
                              <h5 class="phenomena-bold">Gedung Asrama</h5>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="card mt-5 mt-md-0">
                          <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">
                            <a class="d-block blur-shadow-image">
                              <img src="./template/assets/img/examples/lapangan.jpg" alt="img-blur-shadow"
                                class="img-fluid border-radius-lg" loading="lazy" />
                            </a>
                            <div class="colored-shadow" style="
                                  background-image: url('./template/assets/img/examples/lapangan.jpg');
                                "></div>
                          </div>
                          <div class="card-body pt-3 text-center">
                            <a href="javascript:;">
                              <h5 class="phenomena-bold">
                                Lapangan Olahraga
                              </h5>
                            </a>
                          </div>
                        </div>
                      </div>
                      <img src="./template/assets/img/examples/fasilitas.png" class="mt-5" />
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Content-4 -->

      <!-- Content-5 -->
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg">
              <div class="col-md">
                <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                  <span class="text-success">• </span>Fasilitas Asrama
                </h3>
                <div style="text-align: justify" class="mt-4">
                  <p>
                    SMK TI Bazma merupakan sekolah berbasis asrama dengan
                    fasilitas yang mumpuni demi mendukung proses belajar yang
                    nyaman dan kondusif. Fasilitas di asrama terdiri dari
                    fasilitas umum dan kamar tidur.
                  </p>
                  <h4 class="phenomena-bold">Fasilitas Umum :</h4>
                  <div class="row mt-3">
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-wifi"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Wifi Umum</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-bath"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Kamar Mandi</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-washer"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Tempat Cuci</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-clothes-hanger"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Area Menjemur</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-chalkboard-user"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Ruang Diskusi & Belajar</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-restaurant"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Dapur Bersama</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h4 class="phenomena-bold">Fasilitas Kamar Tidur :</h4>
                  <div class="row mt-3">
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-bed"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Kasur Busa</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-bed-bunk"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Tempat Tidur</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-archive"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Lemari Pakaian</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                      <div class="card card-body">
                        <div class="author">
                          <div class="icon icon-shape bg-gradient-info shadow-info text-center">
                            <i class="fi fi-rr-chair"></i>
                          </div>
                          <h5 class="my-auto mx-auto phenomena-bold">Meja & Kursi</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- End of Content-5 -->

      <!-- Content-6 -->
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg">
              <div class="col-md">
                <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                  <span class="text-success">• </span>Program Asrama
                </h3>
                <div style="text-align: justify" class="mt-4">
                  <ul>
                    <li>
                      Program bimbingan kepribadian dan kepemimpinan,
                    </li>
                    <li>
                      Program pemantapan tahsin dan tahfidz Al-Qur'an,
                    </li>
                    <li>
                      Program penumbuhan sikap kemandirian, toleransi dan
                      kerja sama,
                    </li>
                    <li>
                      Program pengembangan minat dan bakat dalam berbagai
                      bidang (olahraga, seni, budaya dan keterampilan
                      lainnya).
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Content-6 -->

      <!-- Content-7 -->
      <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="mx-auto">
              <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                <span class="text-success">• </span>Kompetensi Keahlian
              </h3>
              <div class="card">
                <div class="accordion p-3 text-justify" id="accordionPricing">
                  <div class="accordion-item mb-3">
                    <h3 class="accordion-header phenomena-bold" id="headingOne">
                      <button class="accordion-button border-bottom font-weight-bold text-start collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne">
                        SIJA (Sistem Informatika, Jaringan dan Aplikasi)
                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                          aria-hidden="true"></i>
                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                          aria-hidden="true"></i>
                      </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                      data-bs-parent="#accordionPricing">
                      <div class="accordion-body opacity-8">
                        Pembelajaran Jurusan SIJA di SMK TI BAZMA berlangsung
                        selama 4 tahun, dengan model pembelajaran 3 tahun di
                        sekolah sedangkan 1 tahun pembelajaran di industri
                        dalam bentuk Praktek Kerja Industri (PRAKERIN). Dengan
                        program studi 4 tahun ini, lulusan SIJA dapat setara
                        dengan D1 atau lebih unggul satu level dari program
                        keahlian 3 tahun lainnya.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item mb-3">
                    <h3 class="accordion-header phenomena-bold" id="headingTwo">
                      <button class="accordion-button border-bottom font-weight-bold text-start collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Apa saja yang dipelajari ?
                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                          aria-hidden="true"></i>
                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                          aria-hidden="true"></i>
                      </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionPricing">
                      <div class="accordion-body opacity-8">
                        Sistem komputer, jaringan komputer, pemrograman dasar,
                        dasar desain grafis , sistem IoT, komputasi awan,
                        sistem keamanan jaringan, materi sinkronisasi dengan
                        industri, serta produk kreatif dan kewirausahaan.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item mb-3">
                    <h3 class="accordion-header phenomena-bold" id="headingThree">
                      <button class="accordion-button border-bottom font-weight-bold text-start collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        Peluang Kerja Lulusan SIJA
                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                          aria-hidden="true"></i>
                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                          aria-hidden="true"></i>
                      </button>
                    </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionPricing">
                      <div class="accordion-body opacity-8">
                        <ol>
                          <li>Developer aplikasi (Programmer),</li>
                          <li>
                            IT support perangkat lunak, perangkat keras dan
                            jaringan,
                          </li>
                          <li>Konsultan IT (Kursus dan tutorial),</li>
                          <li>Wirausahawan di bidang IT,</li>
                          <li>
                            Wirausahawan di bidang desain grafis dan
                            percetakan,
                          </li>
                          <li>Membuat start-up.</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Content-7 -->
    </div>
    @endsection