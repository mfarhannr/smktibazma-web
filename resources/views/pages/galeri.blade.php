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
  <section class="py-5">
    <div class="container px-3">
      <div class="row mb-5">
        <div class="col-lg-6">
          <h3 class="phenomena-bold" style="font-size: 40px">
            <span class="text-success">• </span>Futsal
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
          @foreach ($galeriFutsal as $F)
          <div class="col-lg-3 col-sm-6">
            <div class="card card-plain mb-4">
              <div class="card-header p-0 position-relative">
                <a href="#" class="d-block blur-shadow-image">
                  <img src="{{asset('img/' . $F->image)}}" alt="img-blur-shadow"
                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                    style="width: 300px; height: 200px;" />
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <div class="row mb-5">
        <div class="col-lg-6">
          <h3 class="phenomena-bold" style="font-size: 40px">
            <span class="text-success">• </span>Badminton
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
          @foreach ($galeriBadminton as $B)
          <div class="col-lg-3 col-sm-6">
            <div class="card card-plain mb-4">
              <div class="card-header p-0 position-relative">
                <a href="#" class="d-block blur-shadow-image">
                  <img src="{{asset('img/' . $B->image)}}" alt="img-blur-shadow"
                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                    style="width: 300px; height: 200px;" />
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <div class="row mb-5">
        <div class="col-lg-6">
          <h3 class="phenomena-bold" style="font-size: 40px">
            <span class="text-success">• </span>Pancak Silat
          </h3>
        </div>
        <div class="col-lg-6 text-end my-auto">
          <a href="#" class="text-info icon-move-right">
            Lebih banyak <i class="fas fa-arrow-right text-sm" aria-hidden="true"></i>
          </a>
        </div>
      </div><section>
        <div class="row">
          @foreach ($galeriPencakSilat as $P)
          <div class="col-lg-3 col-sm-6">
            <div class="card card-plain mb-4">
              <div class="card-header p-0 position-relative">
                <a href="#" class="d-block blur-shadow-image">
                  <img src="{{asset('img/' . $P->image)}}" alt="img-blur-shadow"
                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                    style="width: 300px; height: 200px;" />
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <div class="row mb-5">
        <div class="col-lg-6">
          <h3 class="phenomena-bold" style="font-size: 40px">
            <span class="text-success">• </span>E-Sport
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
          @foreach ($galeriEsport as $E)
          <div class="col-lg-3 col-sm-6">
            <div class="card card-plain mb-4">
              <div class="card-header p-0 position-relative">
                <a href="#" class="d-block blur-shadow-image">
                  <img src="{{asset('img/' . $E->image)}}" alt="img-blur-shadow"
                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                    style="width: 300px; height: 200px;" />
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <div class="row mb-5">
        <div class="col-lg-6">
          <h3 class="phenomena-bold" style="font-size: 40px">
            <span class="text-success">• </span>Class Meeting
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
          @foreach ($galeriClassMeeting as $C)
          <div class="col-lg-3 col-sm-6">
            <div class="card card-plain mb-4">
              <div class="card-header p-0 position-relative">
                <a href="#" class="d-block blur-shadow-image">
                  <img src="{{asset('img/' . $C->image)}}" alt="img-blur-shadow"
                    class="img-fluid shadow-sm border-radius-lg" loading="lazy"
                    style="width: 300px; height: 200px;" />
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <div class="row mb-5">
        <div class="col-lg-6">
          <h3 class="phenomena-bold" style="font-size: 40px">
            <span class="text-success">• </span>Tahfidz
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
          @foreach ($galeriTahfidz as $T)
          <div class="col-lg-3 col-sm-6">
            <div class="card card-plain mb-4">
              <div class="card-header p-0 position-relative">
                <a href="#" class="d-block blur-shadow-image">
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
  </section>
</div>
@endsection