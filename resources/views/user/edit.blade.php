@extends('layout.master')
@section('content')
    <div class="leftright">
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-left">Edit User</h3>
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
                        <td>Email</td>
                        <td><input class="form-input" type="text" name="email" value="{{ $item->email }}"></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            <select class="form-select" name="role_id" id="role_id">
                                <option value="1" @if ($item->role == 'admin') selected @endif>admin</option>
                                <option value="2" @if ($item->role == 'operator') selected @endif>operator</option>
                                <option value="3" @if ($item->role == 'guru') selected @endif>guru</option>
                                <option value="4" @if ($item->role == 'siswa') selected @endif>siswa</option>
                                <option value="5" @if ($item->role == 'karyawan') selected @endif>karyawan</option>
                            </select>
                        </td>
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
