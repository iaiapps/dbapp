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

    <div class="containernis">
        <div class="klaimnis">
            <br><br>
            <a href="{{ route('klaim_nis') }}" class="button">Siswa</a>
            <p style="text-align: center;color:gray">atau</p>
            <a href="{{ route('guru.input') }}" class="button">Guru / Karyawan</a>
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
