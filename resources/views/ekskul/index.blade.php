@extends('ekskul.layout')
@section('judul', 'Data Ekstrakurikuler')
@section('content')
    <livewire:data-ekskul />
@endsection
@section('js')
    @if (Session::has('success'))
        <script>
            tata.success("BERHASIL !!", "{!! Session::get('success') !!}")
        </script>
    @endif
@stop
