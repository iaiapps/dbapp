    @extends('layout.master')
    @section('content')
        <div class="leftright">
            <div class="py-2 my-2 clear-fix">
                <h3 class="float-left">Data Guru</h3>
                <a href="{{ route('admin.export_teachers') }}" class="btn btn-a float-right  ml-1"><i
                        class="las la-download"></i>
                </a>
                <a href="#openModalGuruImport" class="btn btn-a float-right"><i class="las la-upload"></i> </a>
            </div>
            @include('operator.import_error')
            @include('operator.modal.import_guru')


            @if ($collection->count() == 0)
                Belum ada data
            @else
                <div class="table table-responsive">
                    <table id="example" class="display table-striped" style="width:100%">
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
                                            <a href="{{ route('teacher_detail', $item->id) }}" class="btn btn-primary">
                                                <span><i class="las la-info-circle"></i></span>
                                            </a>
                                            <a href="{{ route('teacher_edit', $item->id) }}" class="btn btn-primary">
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
