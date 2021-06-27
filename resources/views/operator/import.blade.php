@extends('layout.master')
@section('content')
    <div class="leftright">
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-left">Import</h3>
            {{-- <a href="#" class="btn btn-primary float-right"> x </a> --}}
        </div>
        <br><br>


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
