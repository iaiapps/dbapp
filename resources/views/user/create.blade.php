@extends('layout.master')
@section('page_judul', 'Tambah User')
@section('content')
    <div class="card rounded p-3">
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
            <button type="SUBMIT" class="btn btn-primary"> Tambah User </button>
        </form>
    </div>
@endsection
