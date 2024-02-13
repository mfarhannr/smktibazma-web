@extends('layouts.app-pages')

@section('content')
    <!-- Hero -->
    <header class="bg-gradient-dark">
      <div class="page-header min-vh-50" style="
            background-image: url('./template/assets/img/examples/asrama.jpg');
          ">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container px-3">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white phenomena-bold text-uppercase">
                            Kegiatan
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
            <div class="container px-3">
                <div class="row align-items-center">
                    <div class="col-lg">
                        <div class="col-md">
                            <h1 class="phenomena-bold">
                                Kegiatan & Aktifitas di SMK TI BAZMA
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
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="heksagon" role="tabpanel"
                                aria-labelledby="heksagon-tab">
                                <section class="pb-0">
                                    <div class="row">
                                        @foreach ($kegiatan as $item)
                                            <div class="col-lg-3 mb-5">
                                                <div class="card">
                                                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                        <a class="d-block blur-shadow-image">
                                                            <img src="{{ asset('img/' . $item->gambar) }}"
                                                                class="img-fluid shadow border-radius-lg" loading="lazy"
                                                                style="width: 300px; height: 200px">
                                                        </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="phenomena-bold">{{ Str::limit($item->judul, 35) }}</h5>
                                                        <p>{!! Str::limit($item->deskripsi, 50) !!}</p>
                                                        <a href="/singlePrestasi/{{ $item->id }}"
                                                            class="btn bg-gradient-info btn-sm mb-0">
                                                            Selengkapnya
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Content-1 -->
        <!-- Start Content-2 -->
        {{-- <section class="py-3">
        <div class="container px-3">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 phenomena-bold">
                <span class="text-success">• </span>Futsal
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
              <a href="#" class="btn bg-gradient-info">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section>
      <section class="py-3">
        <div class="container px-3">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 phenomena-bold">
                <span class="text-success">• </span>Bulu Tangkis
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
              <a href="#" class="btn bg-gradient-info">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section>
      <section class="py-3">
        <div class="container px-3">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 phenomena-bold">
                <span class="text-success">• </span>Renang
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
              <a href="#" class="btn bg-gradient-info">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section>
      <section class="py-3">
        <div class="container px-3">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 phenomena-bold">
                <span class="text-success">• </span>E-Sport
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
              <a href="#" class="btn bg-gradient-info">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section>
      <section class="py-3">
        <div class="container px-3">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 phenomena-bold">
                <span class="text-success">• </span>Tahfidz
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
              <a href="#" class="btn bg-gradient-info">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section>
      <section class="py-3">
        <div class="container px-3">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-5 phenomena-bold">
                <span class="text-success">• </span>Class Meeting
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-3">
              <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                  <a class="d-block blur-shadow-image">
                    <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                      class="img-fluid shadow border-radius-lg" loading="lazy" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 my-4">
              <a href="#" class="btn bg-gradient-info">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section> --}}
        <!-- End Content-2 -->
    </div>
@endsection
