<!DOCTYPE html>
<html lang="en">

<head>

    <!--  Meta Tag -->
    @include('layouts.meta_tag')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Jquery & Bootstrap-->
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lib/font-awesome/all.min.css') }}">

    @yield('style')
    <!-- End Style -->


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @yield('fonts')
    <!-- End Fonts -->
</head>

<body>

    @include('layouts.navbar')
    @yield('body')
    @include('layouts.footer')

    <!-- Jquery & Bootstrap JS-->
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/components/main.js') }}"></script>
    @yield('script')
    @if (config('app.Google_Map_Key') != null)
        <!-- Google Map -->
        @include('layouts.google_map')
        <!--  End Google Map -->
    @endif
</body>

</html>
