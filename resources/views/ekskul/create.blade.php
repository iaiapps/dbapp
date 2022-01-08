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
                <table class="table mb-0 table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ekskul</th>
                            <th scope="col">Sisa Kuota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ekskuls as $item)
                            @php
                                $jml = DB::table('extracurricular_data')
                                    ->where('extra_id', $item->id)
                                    ->count();
                                $sisa = 20 - $jml;
                            @endphp
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->name }}</td>

                                <td>
                                    @if ($sisa <= 0)
                                        <span class="badge rounded-pill bg-danger">{{ $sisa }} </span>
                                    @elseif ($sisa >= 15)
                                        <span class="badge rounded-pill bg-success">{{ $sisa }}</span>
                                    @elseif($sisa <= 14 && $sisa >= 10)
                                        <span class="badge rounded-pill bg-info">{{ $sisa }}</span>
                                    @elseif($sisa <= 9 && $sisa >= 5)
                                        <span class="badge rounded-pill bg-warning">{{ $sisa }}</span>
                                    @else
                                        <span class="badge rounded-pill bg-secondary">{{ $sisa }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
