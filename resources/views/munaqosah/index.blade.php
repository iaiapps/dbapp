<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</head>

<body>
    <br>
    {{-- <hr> --}}
    <div class="container">
        <div class="justify-content-beetwen">
            <button class="btn btn-primary">Import</button>
            <button class="btn btn-primary">Export</button>
            <a href="{{ route('munaqosah.exportAll') }}" class="btn btn-success">Export JPG All</a>
        </div> <br>
        <table id="tabel-data" class="table table-responsive table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Juz</th>
                    <th>Daftar</th>
                    <th>Ujian</th>
                    <th>Status ujian</th>
                    <th>Kelancaran</th>
                    <th>Fasohah Makhroj</th>
                    <th>Tajwid</th>
                    <th>Grade</th>
                    <th>Hasil</th>
                    <th>Cetak</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($munaqosah as $m)
                    <tr>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->class->name }}</td>
                        <td>{{ $m->juz }}</td>
                        @php
                            \Carbon\Carbon::setLocale('id');
                        @endphp
                        <td> {{ \Carbon\Carbon::parse($m->register_date)->isoFormat('D MMMM Y') }}</td>
                        <td> {{ \Carbon\Carbon::parse($m->exam_date)->isoFormat('D MMMM Y') }}</td>
                        <td>{{ $m->exam_status }}</td>
                        <td>{{ $m->kelancaran }}</td>
                        <td>{{ $m->fasohah_makhroj }}</td>
                        <td>{{ $m->tajwid }}</td>
                        <td>{{ $m->grade }}</td>
                        <td>{{ $m->results }}</td>
                        <td>
                            <a href="{{ route('munaqosah.cetak', [$m->id, $m->name]) }}" target="_blank">Cetak</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>


</body>

</html>
