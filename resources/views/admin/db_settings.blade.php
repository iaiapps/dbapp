    @extends('layout.master')
    @section('page_judul', 'Database Setting')
    @section('content')
        <div class="card rounded p-3">
            @if ($collection->count() == 0)
                <div class="card text-center p-4">
                    <h1 class="display-6">
                        Maaf belum ada data yang tersimpan ...
                    </h1>
                </div>
            @else
                <p class="fs-4">Apps Setting</p>
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
            <p class="fs-4">Time Setting</p>
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
                                <a href="{{ route('admin.editSettingPresence', $item->id) }}" class="btn btn-primary">
                                    <span><i class="las la-edit"></i></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <livewire:qrcode />
    @endsection

    {{-- @section('js')
        <script>
            $(document).ready(function() {
                $('#data').DataTable();
            });
        </script>
    @stop --}}
