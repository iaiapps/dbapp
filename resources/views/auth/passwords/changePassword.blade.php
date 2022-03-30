@extends('layout.master')

@section('page_judul', 'Ganti Password')
@section('content')
    <div class="container">
        <div class=" card row p-3">
            <form method="POST" action="{{ route('change.password') }}">
                @csrf
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
                <div class="mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
                    <input id="password" type="password" class="form-control" name="current_password"
                        autocomplete="current-password">
                </div>
                <div class="mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                    <input id="new_password" type="password" class="form-control" name="new_password"
                        autocomplete="current-password">
                </div>
                <div class="mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm
                        Password</label>
                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password"
                        autocomplete="current-password">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
