@extends('ekskul.layout')
@section('judul', 'Pilih Ekstrakurikuler')
@section('content')
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
                    <i class="text-sm-start text-muted"><small>Jika Kuota Penuh (20 anak), Ekskul Tidak akan dapat
                            dipilih.</small>
                    </i>
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
