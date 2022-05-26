<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('new_theme') }}/assets/bootstrap-5/css/bootstrap.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('new_theme') }}/assets/bootstrap-icons/bootstrap-icons.css" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('new_theme') }}/css/app.css" /> --}}
    <link rel="stylesheet" href="{{ asset('new_theme') }}/css/login.css" />

    <title>@yield('page_title')</title>
</head>

<body>
    <div class="container p-3">
        @yield('content')
    </div>
    {{-- <script src="{{ asset('new_theme') }}/assets/bootstrap-5/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="{{ asset('new_theme') }}/assets/jquery/jquery-3.6.0.min.js"></script> --}}
</body>

</html>
