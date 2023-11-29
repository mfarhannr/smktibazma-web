{{-- @extends('layouts.app-pages')

@section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('template/assets/css/mediaquries.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/stayles.css') }}">
    <link id="pagestyle" href="./template/assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

</head>

<body>


    <a href=""><i class="fas fa-arrow-left"
        style="padding-top: 30px; font-size: 20px; color:black;"></i>
    <section id="profile">
        </a>
        <div class="section__pic-container">
            <i class=""></i>
            <img src="{{ asset('img/' . $KatalogTalenta->gambar) }}" alt="Farhan profile picture">
        </div>
        <div class="section__text">
            <p class="section__text__p1">Hello, I'm</p>
            <h1 class="title">{{ $KatalogTalenta->name }}</h1>
            <h3> saya adalah IT & {{ $KatalogTalenta->bidang }}</h3>
            <br>


            <div class="about mx-5" style="margin: 30px 0px">
                {!! $KatalogTalenta->deskripsi !!}
            </div>
            <br>
            <div class="btn-container">
                <button class="btn btn-color-2" onclick="window.open('./assets/CV Formal V.4.pdf')">
                    View My CV
                </button>
                <button class="btn btn-color-1" onclick="location.href='./#contact'">
                    Portfolio
                </button>
            </div>
            <br>
            <div id="socials-container">
                <img src="../foto/maill.png" alt="My LinkedIn profile" class="icon"
                    onclick="location.href='https://www.linkedin.com/in/muhammad-farhan-nurrahmat-latif-a6347028a/'">
                <img src="../foto/instagram.png" alt="My Instagram profile" class="icon"
                    onclick="location.href='https://www.instagram.com/farhan_nr.7/'">
                <img src="../foto/linkedin.png" alt="My LinkedIn profile" class="icon"
                    onclick="location.href='https://www.linkedin.com/in/muhammad-farhan-nurrahmat-latif-a6347028a/'">
                <img src="../foto/github.png" alt="My Github profile" class="icon"
                    onclick="location.href='https://github.com/farhannurrahmat'">
            </div>
        </div>
    </section>
    <div class="container-portofolio">
        <main class="row">
            <section class="col">
                <header class="title">
                    <h5>Organisasi</h5>
                </header>
                <div class="contents">
                    <div class="box">
                        <h3>Lorem</h3>
                        <p>
                            <li>lorem ipsum</li>
                        </p>
                    </div>
                    <div class="box">
                        <h3>school Degree</h3>
                        <p>
                            <li>lorem ipsumorem ipsumorem ipsumorem ipsumoremjhjhhhh </li>
                        </p>
                    </div>
                </div>
            </section>

            <section class="col">
                <header class="title">
                    <h5>Prestasi</h5>
                </header>
                <div class="contents">
                    <div class="box">
                        <h3>school Degree</h3>
                        <p>
                            <li>lorem ipsum</li>
                        </p>
                    </div>
                    <div class="box">
                        <h3>school Degree</h3>
                        <p>
                            <li>lorem ipsum</li>
                        </p>
                    </div>
                </div>
            </section>
            <section class="col">
                <header class="title">
                    <h5>Pengalaman</h5>
                </header>
                <div class="contents">
                    <div class="box">
                        <h3>school Degree</h3>
                        <p>
                            <li>lorem ipsum</li>
                        </p>
                    </div>
                    <div class="box">
                        <h3>school Degree</h3>
                        <p>
                            <li>lorem ipsum</li>
                        </p>
                    </div>
                </div>
            </section>
            <section class="col">
                <header class="title">
                    <h5>Experience</h5>
                </header>
                <div class="contents">
                    <div class="box">
                        <h3> school Degree</h3>
                        <p>
                            <li>lorem ipsum</li>
                        </p>
                    </div>
                    <div class="box">
                        <h3> school Degree</h3>
                        <p>
                            <li>lorem ipsum</li>
                        </p>
                    </div>
                </div>
            </section>
        </main>
    </div>


    <section id="projects">
        <p class="section__text__p1">Browse My Recent</p>
        <h1 class="title">Projects</h1>
        <div class="experience-details-container">
            <div class="about-containers">
                <div class="details-container color-container">
                    <div class="article-container">
                        <img src="../foto/1.png" alt="Project 1" class="project-img">
                    </div>
                    <h2 class="experience-sub-title project-title">E-commerce</h2>
                    <div class="btn-container">
                        <button class="btn btn-color-2 project-btn"
                            onclick="location.href='https://github.com/farhannurrahmat/Ecommerce'">
                            Github
                        </button>
                        <button class="btn btn-color-2 project-btn"
                            onclick="location.href='https://farhannurrahmat.github.io/Ecommerce/'">
                            Live Demo
                        </button>
                    </div>
                </div>
                <div class="details-container color-container">
                    <div class="article-container">
                        <img src="../foto/sekolah.jpg" alt="Project 2" class="project-img">
                    </div>
                    <h2 class="experience-sub-title project-title">School</h2>
                    <div class="btn-container">
                        <button class="btn btn-color-2 project-btn"
                            onclick="location.href='https://github.com/farhannurrahmat/Landing-Page-School'">
                            Github
                        </button>
                        <button class="btn btn-color-2 project-btn"
                            onclick="location.href='https://farhannurrahmat.github.io/Landing-Page-School/'">
                            Live Demo
                        </button>
                    </div>
                </div>
                <div class="details-container color-container">
                    <div class="article-container">
                        <img src="../foto/4.png" alt="Project 3" class="project-img">
                    </div>
                    <h2 class="experience-sub-title project-title">Business Portfolio</h2>
                    <div class="btn-container">
                        <button class="btn btn-color-2 project-btn"
                            onclick="location.href='https://github.com/farhannurrahmat/Business-Portofolio'">
                            Github
                        </button>
                        <button class="btn btn-color-2 project-btn"
                            onclick="location.href='https://farhannurrahmat.github.io/Business-Portofolio/'">
                            Live Demo
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="./template/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./template/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./template/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="./template/assets/js/plugins/countup.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example template etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="./template/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>
{{-- @endsection --}}
