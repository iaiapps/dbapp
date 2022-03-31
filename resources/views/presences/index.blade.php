@extends('layout.master')
@section('page_judul', 'Data Presensi')
@section('content')
    <div class="card p-3">
        @if ($presences->count() == 0)
            <div class="card text-center p-4">
                <h1 class="display-6">
                    Maaf belum ada data yang tersimpan ...
                </h1>
            </div>
        @else
            <div class="table-responsive">
                <table class="table" id="data-table">
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
                        @php
                            // dd($presences);
                        @endphp
                        @foreach ($presences as $presence)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $presence->teacher->nama }}</td>
                                <td>{{ $presence->total_kehadiran }}</td>
                                <td>{{ $presence->total_telat }}</td>
                                <td>{{ $presence->total_kehadiran - $presence->total_telat }}</td>

                                <td>
                                    <a href="{{ route('presence.show', $presence->teacher->id) }}" class="btn btn-success">
                                        <span><i class="las la-info-circle"></i></span>
                                    </a>
                                    {{-- <a href="{{ route('presence.edit', $presence->teacher->id) }}" class="btn btn-warning">
                                        <span><i class="las la-edit"></i></span>
                                    </a>
                                    <form action="{{ route('presence.delete', $presence->id) }}" method="POST"
                                        onsubmit="">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <span><i class="las la-trash"></i></span></button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable();
        });
    </script>
@stop
