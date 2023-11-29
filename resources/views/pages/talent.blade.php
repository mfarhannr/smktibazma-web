@extends('layouts.app-pages')

@section('content')
    <!-- Hero -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50   uyujjj" style="
              background-image: url('./template/assets/img/examples/asrama.jpg');
            ">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 text-center mx-auto my-auto">
                 <h1 class="text-white phenomena-bold" style="font-size: 65px">
                  KATALOG TALENT
                </h1>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End Hero -->
    <div class="card card-body  mx-3 mx-md-4 mt-n6 mb-4">
        {{-- <section>
            <div class="container">
                <div class="d-flex justify-content-center mt-lg-n5">
                    <div class="card">
                        <ul class="text-center mb-0 p-2">
                            <li class="btn btn-info my-0" data-filter="All">All</li>
                            <li class="btn my-0" data-filter="Web">Web Developer</li>
                            <li class="btn my-0" data-filter="Gra">Graphic Designer</li>
                            <li class="btn my-0" data-filter="UI/">UI/UX Designer</li>
                            <li class="btn my-0" data-filter="Dig">Digital Marketer</li>
                        </ul>
                    </div>
                </div>
        </section> --}}

        <section class="py-3">
            <div class="container">
              <div class="row">
                <div class="container mx-auto">
                  <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-2 phenomena-bold text-lg" id="v-pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active" id="UI/UX" data-bs-toggle="pill" href="#UI/UX"
                          role="tab" aria-controls="UI/UX" aria-selected="true">
                          Web Developer
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1" id="badminton-tab" data-bs-toggle="pill" href="#badminton"
                          role="tab" aria-controls="badminton" aria-selected="false">
                          Graphic Designer
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1" id="renang-tab" data-bs-toggle="pill" href="#renang" role="tab"
                          aria-controls="renang" aria-selected="false">
                          UI/UX Designer
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1" id="esport" data-bs-toggle="pill" href="#esport" role="tab"
                          aria-controls="esport" aria-selected="false">
                          Digital Marketer
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>

        <section class="py-2">
            <div class="container">
                <div class="row justify-space-between py-2">
                    <div class="col-lg mx-auto">
                        <div class="input-group input-group-dynamic mb-4">
                            <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <input class="form-control" placeholder="keyword" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container talent ">
            <div class="row">
                @foreach ($KatalogTalenta as $item)
                    <div class="itemBox col-lg-3 col-sm-6" data-item="{{ substr($item->talent, 0, 3) }}">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image" href="singleTalent/{{$item->id}}">
                                    <img src="{{ asset('img/' . $item->gambar) }}" alt="img-blur-shadow"
                                        class="hover-img img-fluid border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="singleTalent/{{$item->id}}"
                                        class="text-dark font-weight-bold">{{ $item->name }}</a>
                                </h5>
                                <p id="{{ $item->bidang }}">
                                    {{ $item->bidang }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $KatalogTalenta->links() }}
                </div>
            </div>
        </div>
    </div>



@endsection
