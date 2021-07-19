    @extends('layout.master')
    @section('content')


        <div id="openModal" class="modalDialog">
            <div> <a href="#close" title="Close" class="close">X</a>
                <h4>Import Users</h4>
                <form action="{{ route('admin.import_users') }}" method="POST" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <input type="file" name="file" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Import</button>
                </form>
            </div>
        </div>
        <div class="leftright">
            <div class="py-2 my-2 clear-fix">
                <h3 class="float-left">Manajemen User</h3>
                <a href="{{ route('tambah_user') }}" class="btn btn-primary float-right ml-1">Tambah</a>
                {{-- <a href="#openModal" class="btn btn-s float-right">Import</a> --}}
            </div>

            @if ($collection->count() == 0)
                Belum ada data
            @else
                <div class="table table-responsive">
                    <table id="example" class="display table-striped" style="width:100%">
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
                                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-primary">
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

    @section('css')

        <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    @endsection
    @section('js')


        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    @stop
