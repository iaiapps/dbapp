@extends('layout.master')
@section('content')
    <br>
    <a href="https://wa.me/{{ $admin->value }}" target="_blank" class="btn btn-primary">Admin</a>
    <a href="https://wa.me/{{ $humas->value }}" target="_blank" class="btn btn-primary">Humas</a>
    <a href="https://wa.me/{{ $keuangan->value }}" target="_blank" class="btn btn-primary">Keuangan</a>
@endsection
