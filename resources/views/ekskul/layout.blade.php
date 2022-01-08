<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <style>
        /* .my-custom-scrollbar {
            position: relative;
            height: 345px;
            overflow: auto;
        } */

        .table-wrapper-scroll-y {
            /* display: block; */
        }

        div.scrollmenu {
            /* background-color: #333; */
            overflow: auto;
            white-space: nowrap;
        }

        /* div.scrollmenu a {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        } */

        /* div.scrollmenu a:hover {
            background-color: #777;
        } */

    </style>
    @livewireStyles

    <title>Ekstrakurikuler SDIT Harum</title>
</head>

<body>
    <p class="display-6 bg-primary text-white text-center p-1">@yield('judul')</p>
    <div class="container ">
        <div class="btn-group d-flex py-3" role="group">
            <a href="{{ route('ekskul.create') }}" type="button" class="btn btn-outline-primary vw-100 rounded-0">Pilih
                Ekskul</a>
            <a href="{{ route('ekskul.index') }}" type="button"
                class="btn btn-outline-primary vw-100 rounded-0">Data</a>
        </div>
        @yield('content')
    </div>

    @livewireScripts
    <script src="{{ url('dbapps') }}/js/tata.js"></script>
    @yield('js')
</body>

</html>
