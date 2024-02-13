@extends('layouts.app-pages')

@section('content')
    <!-- Hero -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50"
            style="
            background-image: url('./template/assets/img/examples/asrama.jpg');
          ">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container px-3">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white phenomena-bold text-uppercase">
                            Prestasi & Penghargaan
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
                                Prestasi & Penghargaan beserta karya dan Portfolio anak SMK TI Bazma
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
                                        @foreach ($prestasi as $item)
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


    </div>
@endsection
