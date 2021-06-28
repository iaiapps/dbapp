@extends('layout.master')
@section('content')
    <div class="leftright">
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-left">Edit DB Setting (Developer Only)</h3>
        </div>
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <table class="table table-striped tab-content" id="1">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input class="form-input" type="text" name="name" value="{{ $item->name }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Value</td>
                        <td><input class="form-input" type="text" name="value" value="{{ $item->value }}"></td>
                    </tr>
                    <tr>
                        <td>Info</td>
                        <td><input class="form-input" type="text" name="info" value="{{ $item->info }}"></td>
                    </tr>
                    <tr>
                        <td>Is active</td>
                        <td><input class="form-input" type="text" name="is_active" value="{{ $item->is_active }}"></td>
                    </tr>

                </tbody>
            </table>
            <br>
            <a type="SUBMIT" class="btn btn-primary"> Update </a>
        </form>
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
