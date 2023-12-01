@extends('layouts.app-pages')

@section('content')
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50" style="background-image: url('./template/assets/foto/profil_sekolah.jpg');">
          <span class="mask bg-gradient-dark opacity-6"></span>
          <div class="container">
            <div class="">
              <div class="col-lg-4 mt-xxl-n6 ">
                <h1 class="text-white ms-xxl-n8">Discover Your <br> Potential <br> Match <span id="typed">Talent</span></h1>
              </div>
            </div>
          </div>
        </div>
      </header>
    <div class="card card-body  mx-3 mx-md-4 mt-n6 mb-4">
        <section>
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
        </section>
        <section class="py-7">
            <div class="container">
              <div class="row justify-space-between py-2">
                <div class="col-lg-4 mx-auto">
                  <div class="input-group input-group-dynamic mb-4">
                    <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input class="form-control" placeholder="keyword" type="text" >
                  </div>
                </div>
              </div>
            </div>
          </section>
        <div class="container talent ">
            <div class="row">
                @foreach ($allTalent as $item)
                    <div class="itemBox col-lg-3 col-sm-6" data-item="{{ substr($item->talent, 0, 3) }}">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image" href="./template/assets/tampilan/arif.html">
                                    <img src="./template/assets/foto/arya.png" alt="img-blur-shadow"
                                        class="hover-img img-fluid border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="./template/assets/tampilan/arif.html"
                                        class="text-dark font-weight-bold">{{ $item->name }}</a>
                                </h5>
                                <p>
                                    {{ $item->talent }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $allTalent->links() }}

            </div>
        </div>
    </div>
    <script>
        let list = document.querySelectorAll('.btn');
        let itemBox = document.querySelectorAll('.itemBox');

        for (let i = 0; i < list.length; i++) {
            list[i].addEventListener('click', function() {
                for (let j = 0; j < list.length; j++) {
                    list[j].classList.remove('btn-info');
                }
                this.classList.add('btn-info')

                let datafilter = this.getAttribute('data-filter');

                for (let k = 0; k < itemBox.length; k++) {
                    itemBox[k].classList.remove('show');
                    itemBox[k].classList.add('hide');

                    if (itemBox[k].getAttribute('data-item') == datafilter || datafilter == "all") {
                        itemBox[k].classList.remove('hide')
                        itemBox[k].classList.add('show')
                    }

                }
            })
        }
    </script>

    {{-- <section class="py-4">
        <div class="container">
            <div class="row justify-space-between py-2">
                <div class="col-lg-4 mx-auto">
                    <ul class="pagination pagination-info m-4">
                        <li class="page-item">
                            <a class="page-link" href="javascript:;" aria-label="Previous">
                                <span aria-hidden="true"><i class="material-icons"
                                        aria-hidden="true">chevron_left</i></span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:;">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:;" aria-label="Next">
                                <span aria-hidden="true"><i class="material-icons"
                                        aria-hidden="true">chevron_right</i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
    <!-- -------- END HEADER 8 w/ card over right bg image ------- -->
    <!--   Core JS Files   -->
    <script src="./template/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./template/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./template/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example template etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="./template/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>

    {{-- </script> --}}
    <script>
        if (document.getElementsByClassName('page-header')) {
            window.onscroll = debounce(function() {
                var scrollPosition = window.pageYOffset;
                var bgParallax = document.querySelector('.page-header');
                var oVal = (window.scrollY / 3);
                bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
            }, 6);
        }
    </script>
    {{-- </div> --}}
@endsection
