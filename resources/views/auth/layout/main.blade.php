<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/main') }}/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('assets/main') }}/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css') }}/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ asset('css') }}/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css') }}/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css') }}/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="">

    @include('auth.layout.navbar')

    @yield('auth')

  <!--   Core JS Files   -->
  <script src="{{ asset('js') }}/popper.min.js"></script>
  <script src="{{ asset('js') }}/bootstrap.min.js"></script>
  <script src="{{ asset('js') }}/perfect-scrollbar.min.js"></script>
  <script src="{{ asset('js') }}/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js') }}/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>