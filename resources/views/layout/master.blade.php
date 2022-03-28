<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('page_judul')</title>

    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/lineawesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/bootstrap-5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/datatables/datatables.min.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/css/app.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/css/login.css" />
    @yield('css')
    @stack('css')

</head>

<body>
    <div id="wrapper">
        <div class="background position-absolute"></div>

        {{-- @php
            $nama_apk = DB::table('database_settings')
                ->where('name', 'app_name')
                ->first();
        @endphp --}}

        <aside id="sidebar" class="position-fixed bg-white rounded shadow m-3">
            {{-- <h1 id="titleApp" class="fs-2 text-center fw-bold text-success py-2 mb-0 bg-light">
                {{ $nama_apk->value }}
            </h1> --}}
            @include('layout.partials.avatar')
            <hr class="m-0">
            @include('layout.partials.menu')
            @include('layout.partials.logout')
        </aside>

        <main id="page" class="p-3">
            @include('layout.partials.navbar')
            @include('layout.partials.judul')
            @yield('content')
            <footer class=" rounded p-1 text-center mt-3">
                <small> DBAPPS by Tim IT SDIT Harum Jember with
                    &#10084; </small>
            </footer>
        </main>

    </div>
    <script src="{{ url('new_theme') }}/assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('new_theme') }}/assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="{{ url('new_theme') }}/assets/datatables/datatables.min.js"></script>
    <script src="{{ url('new_theme') }}/js/tata.js"></script>
    <script src="{{ url('new_theme') }}/js/app.js"></script>
    <script src="{{ url('new_theme') }}/js/tabdetail.js"></script>

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
