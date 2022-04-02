@extends('layout.master')
@section('page_judul', 'Data Presensi')
<x-datatables />
@section('content')

    <div class="p-3 card">
        @if ($presences->count() == 0)
            <div class="p-4 text-center card">
                <h1 class="display-6">
                    Maaf belum ada data yang tersimpan ...
                </h1>
            </div>
        @else
            <h6>{{ $bulan_yang_ditampilkan }}</h6>
            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Guru</th>
                            <th>Σ Kehadiran</th>
                            <th>Σ Tepat Waktu</th>
                            <th>Σ Telat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($presences as $presence)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $presence->teacher->nama }}</td>
                                <td>{{ $presence->total_kehadiran }}</td>
                                <td>{{ $presence->total_telat }}</td>
                                <td>{{ $presence->total_kehadiran - $presence->total_telat }}</td>

                                <td>
                                    <a href="{{ route('presence.show', $presence->teacher->id) }}"
                                        class="btn btn-primary btn-sm">
                                        <span><i class="las la-search"></i></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
