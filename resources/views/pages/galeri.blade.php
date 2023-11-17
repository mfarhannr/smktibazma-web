@extends('layouts.app-pages')

@section('content')

    <!-- Hero -->
    <header class="bg-gradient-dark">
      <div class="page-header min-vh-75" style="
            background-image: url('./pages/assets/img/examples/asrama.jpg');
          ">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
               <h1 class="text-white phenomena-bold" style="font-size: 65px">
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
        <div class="container">
          <div class="row">
            <div class="container mx-auto">
              <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-2 phenomena-bold text-lg" id="v-pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 active" id="futsal-tab" data-bs-toggle="pill" href="#futsal"
                      role="tab" aria-controls="futsal" aria-selected="true">
                      Futsal
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" id="badminton-tab" data-bs-toggle="pill" href="#badminton"
                      role="tab" aria-controls="badminton" aria-selected="false">
                      Badminton
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" id="renang-tab" data-bs-toggle="pill" href="#renang" role="tab"
                      aria-controls="renang" aria-selected="false">
                      Renang
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" id="esport" data-bs-toggle="pill" href="#esport" role="tab"
                      aria-controls="esport" aria-selected="false">
                      E-Sport
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" id="clsm-tab" data-bs-toggle="pill" href="#clsm" role="tab"
                      aria-controls="clsm" aria-selected="false">
                      Class Meeting
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" id="tahfidz-tab" data-bs-toggle="pill" href="#tahfidz" role="tab"
                      aria-controls="tahfidz" aria-selected="false">
                      Tahfidz
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-3">
        <div class="container">
          <div class="me-auto my-auto text-start text-justify">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="futsal" role="tabpanel" aria-labelledby="futsal-tab">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/testimonial-6-2.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="badminton" role="tabpanel" aria-labelledby="badminton-tab">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/testimonial-6-3.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="renang" role="tabpanel" aria-labelledby="renang-tab">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="card card-plain">
                      <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                          <img src="./pages/assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                            class="img-fluid shadow border-radius-lg" loading="lazy" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    @endsection