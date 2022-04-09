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
    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/overlay/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/css/app.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/css/login.css" />
    @yield('css')
    @stack('css')
    @livewireStyles

</head>

<body>
    <div id="wrapper">
        <div class="background position-absolute"></div>

        <aside id="sidebar" class="position-fixed bg-white rounded shadow m-3">
            @include('layout.partials.avatar')
            @include('layout.partials.menu')
            @include('layout.partials.logout')
        </aside>

        <main id="page" class="p-3 position-relative d-flex flex-column vh-100">
            @include('layout.partials.navbar')
            @include('layout.partials.judul')
            @yield('content')
            @include('layout.partials.footer')
        </main>

    </div>
    @livewireScripts
    @stack('foot')
    <script src="{{ url('new_theme') }}/assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('new_theme') }}/assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="{{ url('new_theme') }}/assets/datatables/datatables.min.js"></script>
    <script src="{{ url('new_theme') }}/assets/overlay/OverlayScrollbars.min.js"></script>
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
