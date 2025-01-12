<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://zaikotrack.smkn1cibinong.sch.id/img/sija-logo-bg.png">
    <title>{{$title}}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('dist/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/favicon.svg" type="image/x-icon')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">

    {{-- NI Icons --}}
    <link rel="stylesheet" href="https://zaikotrack.smkn1cibinong.sch.id/assets/css/nucleo-icons.css">
    <link rel="stylesheet" href="https://zaikotrack.smkn1cibinong.sch.id/assets/css/nucleo-svg.css">
</head>
<body>
    <div id="app" style="background-color: #435EBE; height:300px;">

        {{-- Sidebar --}}
        @yield('sidebar')


        {{-- Content --}}
        @yield('content')

        </div>
    </div>
    <script src="{{asset('dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('dist/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('dist/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('dist/assets/js/main.js')}}"></script>
</body>

</html>
