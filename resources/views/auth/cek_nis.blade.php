<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Database</title>
    <link rel="stylesheet" href="{{ url('/dbapps') }}/assets/spectre/spectre.min.css" />
    <link rel="stylesheet" href="{{ url('/dbapps') }}/assets/lineawesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('/dbapps') }}/css/app.css" />
</head>

<body>
    <div class="centerwrap">
        <div class="login">
            <div class="kiri">
                <h4 class="text-center">DATABASE APPLICATION</h4>
                <h5 class="text-center">SDIT Harapan Umat Jember</h5>
                <img class="p-centered" src="{{ url('/dbapps') }}/img/loginback.svg" />
            </div>

            <div class="kanan bg-primary">
                <h5 class="text-center">Berhasil login dengan Google </h5>
                <h5 class="text-center">Silahkan Klaim NISN</h5>
                <br>

                <form method="POST" action="{{ route('input_klaim_nis') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group my-2">
                        <div class="has-icon-left">
                            <input type="text" id="nis" class="form-input" placeholder="Nomor Induk Siswa"
                                name="nisn" />
                            <i class="las la-user form-icon text-primary"></i>
                        </div>
                    </div>
                    <br />
                    <button class="btn col-12 text-large" type="submit">Klaim NIS</button>
                </form>
                <a href="{{ route('guru.input') }}" class="btn btn-secondary">Guru / Pegawai</a>

            </div>
        </div>
    </div>
    <script src="{{ url('dbapps') }}/js/tata.js"></script>


    @if (Session::has('success'))
        <script>
            tata.success("OK", "{!! Session::get('success') !!}")
        </script>
    @endif
</body>


</html>
