    @extends('layout.master')
    @section('page_judul', 'Tambah Data User')
    @section('content')
        <!-- Modal -->
        {{-- <div class="modal fade" id="tambahDataUser" tabindex="99" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Import User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.import_users') }}" method="POST" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="mb-3">
                                <input type="file" name="file" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="page_info" class="card rounded p-3">
            <div class="mb-3">
                {{-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahDataUser">
                    Import User
                </button> --}}
                <a href="{{ route('tambah_user') }}" type="button" class="btn btn-success">
                    Tambah User
                </a>
            </div>

            @if ($collection->count() == 0)
                Belum ada data
            @else
                <div class="table-responsive">
                    <table id="example" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                                            </a>
                                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">
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
                $('#example').DataTable();
            });
        </script>
    @stop
