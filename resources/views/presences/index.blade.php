@extends('layout.master')
@section('page_judul', 'Data Presensi')
<x-datatables />
@section('content')
    <div class="p-3 card">
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
                <div class="col-md-12 d-md-flex justify-content-between">
                    <div>
                        <a href="{{ route('presence.excel', ['date' => $date]) }}" class="btn btn-sm btn-success"><i
                                class="bi bi-download"></i></a>
                        <h6 style=" border-bottom: solid 2px #000000; display: inline; padding-bottom: 3px;">
                            {{ Carbon\Carbon::parse($date)->isoFormat('MMMM Y') }}</h6>
                    </div>
                    <div class="d-flex">
                        <input type="month" id="start" name="date" value="{{ $date }}" class="form-control" />
                        <button type="submit" class="btn btn-success">Terapkan</button>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Guru</th>
                            <th>Telat</th>
                            <th>Tepat Waktu</th>
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
                                    ->where('note', 'izin')
                                    ->count();
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $presence->teacher->nama }}</td>
                                <td>{{ $presence->total_telat }}</td>
                                <td>{{ $presence->total_kehadiran - $presence->total_telat - $sakit - $izin }}</td>
                                <td>{{ $sakit }}</td>
                                <td>{{ $izin }}</td>
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
