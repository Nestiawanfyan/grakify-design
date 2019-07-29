<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grakify.com | pengalaman olahraga yang tak pernah seasik ini</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap-reboot.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap-grid.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.css') }}" />
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/full-page/fullpage.css') }}" />

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla|Nunito" rel="stylesheet"> <!-- font-family: 'Nunito', sans-serif; || font-family: 'Cabin', sans-serif; -->

</head>
<body>

    <div id="landding">
        <!-- content -->
            @include('layouts.landing')

            <!-- Section 1 -->
                @yield('section1')

            <!-- Section 2 -->
                @yield('section2')
        
            <!-- Section 3 -->
                @yield('section3')

            <!-- Section 4 -->
                @yield('section4')


            <!-- footer -->
                @include('layouts.footer')
                @yield('footer')
        </div>

    </div> 

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('js/style.js') }}"></script>
</body>
</html>