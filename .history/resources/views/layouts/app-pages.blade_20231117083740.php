<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bazma-Web</title>
  <link rel="apple-touch-icon" sizes="76x76" href="./pages/assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="./pages/assets/img/favicon.png" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./pages/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./pages/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
  {{-- Flaticon Icons --}}
  <link rel='stylesheet'
    href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <!-- CSS Files -->
  <link id="pagestyle" href="./pages/assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="about-us bg-gray-200">

    {{-- Nav --}}
    
    @include('layouts.navbars.guest.navbar')
    

    @yield('content')
    

    @include('layouts.footers.guest.footer')

    <!--   Core JS Files   -->
    <script src="./pages/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./pages/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./pages/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="./pages/assets/js/plugins/countup.min.js"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="./pages/assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
    <script>
      // get the element to animate
      var element = document.getElementById("count-stats");
      var elementHeight = element.clientHeight;

      // listen for scroll event and call animate function

      document.addEventListener("scroll", animate);

      // check if element is in view
      function inView() {
        // get window height
        var windowHeight = window.innerHeight;
        // get number of pixels that the document is scrolled
        var scrollY = window.scrollY || window.pageYOffset;
        // get current scroll position (distance from the top of the page to the bottom of the current viewport)
        var scrollPosition = scrollY + windowHeight;
        // get element position (distance from the top of the page to the bottom of the element)
        var elementPosition =
          element.getBoundingClientRect().top + scrollY + elementHeight;

        // is scroll position greater than element position? (is element in view?)
        if (scrollPosition > elementPosition) {
          return true;
        }

        return false;
      }

      var animateComplete = true;
      // animate element when it is in view
      function animate() {
        // is element in view?
        if (inView()) {
          if (animateComplete) {
            if (document.getElementById("state1")) {
              const countUp = new CountUp(
                "state1",
                document.getElementById("state1").getAttribute("countTo")
              );
              if (!countUp.error) {
                countUp.start();
              } else {
                console.error(countUp.error);
              }
            }
            if (document.getElementById("state2")) {
              const countUp1 = new CountUp(
                "state2",
                document.getElementById("state2").getAttribute("countTo")
              );
              if (!countUp1.error) {
                countUp1.start();
              } else {
                console.error(countUp1.error);
              }
            }
            if (document.getElementById("state3")) {
              const countUp2 = new CountUp(
                "state3",
                document.getElementById("state3").getAttribute("countTo")
              );
              if (!countUp2.error) {
                countUp2.start();
              } else {
                console.error(countUp2.error);
              }
            }
            animateComplete = false;
          }
        }
      }

      if (document.getElementById("typed")) {
        var typed = new Typed("#typed", {
          stringsElement: "#typed-strings",
          typeSpeed: 90,
          backSpeed: 90,
          backDelay: 200,
          startDelay: 500,
          loop: true,
        });
      }
    </script>
    <script>
      if (document.getElementsByClassName("page-header")) {
        window.onscroll = debounce(function () {
          var scrollPosition = window.pageYOffset;
          var bgParallax = document.querySelector(".page-header");
          var oVal = window.scrollY / 3;
          bgParallax.style.transform = "translate3d(0," + oVal + "px,0)";
        }, 6);
      }
    </script>
  </body>
</body>

</html>
