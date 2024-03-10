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
                            DONASI
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
                            <h2 class="phenomena-bold text-center">
                                "Support Kami Dengan <span class="text-success">Donasi</span> Anda"
                            </h2>
                            <div class="mt-4 text-justify">
                                <p>
                                    <span style="font-weight: 500">SMK TI BAZMA</span>
                                     adalah Lembaga Nirlaba yang berkhidmat
                                    mengangkat harkat sosial kemanusiaan dengan mendayagunakan dana zakat,
                                    infak/sedekah dan wakaf (Ziswaf) yang bersumber dari masyarakat. Dana yang
                                    terhimpun disalurkan dalam beragam bentuk program sosial, pendidikan, kesehatan,
                                    pelayanan dhuafa, penanganan bencana dan pemberdayaan ekonomi masyarakat di
                                    seluruh Indonesia.
                                </p>
                                <p>
                                    Salah satu program yang sedang digulirkan adalah wakaf Pembangunan SMK TI Bazma, sebuah
                                    model pengelolaan pendidikan
                                    yang diharapkan bisa mencetak kader-kader berkarakter unggul dan berdaya saing bersaing
                                    di era global.
                                </p>
                                <div class="col-lg-4">

                                    <div class="card card-body">
                                        <p>
                                            Salurkan Wakaf terbaik anda melalui <b>Bank Syariah Indonesia (BSI) :</b>
                                        </p>
                                        <img src="./template/assets/img/bsi.png" alt="">
                                        <h2 class="phenomena-bold my-5">
                                            711.88.444.88
                                        </h2>
                                        <p>
                                            A.N Yayasan Baituzzakah Pertamina
                                        </p>
                                        <p>
                                            Konfirmasi donasi : 0812 9077 1055
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        <!-- End of Content-1 -->
    </div>
@endsection
