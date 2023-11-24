<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP tutorial</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}" media="all" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" media="all" type="text/css">
</head>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<body>
    <section id="app">

        <section style="height: 100vh; background-color: #138496;" class="d-flex justify-content-center align-items-center">
            <section style="width: 20rem;">
                <h1 class="bg-warning rounded-top px-2 mb-0 py-3 h5">Login</h1>
                <section class="bg-light my-0 px-2"><small class="text-danger"></small></section>
                <form class="pt-3 pb-1 px-2 bg-light rounded-bottom" action="{{ route('login') }}" method="POST">
                @csrf
                    <section class="form-group">
                        <label for="email" :value="__('Email')">Email</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
                    </section>
                    <section class="form-group">
                        <label for="password" :value="__('Password')">Password</label>
                        <input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" >
                    </section>
                    <section class="mt-4 mb-2 d-flex justify-content-between">
                        <input type="submit" class="btn btn-success btn-sm" value="login">
                        <a class="" href="">register</a>
                    </section>
                </form>
            </section>
        </section>

    </section>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
