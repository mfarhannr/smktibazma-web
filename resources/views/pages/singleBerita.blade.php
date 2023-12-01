@extends('layouts.app-pages')

@section('content')

<!-- Hero -->
<header class="bg-gradient-dark">
    <div class="page-header min-vh-50" style="
            background-image: url('{{asset('./template/assets/img/examples/asrama.jpg')}}');
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
                        <h2 class="phenomena-bold">
                            {{$allPostingan->name}}
                        </h2>
                        <p class="text-muted bold">Dibuat Pada : {{$allPostingan->created_at}}</p>
                        <div class="my-5">
                            <img src="{{asset('img/' . $allPostingan->image)}}" class="img-fluid border-radius-lg" loading="lazy"/>
                        </div>
                        <div style="text-align: justify;">
                            {!! $allPostingan->deskripsi !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content-4 -->
</div>
@endsection