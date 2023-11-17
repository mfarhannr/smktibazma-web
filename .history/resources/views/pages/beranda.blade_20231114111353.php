@extends('layouts.app-pages')

@section('content')
    <!-- Hero Carousel -->
    <header>
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="page-header min-vh-75" style="background-image: url('./pages/assets/img/examples/asrama.jpg')"
              loading="lazy">
              <span class="mask bg-gradient-dark"></span>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 my-auto">
                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">
                      Pricing Plans
                    </h4>
                    <h1 class="text-white fadeIn2 fadeInBottom">
                      Work with the rockets
                    </h1>
                    <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">
                      Wealth creation is an evolutionarily recent positive-sum
                      game. Status is an old zero-sum game. Those attacking
                      wealth creation are often just seeking status.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="page-header min-vh-75" style="background-image: url('./pages/assets/img/examples/lapangan.jpg')"
              loading="lazy">
              <span class="mask bg-gradient-dark"></span>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 my-auto">
                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">
                      Pricing Plans
                    </h4>
                    <h1 class="text-white fadeIn2 fadeInBottom">
                      Work with the rockets
                    </h1>
                    <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">
                      Wealth creation is an evolutionarily recent positive-sum
                      game. Status is an old zero-sum game. Those attacking
                      wealth creation are often just seeking status.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="min-vh-75 position-absolute w-100 top-0">
          <a class="carousel-control-prev ms-0 ms-md-n5 mt-12 mb-n7 mt-md-0 mb-md-0" href="#carouselExampleControls"
            role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next ms-0 ms-md-n5 mt-12 mb-n7 mt-md-0 mb-md-0" href="#carouselExampleControls"
            role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
      </div>
    </header>
    <!-- End Hero -->

    <!-- Hero -->
    <!-- <header class="bg-gradient-dark">
        <div
          class="page-header min-vh-75"
          style="
            background-image: url('https://smktibazma.sch.id/static/media/asrama.d1fa6eec69bfc5732828.jpg');
          "
        >
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 text-center mx-auto my-auto">
                <h1 class="text-white phenomena-bold" style="font-size: 65px">
                  SMK TI BAZMA
                </h1>
                <p class="lead mb-4 text-white opacity-8">
                  Merajut Asa, Menjejak & Menebar Manfaat
                </p>
                <button type="submit" class="btn bg-gradient-info">INFO</button>
              </div>
            </div>
          </div>
        </div>
      </header> -->
    <!-- End Hero -->

    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 he">
      <!-- Content-1 -->
      <section class="py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg">
              <div class="col-md">
                <h1 class="phenomena-bold text-success" style="font-size: 60">
                  Islamic Boarding School<br />SMK TI BAZMA
                </h1>
                <div style="text-align: justify" class="mt-4">
                  <p>
                    Sekolah Menengah Kejuruan Teknologi Informasi Bazma (SMK
                    TI BAZMA) merupakan sekolah unggulan berasrama yang
                    diperuntukkan bagi anak-anak tidak mampu. Pembangunan
                    sekolah, baik fasilitas maupun operasional didanai dari
                    hasil pengelolaan wakaf dan sumber dana sosial kemanusiaan
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
                <button type="submit" class="btn bg-gradient-info mt-4">
                  Selengkapnya
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Content-1 -->

      <!-- Start Content-2 -->
      <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                <span class="text-success">• </span>Kegiatan Siswa
              </h3>
            </div>
          </div>
          <div style="text-align: justify" class="mb-4">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum,
              sit itaque molestias rem, omnis aliquam quisquam unde excepturi
              pariatur labore nihil qui maxime distinctio fugit repudiandae,
              architecto consequatur dolor ut.
            </p>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./pages/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">Bulu Tangkis</a>
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./pages/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">Futsal</a>
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./pages/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">Renang</a>
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./pages/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">E-Sport</a>
                  </h5>
                </div>
              </div>
            </div>
            <a href="/galeri" class="text-info text-sm icon-move-right">Read More
              <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </section>
      <!-- End Content-2 -->

      <!-- Start Content-2 -->
      <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                <span class="text-success">• </span>Berita
              </h3>
            </div>
          </div>
          <div style="text-align: justify" class="mb-4">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum,
              sit itaque molestias rem, omnis aliquam quisquam unde excepturi
              pariatur labore nihil qui maxime distinctio fugit repudiandae,
              architecto consequatur dolor ut.
            </p>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./pages/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">Bulu Tangkis</a>
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./pages/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">Futsal</a>
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./pages/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">Renang</a>
                  </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./pages/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
                <div class="card-body px-0">
                  <h5>
                    <a href="javascript:;" class="text-dark font-weight-bold">E-Sport</a>
                  </h5>
                </div>
              </div>
            </div>
            <a href="/galeri" class="text-info text-sm icon-move-right">Read More
              <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </section>
      <!-- End Content-2 -->
    </div>
    @endsection

