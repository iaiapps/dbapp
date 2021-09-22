<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Database</title>
    <link rel="stylesheet" href="{{ url('dbapps') }}/assets/spectre/spectre.min.css" />
    <link rel="stylesheet" href="{{ url('dbapps') }}/assets/lineawesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('dbapps') }}/css/app.css" />
    <link rel="stylesheet" href="{{ url('dbapps') }}/css/modal.css" />
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

    <script src="{{ url('dbapps') }}/js/app.js"></script>
    <script src="{{ url('dbapps') }}/js/tata.js"></script>

    @yield('js')
    @stack('js')
    @if (Session::has('success'))
        <script>
            tata.success("OK", "{!! Session::get('success') !!}")
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            tata.success("Gagal", "{!! Session::get('error') !!}")
        </script>
    @endif


</body>

</html>
