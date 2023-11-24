<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News blog</title>
    <link rel="stylesheet" href="{{ asset('assets/styleh.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstraph.min.css') }}">
</head>
<body>
<section id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-blue ">

        <a class="navbar-brand " href="{{ url('/') }}" >News blog</a>
        <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarSupportedContent " aria-controls="navbarSupportedContent " aria-expanded="false " aria-label="Toggle navigation ">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent ">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active ">
                    <a class="nav-link" href="{{ url('/categories') }}">Categories<span class="sr-only ">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href=" "></a>
                </li>
            </ul>
        </div>

<section class="d-inline">
    @auth
        <span class="text-decoration-none text-white px-2">{{ Auth::user()->name }}</span>
        <a class="text-decoration-none text-white px-2" href="{{ route('logout') }}">logout</a>
    @else
        <a class="text-decoration-none text-white px-2" href="{{ route('login') }}">Login</a>
        <a class="text-decoration-none text-white px-2" href="{{ route('register') }}">Register</a>
    @endauth
</section>
</nav>

@yield('content')
</section>
<script src="{{ asset('assets/js/jqueryh.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstraph.min.js') }}"></script>
</body>
</html>