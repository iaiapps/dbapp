    @extends('layout.master')
    @section('page_judul', 'Data Siswa')
    <x-datatables />
    @section('content')
        @include('operator.modal.import_siswa')
        <div id="page_info" class="card rounded p-3">
            <div class="mb-3">
                <a href="#" class="btn btn-success">Tambah </a>
                <a href="{{ route('admin.export_students') }}" class="btn btn-success">
                    <i class="las la-download"></i>
                </a>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importSiswa">
                    <i class="las la-upload"></i> </button>
            </div>
            {{-- @include('operator.import_error') --}}
            @if ($collection->count() == 0)
                <div class="card text-center p-4 ">
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
                                <th>Nama</th>
                                <th>Hp</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->hp_ayah }}</td>
                                    <td>{{ $item->grade->name }}</td>
                                    <td>
                                        <form action="{{ route('student_delete', $item->id) }}" method="POST">
                                            <a href="{{ route('student_detail', $item->id) }}" class="btn btn-primary">
                                                <span><i class="las la-info-circle"></i></span>
                                            </a>
                                            <a href="{{ route('student_edit', $item->id) }}" class="btn btn-primary">
                                                <span><i class="las la-edit"></i></span>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <span><i class="las la-trash"></i></span></button>
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
