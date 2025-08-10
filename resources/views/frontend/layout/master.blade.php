<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HumanResources &mdash; Free Business Website Template by Colorlib</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>

    <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in"
        data-animsition-out-class="fade-out">

    @include('frontend.layout.header');

    @yield('content');

    @include('frontend.layout.footer');

    </div>


    <script src="{{ asset('frontend/js/scripts-all.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
