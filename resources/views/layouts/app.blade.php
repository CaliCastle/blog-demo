<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - 博客</title>

    <!-- Fonts -->
    <link href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body id="app-layout">

    @include('layouts.partials.navbar')

    @if(session('status'))
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <p class="well bg-{{ session('status') == 'success' ? 'success' : 'danger' }}">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    @yield('content')

    <!-- JavaScripts -->
    <script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
