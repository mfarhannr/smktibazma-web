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
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <h3 class="phenomena-bold" style="font-size: 40px">
                                    <span class="text-success">• </span>Kegiatan
                                </h3>
                            </div>
                            <div class="col-lg-6 text-end my-auto">
                                <a href="#" class="text-info icon-move-right">
                                    Lebih banyak <i class="fas fa-arrow-right text-sm" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <section>
                            <div class="row">
                                @foreach ($postinganKegiatan as $k)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                            <a href="/singleBerita/{{$k->id}}" class="d-block blur-shadow-image">
                                                <img src="{{asset('img/' . $k->image)}}" alt="img-blur-shadow"
                                                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                                                    style="width: 300px; height: 200px;" />
                                            </a>
                                        </div>
                                        <div class="card-body px-0">
                                            <p class="text-sm">{{$k->created_at->format('F j, Y')}}</p>
                                            <h5>
                                                <a class="text-dark phenomena-bold">{{Str::limit($k->name, 35)}}</a>
                                            </h5>
                                            <p>
                                                {!! Str::limit($k->deskripsi, 150) !!}
                                            </p>
                                            <a href="/singleBerita/{{$k->id}}" class="btn btn-outline-info mt-2">
                                                Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{-- <div class="row">
                                <div class="col-lg-3">
                                    <div class="nav-wrapper position-relative">
                                        <ul class="nav nav-pills nav-fill flex-column p-3 phenomena-bold text-lg"
                                            id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            @foreach ($allCategory as $item)
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="{{$item->id}}"
                                                    href="/{{$item->id}}" >{{$item->name}}</a>
                                                </li>
                                            @endforeach
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" id="kegiatan-tab" data-bs-toggle="pill"
                                                    href="/berita/{{ }}" role="tab" aria-controls="kegiatan"
                                                    aria-selected="false">Kegiatan</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link active" id="{{$item->id}}"
                                                    href="/{{$item->id}}">{{$item->name}}</a>
                                            </li>
                                            @endforeach
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
                                                                    <a href="/singleBerita{{$items->id}}"
                                                                        class="text-dark phenomena-bold">{{Str::limit($items->name,
                                                                        35)}}</a>
                                                                </h4>
                                                                <p>
                                                                    {!! Str::limit($items->deskripsi, 150) !!}
                                                                </p>
                                                                <a href="/singleBerita{{$items->id}}"
                                                                    class="btn bg-gradient-info mt-4">
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
                            </div> --}}
                        </section>
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <h3 class="phenomena-bold" style="font-size: 40px">
                                    <span class="text-success">• </span>Prestasi
                                </h3>
                            </div>
                            <div class="col-lg-6 text-end my-auto">
                                <a href="#" class="text-info icon-move-right">
                                    Lebih banyak <i class="fas fa-arrow-right text-sm" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <section>
                            <div class="row">
                                @foreach ($postinganPrestasi as $p)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                            <a href="/singleBerita/{{$p->id}}" class="d-block blur-shadow-image">
                                                <img src="{{asset('img/' . $p->image)}}" alt="img-blur-shadow"
                                                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                                                    style="width: 300px; height: 200px;" />
                                            </a>
                                        </div>
                                        <div class="card-body px-0">
                                            <p class="text-sm">{{$p->created_at->format('F j, Y')}}</p>
                                            <h5>
                                                <a class="text-dark phenomena-bold">{{Str::limit($p->name, 35)}}</a>
                                            </h5>
                                            <p>
                                                {!! Str::limit($p->deskripsi, 150) !!}
                                            </p>
                                            <a href="/singleBerita/{{$p->id}}" class="btn btn-outline-info mt-2">
                                                Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>
                        {{-- <section>
                            <div class="row">
                                @foreach ($allPostingan as $item)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                            <a href="/singleBerita/{{$item->id}}" class="d-block blur-shadow-image">
                                                <img src="{{asset('img/' . $item->image)}}" alt="img-blur-shadow"
                                                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                                                    style="width: 300px; height: 200px;" />
                                            </a>
                                        </div>
                                        <div class="card-body px-0">
                                            <p class="text-sm">{{$item->created_at->format('F j, Y')}}</p>
                                            <h5>
                                                <a class="text-dark phenomena-bold">{{Str::limit($item->name, 35)}}</a>
                                            </h5>
                                            <p>
                                                {!! Str::limit($item->deskripsi, 150) !!}
                                            </p>
                                            <a href="/singleBerita/{{$item->id}}" class="btn btn-outline-info mt-2">
                                                Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </section> --}}
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <h3 class="phenomena-bold" style="font-size: 40px">
                                    <span class="text-success">• </span>Lomba
                                </h3>
                            </div>
                            <div class="col-lg-6 text-end my-auto">
                                <a href="#" class="text-info icon-move-right">
                                    Lebih banyak <i class="fas fa-arrow-right text-sm" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <section>
                            <div class="row">
                                @foreach ($postinganLomba as $L)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="card card-plain">
                                        <div class="card-header p-0 position-relative">
                                            <a href="/singleBerita/{{$L->id}}" class="d-block blur-shadow-image">
                                                <img src="{{asset('img/' . $L->image)}}" alt="img-blur-shadow"
                                                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                                                    style="width: 300px; height: 200px;" />
                                            </a>
                                        </div>
                                        <div class="card-body px-0">
                                            <p class="text-sm">{{$L->created_at->format('F j, Y')}}</p>
                                            <h5>
                                                <a class="text-dark phenomena-bold">{{Str::limit($L->name, 35)}}</a>
                                            </h5>
                                            <p>
                                                {!! Str::limit($L->deskripsi, 150) !!}
                                            </p>
                                            <a href="/singleBerita/{{$L->id}}" class="btn btn-outline-info mt-2">
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
    </section>
    <!-- End of Content-4 -->
</div>
@endsection