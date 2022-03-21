    @extends('layout.master')
    @section('page_judul', 'List Revisi')
    @section('content')
        <div id="page_info" class="card rounded p-3">
            <div class="table-responsive">
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Ayah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collection as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nama_ayah }}</td>
                                <td>
                                    <form action="{{ route('student_delete', $item->id) }}" method="POST">
                                        <a href="{{ route('compare_revisi', $item->id) }}" class="btn btn-s">
                                            <span><i class="las la-info-circle"></i></span>
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
        </div>
    @endsection

    @section('js')
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    @stop
