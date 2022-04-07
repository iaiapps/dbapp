<div>
    @extends('layout.master')
    @section('page_judul', 'Data Presensi')
    <x-datatables />
    @section('content')
        <div class="p-3 card">
            <form action="{{ route('presence.daterange') }}" method="GET">
                @csrf
                @method('GET')
                @php
                    $first = new Carbon\Carbon('first day of this month');
                    $end = Carbon\Carbon::now();
                @endphp
                <div class="col-md-6 col-sm-12 d-flex justify-content-around">
                    <input type="hidden" name="teacher_id" value="{{ $id }}">
                    <input class="m-1 form-control" type="date" name="start_date" value="{{ date('Y-m-01') }}">
                    <input class="m-1 form-control" type="date" name="end_date" value="{{ date('Y-m-d') }}">
                    <button type="submit" class="btn btn-sm btn-success">
                        Submit
                    </button>
                </div>
            </form>


            @if ($presences->count() == 0)
                <div class="p-4 text-center card">
                    <h1 class="display-6">
                        Maaf belum ada data yang tersimpan ...
                    </h1>
                </div>
            @else
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
</div>
