<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link id="pagestyle" href="{{ asset('./template/assets/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
    <link href="{{asset('./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
</head>

<body>
    <div class="col-10 mx-auto card border mt-10">
        <div class="row py-5">
            <div class="col-xl-4 col-md-6 px-5">
                <img class="img border-radius-md max-width-300 w-100 mt-n7 mx-auto d-block"
                    src="{{ asset('img/' . $KatalogTalenta->gambar) }}" loading="lazy" alt="card image">
                <a href="" class="h3 text-dark"><i class="fab fa-instagram-square">@</i></a>
            </div>
            <div class="col-xl-8 col-md-5 px-xxl-5 px-md-2 px-5 mt-4">
                <i class="material-icons  "></i>
                <h3 class=" mt-x1-0">{{ $KatalogTalenta->name }}</h3>
                <div class="">
                    {!! $KatalogTalenta->deskripsi !!}
                </div>

                <div class="buttons">
                    <button  class="btn bg-gradient-dark mt-4" onclick="window.open('./assets/CV Formal V.4.pdf')">View My CV</button>
                    <button  class="btn bg-gradient-dark mt-4" onclick="location.href=''">Portofolio</button>
                </div>
                <hr class="vertical start-100 ms-n5 d-xl-block d-none">
            </div>
            <div class="col-1"></div>
            <div class="col-xl-2 col-12 px-xl-0 px-5 my-xl-auto">
                </a>
            </div>
        </div>

    </div>
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
