@extends('ekskul.layout')
@section('judul', 'Pilih Ekstrakurikuler')
@section('content')
    <div class="row">
        <div class="mb-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <livewire:selection />
                    <br>
                    <i class="text-sm-start text-muted"><small>Jika Kuota Penuh, Ekskul tidak dapat dipilih.</small>
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
