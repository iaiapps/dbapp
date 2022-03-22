    @extends('layout.master')
    @section('page_judul', 'Data Guru')
    @section('content')
        <div id="page_info" class="card rounded p-3">
            <div class="mb-3">
                <a href="{{ route('admin.export_teachers') }}" class="btn btn-success ">
                    <i class="las la-download"></i> Dowload Data
                </a>
                <a href="#openModalGuruImport" class="btn btn-success ">
                    <i class="las la-upload"></i> Upload Data
                </a>
            </div>
            {{-- @include('operator.import_error')
            @include('operator.modal.import_guru') --}}

            @if ($collection->count() == 0)
                <div class="card text-center p-4">
                    <h1 class="display-6">
                        Maaf belum ada data yang tersimpan ...
                    </h1>
                </div>
            @else
                <div class="table-responsive">
                    <table id="data-table" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>

                                        <form action="{{ route('teacher_delete', $item->id) }}" method="POST">
                                            <a href="{{ route('teacher_detail', $item->id) }}" class="btn btn-success">
                                                <span><i class="las la-info-circle"></i></span>
                                            </a>
                                            <a href="#" class="btn btn-primary">
                                                <span><i class="las la-image"></i></span>
                                            </a>
                                            <a href="{{ route('teacher_edit', $item->id) }}" class="btn btn-warning">
                                                <span><i class="las la-edit"></i></span>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
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

    @section('js')

        <script>
            $(document).ready(function() {
                $('#data-table').DataTable();
            });
        </script>
    @stop
