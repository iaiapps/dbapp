@extends('layout.master')
@section('content')
    <div class="leftright">
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-left">Import</h3>
            {{-- <a href="#" class="btn btn-primary float-right"> x </a> --}}
        </div>
        <br><br>
        1. Download template disini <br>
        <a href="{{ route('admin.export_students') }}" class="btn btn-primary">Guru</a>
        <a href="{{ route('admin.export_students') }}" class="btn btn-primary">Siswa</a>
        <br><br>
        2. Pilih tipe import
        <select class="form-select" name="" id="">
            <option value="">Guru</option>
            <option value="">Siswa</option>
        </select><br><br>
        3. Upload disini<br>
        <input type="file" name="" id="">

    </div>
@endsection

@section('css')

    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

@endsection
@section('js')

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
