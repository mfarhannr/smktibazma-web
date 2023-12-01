@extends('layouts.app-pages')

@section('content')

<!-- Hero -->
<header class="bg-gradient-dark">
    <div class="page-header min-vh-50" style="
            background-image: url('./template/assets/img/examples/asrama.jpg');
          ">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white phenomena-bold">
                        BERITA
                    </h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Hero -->

<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 he">
    <!-- Content-4 -->
    <section class="py-5">
        <div class="container px-3">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="col-md">
                        <h3 class="mb-5 phenomena-bold" style="font-size: 40px">
                            Berita Terbaru
                        </h3>
                        <section>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="nav-wrapper position-relative">
                                        <ul class="nav nav-pills nav-fill flex-column p-3 phenomena-bold text-lg"
                                            id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            @foreach ($allCategory as $item)
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="{{$item->id}}"
                                                    href="/berita .{{$item->id}}" >{{$item->name}}</a>
                                                </li>
                                            @endforeach
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" id="kegiatan-tab" data-bs-toggle="pill"
                                                    href="/berita/{{ }}" role="tab" aria-controls="kegiatan"
                                                    aria-selected="false">Kegiatan</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="orang-tab" data-bs-toggle="pill" href="#orang"
                                                    role="tab" aria-controls="orang" aria-selected="false">Orang</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="huruf-tab" data-bs-toggle="pill" href="#huruf"
                                                    role="tab" aria-controls="huruf" aria-selected="false">Huruf IT</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="" role="tabpanel"
                                            aria-labelledby="all">
                                            <section class="pb-0">
                                                <div class="row">
                                                    @foreach ($allPostingan as $items)
                                                    <div class="card card-plain card-blog mb-5">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4">
                                                                <div
                                                                    class="card-image position-relative border-radius-lg">
                                                                    <div class="blur-shadow-image">
                                                                        <img class="img-fluid border-radius-lg shadow-sm"
                                                                            src="{{asset('img/'.$items->image)}}"
                                                                            loading="lazy"
                                                                            style="width: 300px; height: 200px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7 col-md-7 my-sm-auto mt-3 ms-sm-3">
                                                                <h4>
                                                                    <a href="/singleBerita/{{$items->id}}"
                                                                        class="text-dark phenomena-bold">{{Str::limit($items->name,
                                                                        35)}}</a>
                                                                </h4>
                                                                <p>
                                                                    {!! Str::limit($items->deskripsi, 150) !!}
                                                                </p>
                                                                <a href="/singleBerita/{{$items->id}}"
                                                                    class="btn bg-gradient-info mt-4">
                                                                    Selengkapnya
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-lg-4 mb-5">
                                                        <div class="card mt-5 mt-md-0">
                                                            <div
                                                                class="card-header p-0 mx-3 mt-n4 position-relative z-index-2">
                                                                <a class="d-block blur-shadow-image">
                                                                    <img src="{{asset('img/' . $item->image)}}"
                                                                        alt="img-blur-shadow"
                                                                        class="img-fluid border-radius-lg shadow-sm"
                                                                        loading="lazy"
                                                                        style="width: 300px; height: 200px;" />
                                                                </a>
                                                            </div>
                                                            <div class="card-body pt-3">
                                                                <h5 class="phenomena-bold">
                                                                    {{Str::limit($item->name, 35)}}
                                                                </h5>
                                                                <p>
                                                                    {!! Str::limit($item->deskripsi, 50) !!}
                                                                </p>
                                                                <a href="/singleBerita/{{$item->id}}"
                                                                    class="btn bg-gradient-info mt-4">
                                                                    Selengkapnya
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    @endforeach
                                                </div>
                                            </section>
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
    <!-- End of Content-4 -->
</div>
@endsection