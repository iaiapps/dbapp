@extends('layout.master')
@section('page_judul', 'Detail Presensi')
<x-datatables />
@section('content')
    <div class="p-3 bg-white rounded">
        <form action="{{ route('presence.daterange') }}" method="GET">
            @csrf
            @method('GET')
            @php
                $first = new Carbon\Carbon('first day of this month');
                $end = Carbon\Carbon::now();
            @endphp
            <input type="hidden" name="teacher_id" value="{{ $id }}">
            <div class="row mb-3">
                <div class="col">
                    <label for="awalBulan" class="form-label">Awal Bulan</label>
                    <input class="form-control" type="date" name="start_date" value="{{ date('Y-m-01') }}">
                </div>
                <div class="col">
                    <label for="awalBulan" class="form-label">Bulan yang dipilih</label>
                    <input class="form-control" type="date" name="end_date" value="{{ date('Y-m-d') }}">
                </div>
            </div>
            <button type="submit" class="btn btn-success w-100">
                Filter Data
            </button>
        </form>
        @if ($presences->count() == 0)
            <div class="p-4 text-center card">
                <h1 class="display-6">
                    Maaf belum ada data yang tersimpan ...
                </h1>
            </div>
        @else
            <hr>
            <p class="text-center fs-5">Data Detail Presensi </p>
            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Datang</th>
                            <th>Pulang</th>
                            <th>Ket</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($presences->sortBy('created_at') as $presence)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Carbon\Carbon::parse($presence->created_at)->isoFormat('dddd, D MMMM Y') }}
                                </td>
                                <td>{{ $presence->time_in }}</td>
                                <td>{{ $presence->time_out }}</td>
                                <td>{{ $presence->note }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
