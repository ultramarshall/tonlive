<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Styles -->
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
  
        <main class="main-content">
            @yield('content')
        </main>
        
    <script src="{{ asset('js/page.js') }}"></script>
    @yield('footjs')
</body>

</html>