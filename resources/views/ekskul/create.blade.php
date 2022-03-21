@extends('ekskul.layout')
@section('judul', 'Pilih Ekstrakurikuler')
@section('content')
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>MAAF!</strong> {{ Session::get('error') }}
        </div>
    @endif
    <div class="row">
        <div class="mb-3 col-md-6">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <livewire:selection />
                    <br>
                    <a class="text-sm-start text-muted"><small>NOTE</small>
                    </a>
                    <ul>
                        <li>Kuota tiap ekstrakurikuler adalah 20 siswa</li>
                        <li>Ekstrakurikuler akan dilaksanakan jika peminat minimal 10 siswa</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            Informasi Kuota :
            <div class="mt-2 table-wrapper-scroll-y my-custom-scrollbar">
                <livewire:info-kuota-ekskul />
            </div>
        </div>

    </div>
@endsection
