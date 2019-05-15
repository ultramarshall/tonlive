<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    @yield('head')
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>

     
    @include('layout._nav')
        <main class="main-content">
            @yield('content')
        </main>
    @include('layout._footer')
    <script src="{{ asset('js/page.js') }}"></script>

    @yield('footjs')
    
</body>

</html>