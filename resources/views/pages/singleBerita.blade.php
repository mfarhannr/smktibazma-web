@extends('layouts.app-pages')

@section('content')

<!-- Hero -->
<header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="
            background-image: url('{{asset('./template/assets/img/examples/asrama.jpg')}}');
          ">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white phenomena-bold" style="font-size: 65px">
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
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg">
                    <div class="col-md">
                        <h3 class="phenomena-bold" style="font-size: 40px">
                            {{$allPostingan->name}}
                        </h3>
                        <div class="align-items-center my-5">
                            <img src="{{asset('img/' . $allPostingan->image)}}" alt="img-blur-shadow" class="img-fluid border-radius-lg" loading="lazy" />
                        </div>
                        <p class="text-justify">
                            {!! $allPostingan->deskripsi !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Content-4 -->
</div>
@endsection