<div>
    @extends('layout.master')
    @section('page_judul', 'Data Presensi')
    <x-datatables />
    @section('content')
        <div class="card p-3">
            <form action="{{ route('presence.daterange') }}" method="POST">
                @csrf
                <div class="col-6 d-flex justify-content-around">
                    <input type="hidden" name="id" value="20">
                    <input class="form-control m-1" type="date" name="start_date" value="{{ date('Y-m-d') }}">
                    <input class="form-control m-1" type="date" name="end_date" value="{{ date('Y-m-d') }}">
                    <button type="submit" class="btn btn-sm btn-success">
                        Submit
                    </button>
                </div>
            </form>


            @if ($presences->count() == 0)
                <div class="card text-center p-4">
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
                            @foreach ($presences as $presence)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Carbon\Carbon::parse($presence->date)->isoFormat('dddd, D MMM Y') }}</td>
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
