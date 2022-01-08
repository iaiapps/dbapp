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
        .my-custom-scrollbar {
            position: relative;
            height: 345px;
            overflow: auto;
        }

        .table-wrapper-scroll-y {
            display: block;
        }

    </style>

    <title>Ekstrakurikuler SDIT Harum</title>
</head>

<body>
    <p class="display-6 bg-primary text-white text-center p-1">@yield('judul')</p>
    <div class="container ">
        <div class="btn-group d-flex py-3" role="group">
            <a href="pilih_ekskul" type="button" class="btn btn-outline-primary vw-100">Pilih Ekskul</a>
            <a href="cek_ekskul" type="button" class="btn btn-outline-primary vw-100">Cek Data Siswa</a>
        </div>
        @yield('content')
    </div>
</body>

</html>
