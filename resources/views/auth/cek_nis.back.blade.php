<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('/dbapps') }}/css/login.css" />

    <title>Klaim NIS</title>


</head>

<body>
    <div class="judul">
        <h2>DATABASE APPLICATIOsdN</h2>
        <h3>SDIT Harapan Umat Jember</h3>
    </div>
    <div class="containernis">
        <div class="klaimnis">
            <form method="POST" action="{{ route('input_klaim_nis') }}">
                @csrf
                @method('POST')
                <h3>KLAIM NIS</h3>
                <input type="text" placeholder="Nomor Induk Siswa " class="input" name="nisn" />
                <button type="submit" class="button">klaim</button>
            </form>
        </div>
    </div>
    </div>
</body>
<script src="{{ url('dbapps') }}/js/tata.js"></script>


@if (Session::has('success'))
    <script>
        tata.success("OK", "{!! Session::get('success') !!}")
    </script>
@endif

</html>
