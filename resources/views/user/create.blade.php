@extends('layout.master')
@section('content')
    <div class="leftright">
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-start">Tambah User</h3>
        </div>
        <form action="{{ route('admin.create_user') }}" method="POST">
            @csrf
            <table class="table ">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input class="form-control" type="text" name="name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input class="form-control" type="text" name="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input class="form-control" type="text" name="password" required>
                        </td>
                    </tr>
                    <tr>
                        @php
                            $roles = DB::table('roles')->get();
                        @endphp
                        <td>Role</td>
                        <td>
                            <select class="form-select" name="role_id" id="role_id">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                </tbody>
            </table>
            <br>
            <button type="SUBMIT" class="btn btn-primary"> Tambah </button>
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
