@extends('layouts.app-pages')

@section('content')
<!-- Hero -->
<header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="
            background-image: url('./template/assets/img/examples/asrama.jpg');
          ">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container px-3">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white phenomena-bold" {{-- " style=" font-size: 60px" --}}>
                        SMK TI BAZMA
                    </h1>
                    <p class="lead mb-4 text-white opacity-8">
                        Merajut Asa, Menjejak & Menebar Manfaat
                    </p>
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
                        <h1 class="phenomena-bold text-success">
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
                        <a class="btn bg-gradient-info mt-4 text-white" href="/profil">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content-1 -->

    <!-- Content-1 -->
    <section class="py-5">
        <div class="container px-3">
            <div class="row align-items-center">
                <div class="col-lg">
                    <h2 class="mb-5 phenomena-bold">
                        <span class="text-success">• </span>Sambutan Kepala Sekolah
                    </h2>
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
                <div class="col-lg-4">
                    <div class="col-md d-flex justify-content-end">
                        <img src="{{asset('./template/assets/img/pakdahlan.png')}}" class="img-fluid border-radius-lg shadow-sm" alt="Image Kepala Sekolah">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content-1 -->

    <!-- Start Content-2 -->
    <section class="py-5">
        <div class="container px-3">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-5 phenomena-bold">
                        <span class="text-success">• </span>Kegiatan Siswa
                    </h2>
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
                                <img src="./template/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
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
                                <img src="./template/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
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
                                <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
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
                                <img src="./template/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
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
            </div>
            <a class="btn bg-gradient-info text-white" href="/galeri">Selengkapnya</a>
        </div>
    </section>
    <!-- End Content-2 -->

    <!-- Start Content-2 -->
    <section class="py-5">
        <div class="container px-3">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-5 phenomena-bold">
                        <span class="text-success">• </span>Berita
                    </h2>
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
                @foreach ($allPostingan as $item)
                <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a  href="/singleBerita/{{$item->id}}" class="d-block blur-shadow-image">
                                <img src="{{asset('img/' . $item->image)}}" alt="img-blur-shadow"
                                    class="img-fluid shadow-sm border-radius-lg" loading="lazy" style="width: auto; height: 200px;"/>
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a class="text-dark phenomena-bold">{{Str::limit($item->name, 35)}}</a>
                            </h5>
                            <p>
                                {!! Str::limit($item->deskripsi, 150) !!}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <a href="/berita" class="text-info text-sm icon-move-right">Selengkapnya
                    <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                </a> --}}
            </div>
            <a class="btn bg-gradient-info text-white" href="/berita">Selengkapnya</a>
        </div>
    </section>
    <!-- End Content-2 -->
</div>
@endsection