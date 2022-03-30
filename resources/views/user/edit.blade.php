@extends('layout.master')
@section('page_judul', 'Edit User')
@section('content')
    <div id="page_info" class="card rounded p-3">
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input class="form-control" type="text" name="name" value="{{ $item->name }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input class="form-control" type="text" name="email" value="{{ $item->email }}"></td>
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

            <a type="SUBMIT" class="btn btn-primary"> Update </a>
        </form>
    </div>
@endsection

@section('js')

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
