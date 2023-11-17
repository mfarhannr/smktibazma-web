@extends('layouts.app-pages')

@section('content')
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('./pages/assets/foto/profil_sekolah.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Discover Your Potential Match <span id="typed">Talent</span></h1>
                        <p class="lead mb-4 text-white opacity-8">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type</p>
                        <button type="submit" class="btn bg-white text-dark">Create Account</button>

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
                            <li class="btn btn-info my-0" data-filter="all">All</li>
                            <li class="btn my-0" data-filter="web-developer">Web Developer</li>
                            <li class="btn my-0" data-filter="graphic-designer">Graphic Designer</li>
                            <li class="btn my-0" data-filter="ui-ux-designer">UI/UX Designer</li>
                            <li class="btn my-0" data-filter="digital-marketer">Digital Marketer</li>
                        </ul>
                    </div>
                </div>
        </section>

        <br>
        <br>
        <br>
        <br>
        <div class="container talent ">
            <div class="row">
                <div class="itemBox col-lg-3 col-sm-6" data-item="ui-ux-designer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/arif.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="hover-img img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/arif.html" class="text-dark font-weight-bold">A. Fauzan
                                    Arif H.</a>
                            </h5>
                            <p>
                                UI/UX Designer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="graphic-designer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/ahmad.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/ahmad.html" class="text-dark font-weight-bold">Ahmad
                                    Sibgatullah L.</a>
                            </h5>
                            <p>
                                Graphic Designer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="graphic-designer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/arya.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/arya.html" class="text-dark font-weight-bold">Ardian Arya
                                    Putra</a>
                            </h5>
                            <p>
                                Graphic Designer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="graphic-designer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/bayu.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/bayu.html" class="text-dark font-weight-bold">Bayu
                                    Bagaskara</a>
                            </h5>
                            <p>
                                Graphic Designer
                            </p>
                        </div>
                    </div>
                </div>



                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/bintang.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/bintang.html" class="text-dark font-weight-bold">Bintang
                                    Riski Sulistio</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/firman.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/firman.html"
                                    class="text-dark font-weight-bold">Firmansyah</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>


                <div class="itemBox col-lg-3 col-sm-6" data-item="graphic-designer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/hafis.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/hafis.html" class="text-dark font-weight-bold">Hafiz
                                    Alfitrah</a>
                            </h5>
                            <p>
                                Graphic Designer
                            </p>
                        </div>
                    </div>
                </div>


                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/hamidzan.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/hamidzan.html"
                                    class="text-dark font-weight-bold">Hamidzan P.B</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="ui-ux-designer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/reski.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/reski.html" class="text-dark font-weight-bold">Muhammad
                                    Rizqi</a>
                            </h5>
                            <p>
                                UI/UX Designer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/ilham.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/ilham.html" class="text-dark font-weight-bold">Ilham
                                    Alfiansyah</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/alam.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/alam.html" class="text-dark font-weight-bold">M.
                                    Alamsyah</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/frahan.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/frahan.html" class="text-dark font-weight-bold">Muhammad
                                    Farhan</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/frahan.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/fikri.html" class="text-dark font-weight-bold">M. Maulana
                                    Fikri</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>


                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/syahru.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/syahru.html" class="text-dark font-weight-bold">Muhammad
                                    Syahru</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/nabil.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/nabil.html" class="text-dark font-weight-bold">Nabil
                                    Rabbani</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="web-developer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/husen.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/husen.html" class="text-dark font-weight-bold">Vincent
                                    Rahadian U.</a>
                            </h5>
                            <p>
                                Web Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="ui-ux-designer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/yuda.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/yuda.html" class="text-dark font-weight-bold">Wahyuda</a>
                            </h5>
                            <p>
                                UI/UX Designer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="itemBox col-lg-3 col-sm-6" data-item="ui-ux-designer">
                    <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                            <a class="d-block blur-shadow-image" href="./pages/assets/tampilan/zaldi.html">
                                <img src="./pages/assets/foto/arya.png" alt="img-blur-shadow"
                                    class="img-fluid border-radius-lg" loading="lazy">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5>
                                <a href="./pages/assets/tampilan/zaldi.html" class="text-dark font-weight-bold">Zaldi</a>
                            </h5>
                            <p>
                                Graphic Designer
                            </p>
                        </div>
                    </div>
                </div>
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

    <section class="py-4">
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
    </section>

    <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
    <!-- -------- END HEADER 8 w/ card over right bg image ------- -->
    <!--   Core JS Files   -->
    <script src="./pages/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./pages/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./pages/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="./pages/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>

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
