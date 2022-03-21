<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Database</title>
    {{-- <link rel="stylesheet" href="{{ url('dbappss') }}/assets/spectre/spectre.min.css" /> --}}
    {{-- <link rel="stylesheet" href="{{ url('dbappss') }}/assets/lineawesome/css/line-awesome.min.css" /> --}}
    {{-- <link rel="stylesheet" href="{{ url('dbappss') }}/css/app.css" /> --}}
    {{-- <link rel="stylesheet" href="{{ url('dbappss') }}/css/modal.css" /> --}}
    {{-- <link rel="stylesheet" href="{{ url('dbappss') }}/assets/bootstrap-5/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="{{ url('dbappss') }}/assets/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ url('dbappss') }}/css/app.css" />
    <link rel="stylesheet" href="{{ url('dbappss') }}/css/login.css" />
    @yield('css')
    @stack('css')
</head>

<body>
    @php
        use YoHang88\LetterAvatar\LetterAvatar;
        $avatar = new LetterAvatar(Auth::user()->name);
        
        $nama_apk = DB::table('database_settings')
            ->where('name', 'app_name')
            ->first();
    @endphp

    <div id="sidebar" class="sidebar bg-primary">
        <h3 class="text-center text-light text-bold judul">{{ $nama_apk->value }}</h3>
        <h3 class="text-center text-light text-bold judulalt">{{ $nama_apk->info }}</h3>
        @include('layout.partials.avatar')
        @include('layout.partials.menu')
    </div>

    <div id="page" class="page">
        @include('layout.partials.navbar')
        @include('layout.partials.userpanel')
        <div class="leftright">
            @yield('content')
        </div>
    </div>

    <script src="{{ url('dbappss') }}/js/app.js"></script>
    <script src="{{ url('dbappss') }}/js/tata.js"></script>
    {{-- <script src="{{ url('dbappss') }}/assets/bootstrap-5/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="{{ url('dbappss') }}/js/app.js"></script> --}}

    @yield('js')
    @stack('js')
    @if (Session::has('success'))
        <script>
            tata.success("OK", "{!! Session::get('success') !!}")
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            tata.error("Gagal", "{!! Session::get('error') !!}")
        </script>
    @endif
    @if (Session::has('warn'))
        <script>
            tata.warn("Maaf", "{!! Session::get('warn') !!}")
        </script>
    @endif
    @if (Session::has('info'))
        <script>
            tata.info('Info', "{!! Session::get('info') !!}", {
                animate: 'slide',
                closeBtn: false,
            })
        </script>
    @endif
</body>

</html>
