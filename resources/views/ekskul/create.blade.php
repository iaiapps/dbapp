@extends('ekskul.layout')
@section('judul', 'Pilih Ekstrakurikuler')
@section('content')
    <div class="row">
        <div class="col-md-6 mb-3">
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
            <div class="table-wrapper-scroll-y my-custom-scrollbar mt-2">
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ekskul</th>
                            <th scope="col">Sisa Kuota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ekskuls as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    {{-- <x-data-ekskul /> --}}
                </table>
            </div>
        </div>

    </div>
@endsection
