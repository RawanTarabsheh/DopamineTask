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
