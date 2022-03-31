    @extends('layout.master')
    @section('page_judul', 'Data Kelas')
    <x-datatables />
    @section('content')
        @include('grades.add')
        <div id="page_info" class="card rounded p-3">
            <div class="mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">
                    Tambah Kelas
                </button>
            </div>

            @include('grades.add')
            @if ($collection->count() == 0)
                <div class="card text-center p-4">
                    <h1 class="display-6">
                        Maaf belum ada data yang tersimpan ...
                    </h1>
                </div>
            @else
                <div class="table-responsive">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama kelas</th>
                                <th>Wali kelas</th>
                                <th>Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    @if ($item->teacher_id)
                                        <td>{{ $item->teacher->nama }}</td>
                                        <td>{{ $item->teacher->no_hp }}</td>
                                    @else
                                        <td>Belum diterapkan</td>
                                        <td>Belum diterapkan</td>
                                    @endif
                                    <td>
                                        <form action="{{ route('grade.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <a href="{{ route('student_detail', $item->id) }}" class="btn btn-primary">
                                                <span><i class="las la-info-circle"></i></span>
                                            </a> --}}
                                            <a href="{{ route('grade.edit', $item->id) }}" class="btn btn-primary">
                                                <span><i class="las la-edit"></i></span>
                                            </a>

                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <span><i class="las la-trash"></i></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    @endsection
