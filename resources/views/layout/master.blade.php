<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('page_judul')</title>

    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/lineawesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/bootstrap-5/css/bootstrap.min.css" />
    {{-- <link rel="stylesheet" href="{{ url('new_theme') }}/assets/bootstrap-icons/bootstrap-icons.css" /> --}}
    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/overlay/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="{{ url('new_theme') }}/css/app.css" />

    @livewireStyles
</head>

<body>
    <div id="wrapper">
        <div class="background position-absolute"></div>

        <aside id="sidebar" class="position-fixed bg-white rounded shadow m-3 d-none d-sm-block">
            @include('layout.partials.sidemenu')
        </aside>

        <main id="page" class="p-3 position-relative d-flex flex-column vh-100">
            @include('layout.partials.navbar')
            @include('layout.partials.judul')
            @yield('content')
            @include('layout.partials.footer')
        </main>

    </div>
    @include('layout.partials.tata')

    @livewireScripts
    <script src="{{ url('new_theme') }}/assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('new_theme') }}/assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="{{ url('new_theme') }}/assets/overlay/OverlayScrollbars.min.js"></script>
    <script src="{{ url('new_theme') }}/js/app.js"></script>
    <script src="{{ url('new_theme') }}/js/tabdetail.js"></script>

    @stack('js')
    @stack('datatables')
</body>

</html>
