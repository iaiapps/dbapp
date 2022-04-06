    @extends('layout.master')
    @section('page_judul', 'Database Setting')
    @section('content')
        <div id="page_info" class="card rounded p-3">
            {{-- <div class="py-2 my-2 clear-fix">
                <a href="#" class="btn btn-primary float-end"> Tambah Data </a>
            </div> --}}

            @if ($collection->count() == 0)
                <div class="card text-center p-4">
                    <h1 class="display-6">
                        Maaf belum ada data yang tersimpan ...
                    </h1>
                </div>
            @else
                <div class="table-responsive">
                    <table id="data" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Value</th>
                                <th>Info</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->value }}</td>
                                    <td>{{ $item->info }}</td>
                                    <td>
                                        <form action="{{ route('admin.hapusDbset', $item->id) }}" method="POST">
                                            </a>
                                            <a href="{{ route('admin.editDbset', $item->id) }}" class="btn btn-primary">
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
        <div class="card rounded p-3 mt-3">
            <table id="data" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($presence as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->value }}</td>
                            <td>
                                <form action="{{ route('admin.hapusDbset', $item->id) }}" method="POST">
                                    </a>
                                    <a href="{{ route('admin.editSettingPresence', $item->id) }}"
                                        class="btn btn-primary">
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
    @endsection

    @section('js')
        <script>
            $(document).ready(function() {
                $('#data').DataTable();
            });
        </script>
    @stop
