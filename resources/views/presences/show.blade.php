@extends('layout.master')
@section('page_judul', 'Detail Presensi')
<x-datatables />
@section('content')
    <div class="p-3 bg-white rounded">
        <form action="{{ route('presence.daterange') }}">
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
            <p class="text-center fs-5">Data Detail Presensi <strong> {{ $name }}</strong></p>

            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Datang</th>
                            <th>Pulang</th>
                            <th>Ket</th>
                            <th>Edit</th>
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
                                <td>

                                    <a href="#" data-toggle="modal" data-id="{!! $presence->id !!}"
                                        class="btn btn-sm btn-primary editModalBtn"><i class="las la-edit "></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div id="editModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Update Jam</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('presence.update_jam') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="hidden" name="id" value="id" id="id">
                                        <input type="time" name="time_in" class="form-control time_in">
                                        <input type="time" name="time_out" class="form-control time_out">
                                    </div><br>
                                    <div class="form-group">
                                        <select name="is_late" id="" class="form-control">
                                            <option value="0">Tidak Terlambat</option>
                                            <option value="1">Terlambat</option>
                                        </select>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary w-100"><i class="fa fa-check-circle"></i>
                                        Update
                                        !</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endif
    </div>

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('.editModalBtn').click(function() {
                var id = $(this).data('id');
                console.log(id);
                var url = '{{ URL::to('/edit_jam') }}';
                $.ajax({
                    type: 'get',
                    url: url,
                    data: {
                        'id': id
                    },
                    success: function(data) {
                        $('#id').val(data.id);
                        $('.time_in').val(data.time_in);
                        $('.time_out').val(data.time_out);
                        $('#editModal').modal('show');
                    }
                });
            });
        });
    </script>
@endpush
