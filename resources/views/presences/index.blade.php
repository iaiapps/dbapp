@extends('layout.master')
@section('page_judul', 'Data Presensi')
<x-datatables />
@section('content')
    <div class="p-3 bg-white rounded">
        @if ($presences->count() == 0)
            <div class="p-4 text-center card">
                <a href="{{ URL::previous() }}">Kembali</a>
                <h3>
                    Tidak ditemukan
                </h3>
            </div>
        @else
            <form action="{{ route('presence.monthly') }}" method="GET">
                @csrf
                @php
                    $year = $year ?? date('Y');
                    $month = $month ?? date('m');
                    $date = $year . '-' . $month;
                @endphp
                <div class="row gy-2">
                    <div class="col-12 col-md-6">
                        <a href="{{ route('presence.excel', ['date' => $date]) }}"
                            class="btn btn-success btn-sm rounded fs-5 ">
                            <i class="las la-download la-lg"></i></a>
                        <h6 class="d-inline border-bottom border-success pb-2 border-3"> Data bulan :
                            {{ Carbon\Carbon::parse($date)->isoFormat('MMMM Y') }}</h6>
                    </div>
                    <div class="col col-12 col-md-6 d-flex">
                        <input type="month" id="start" name="date" value="{{ $date }}"
                            class="form-control " />
                        <button type="submit" class="btn btn-success ">Terapkan</button>
                    </div>
                </div>
            </form>
            <br>
            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Guru</th>
                            <td>Jml Kehadiran</td>
                            <th>Telat</th>
                            <th>Sakit</th>
                            <th>Izin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($presences as $presence)
                            @php
                                $tanggal = DB::table('presences')
                                    ->where('teacher_id', $presence->teacher->id)
                                    ->orderBy('id', 'DESC')
                                    ->first();
                                // dd($pre);
                                
                                // convert ke bulan dan tahun
                                Carbon\Carbon::setLocale('id');
                                $date = Carbon\Carbon::parse($tanggal->created_at);
                                $bulan = $date->month;
                                $tahun = $date->year;
                                
                                // lalu cari jumlah sakitnya id ini
                                $sakit = DB::table('presences')
                                    ->where('teacher_id', $presence->teacher->id)
                                    ->whereMonth('created_at', $bulan)
                                    ->whereYear('created_at', $tahun)
                                    ->where('note', 'sakit')
                                    ->count();
                                
                                $izin = DB::table('presences')
                                    ->where('teacher_id', $presence->teacher->id)
                                    ->whereMonth('created_at', $bulan)
                                    ->whereYear('created_at', $tahun)
                                    ->where('note', 'ijin')
                                    ->count();
                                
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $presence->teacher->nama }}</td>
                                <td>{{ $presence->total_kehadiran - $izin - $sakit }}</td>
                                <td>{{ $presence->total_telat }}</td>
                                <td>{{ $sakit }}</td>
                                <td>{{ $izin }}</td>
                                <td>
                                    <a href="{{ route('presence.show', $presence->teacher->id) }}"
                                        class="btn btn-success btn-sm">
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
