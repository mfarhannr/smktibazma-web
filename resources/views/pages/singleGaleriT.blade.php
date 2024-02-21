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
                        GALERI
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
                    <section>
                        <div class="row">
                            @foreach($galeriT as $T)
                            <div class="col-lg-3 col-sm-6">
                                <div class="card card-plain mb-4">
                                    <div class="card-header p-0 position-relative">
                                        <img src="{{asset('img/' . $T->image)}}" alt="img-blur-shadow"
                                            class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                                            style="width: 300px; height: 200px;" />
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
    </section>
    <!-- End of Content-4 -->
</div>
@endsection