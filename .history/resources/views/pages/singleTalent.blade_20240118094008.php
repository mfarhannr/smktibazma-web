<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="{{ asset('./template/assets/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('./assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('./assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

</head>

<body>
    {{-- card 1 --}}
    {{-- <div class="col-10 mx-auto">
        <i class="fa-solid fa-backward">Kembali</i>
    </div> --}}
    <div class="col-10 mx-auto card border mt-10">
        <div class="row py-5">
            <div class="col-xl-4 col-md-6 px-5">
                <img class="img border-radius-md max-width-300 w-100  mx-auto d-block"
                    src="{{ asset('img/' . $KatalogTalenta->gambar) }}" loading="lazy" alt="card image">
                {{-- media sosial --}}
                <div class="max-width-300 mx-auto mt-3">
                    <div class="row h4 text-center">
                        <div class="col">
                            <div class="dropdown dropdown-hover mx-2">
                                <a href="#" class=" d-flex cursor-pointer align-items-center"
                                    data-bs-toggle="dropdown" aria-expanded="false" id="Dropdown1">
                                    <i class="fab fa-instagram border-radius-lg"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-animation ms-n3 p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="Dropdown1">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            {{ $KatalogTalenta->instagram }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown dropdown-hover mx-2">
                                <a href="#" class=" d-flex cursor-pointer align-items-center"
                                    data-bs-toggle="dropdown" aria-expanded="false" id="Dropdown1">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-animation ms-n3 p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="Dropdown1">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            {{ $KatalogTalenta->linkedin }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown dropdown-hover mx-2">
                                <a href="#" class=" d-flex cursor-pointer align-items-center"
                                    data-bs-toggle="dropdown" aria-expanded="false" id="Dropdown1">
                                    <i class="fas fa-envelope"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-animation ms-n3 p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="Dropdown1">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            {{ $KatalogTalenta->email }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown dropdown-hover mx-2">
                                <a href="#" class=" d-flex cursor-pointer align-items-center"
                                    data-bs-toggle="dropdown" aria-expanded="false" id="Dropdown1">
                                    <i class="fab fa-github"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-animation ms-n3 p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="Dropdown1">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            {{ $KatalogTalenta->github }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="dropdown dropdown-hover mx-2">
                                <a href="#" class=" d-flex cursor-pointer align-items-center"
                                    data-bs-toggle="dropdown" aria-expanded="false" id="Dropdown1">
                                    <i class="fas fa-phone"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-animation ms-n3 p-3 border-radius-xl mt-0 mt-lg-3"
                                    aria-labelledby="Dropdown1">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            {{ $KatalogTalenta->nomor }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- media sosial --}}
            </div>
            <div class="col-xl-8 col-md-5 px-xxl-5 px-md-2 px-5 mt-4">
                <i class="material-icons"></i>
                <h3 class=" mt-x1-0">Hello, I'm {{ $KatalogTalenta->name }}</h3>
                <h5 class=" mt-x1-0">saya adalah IT & {{ $KatalogTalenta->bidang }}</h5>
                <div class="">
                    {!! $KatalogTalenta->deskripsi !!}
                </div>
                <div class="buttons">
                    <button class="btn bg-gradient-dark mt-4" onclick="window.open('./assets/CV Formal V.4.pdf')">View
                        My CV</button>
                    <button class="btn bg-gradient-dark mt-4" onclick="location.href='#'">Portofolio</button>
                </div>
                <hr class="vertical start-100 ms-n5 d-xl-block d-none">
            </div>
            <div class="col-1"></div>
            <div class="col-xl-2 col-12 px-xl-0 px-5 my-xl-auto">
                </a>
            </div>
        </div>
    </div>
    {{-- card 1 --}}
    {{-- card 2 --}}
    <div class="col-10 py-5 mx-auto">
        <div class="row gx-4">
            <div class="col-lg-6">
                <div class="card border">
                    <div class="card-header pb-0">
                        <h3>Organisasi</h3>
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side" data-timeline-axis-style="dotted">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                    <p class="text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        youre struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-danger">Order</span>
                                    <span class="badge badge-sm bg-gradient-danger">#1832412</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                    <p class="text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        youre struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-info">Server</span>
                                    <span class="badge badge-sm bg-gradient-info">Payments</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order
                                        #4395133
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                    <p class="text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        youre struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-warning">Card</span>
                                    <span class="badge badge-sm bg-gradient-warning">#4395133</span>
                                    <span class="badge badge-sm bg-gradient-warning">Priority</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="card border ">
                    <div class="card-header bg-transparent pb-0">
                        <h3 class="text-dark">Prestasi</h3>
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side" data-timeline-axis-style="dashed">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        you’re struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-danger">Order</span>
                                    <span class="badge badge-sm bg-gradient-danger">#1832412</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        you’re struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-info">Server</span>
                                    <span class="badge badge-sm bg-gradient-info">Payments</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order
                                        #4395133
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        you’re struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-warning">Card</span>
                                    <span class="badge badge-sm bg-gradient-warning">#4395133</span>
                                    <span class="badge badge-sm bg-gradient-warning">Priority</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- batas --}}
    <div class="col-10 py-2 mx-auto">
        <div class="row gx-4">
            <div class="col-lg-6">
                <div class="card border">
                    <div class="card-header pb-0">
                        <h3>Sertifikasi</h3>
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side" data-timeline-axis-style="dotted">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                    <p class="text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        youre struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-danger">Order</span>
                                    <span class="badge badge-sm bg-gradient-danger">#1832412</span>
                                </div>
                            </div>


                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                    <p class="text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        youre struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-info">Server</span>
                                    <span class="badge badge-sm bg-gradient-info">Payments</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order
                                        #4395133
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                    <p class="text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        youre struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-warning">Card</span>
                                    <span class="badge badge-sm bg-gradient-warning">#4395133</span>
                                    <span class="badge badge-sm bg-gradient-warning">Priority</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="card border ">
                    <div class="card-header bg-transparent pb-0">
                        <h3 class="text-dark">Pengalaman</h3>
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side" data-timeline-axis-style="dashed">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        you’re struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-danger">Order</span>
                                    <span class="badge badge-sm bg-gradient-danger">#1832412</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        you’re struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-info">Server</span>
                                    <span class="badge badge-sm bg-gradient-info">Payments</span>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step bg-dark">
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order
                                        #4395133
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                                    <p class="text-secondary text-sm mt-3 mb-2">
                                        People care about how you see the world, how you think, what motivates you, what
                                        you’re struggling with or afraid of.
                                    </p>
                                    <span class="badge badge-sm bg-gradient-warning">Card</span>
                                    <span class="badge badge-sm bg-gradient-warning">#4395133</span>
                                    <span class="badge badge-sm bg-gradient-warning">Priority</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- card 2 --}}
    {{-- card 3 --}}
    <div class="col-10 py-5 mx-auto">
        <div class="row">
            <div class="col-lg-3 mb-3  mt-lg-0 mt-4">
                <div class="card border">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                alt="img-colored-shadow" class="img-fluid border-radius-lg">
                        </a>
                        <div class="colored-shadow"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="font-weight-normal">
                            <a href="javascript:;">Get insights on Search</a>
                        </h5>
                        <p class="mb-0">
                            Website visitors today demand a frictionless user expericence — especially when using
                            search.
                            Because of the hight standards.
                        </p>
                        <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3  mt-lg-0 mt-4">
                <div class="card border">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                alt="img-colored-shadow" class="img-fluid border-radius-lg">
                        </a>
                        <div class="colored-shadow"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="font-weight-normal">
                            <a href="javascript:;">Get insights on Search</a>
                        </h5>
                        <p class="mb-0">
                            Website visitors today demand a frictionless user expericence — especially when using
                            search.
                            Because of the hight standards.
                        </p>
                        <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3  mt-lg-0 mt-4">
                <div class="card border">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                alt="img-colored-shadow" class="img-fluid border-radius-lg">
                        </a>
                        <div class="colored-shadow"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="font-weight-normal">
                            <a href="javascript:;">Get insights on Search</a>
                        </h5>
                        <p class="mb-0">
                            Website visitors today demand a frictionless user expericence — especially when using
                            search.
                            Because of the hight standards.
                        </p>
                        <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3  mt-lg-0 mt-4">
                <div class="card border">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <a class="d-block blur-shadow-image">
                            <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                                alt="img-colored-shadow" class="img-fluid border-radius-lg">
                        </a>
                        <div class="colored-shadow"
                            style="background-image: url(&quot;https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80&quot;);">
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="font-weight-normal">
                            <a href="javascript:;">Get insights on Search</a>
                        </h5>
                        <p class="mb-0">
                            Website visitors today demand a frictionless user expericence — especially when using
                            search.
                            Because of the hight standards.
                        </p>
                        <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- card 3 --}}

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
