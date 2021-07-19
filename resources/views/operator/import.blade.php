@extends('layout.master')
@section('content')
    <div class="leftright">
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-left">Import</h3>
            {{-- <a href="#" class="btn btn-primary float-right"> x </a> --}}
        </div>
        <br>
        <br>
        1. Download template disini <br>
        <a href="{{ route('admin.export_teachers') }}" class="btn btn-primary">Guru</a>
        <a href="{{ route('admin.export_students') }}" class="btn btn-primary">Siswa</a>
        <br><br>

        2. Perhatikan hal berikut sebelum Import
        <li>
            A. Data siswa
            - Pastikan data siswa : <b> Nama, NISN, dan Grade_id </b> tidak kosong di excel.
        </li>
        <li>
            B. Data Guru
            - Pastikan data siswa : <b> Nama, NISN, dan Grade_id </b> tidak kosong di excel.
        </li>
        <br>

        3. Import
        <table>
            <tr>
                <td><a href="#openModalGuruImport" class="btn btn-a float-right">Guru</a></td>
                <td><a href="#openModalImportSiswa" class="btn btn-a float-right">Siswa</a>
                </td>
            </tr>
        </table>

        @include('operator.modal.import_guru')
        @include('operator.modal.import_siswa')
    </div>
    @include('operator.import_error')

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
