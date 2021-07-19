    @extends('layout.master')
    @section('content')
        <div class="leftright">

            <div class="table table-responsive">
                <table id="example" class="display table-striped" style="width:100%">
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
