    @extends('layout.master')
    @section('content')
        <div class="leftright">
            <div class="py-2 my-2 clear-fix">
                <h3 class="float-left">Manajemen Kelas</h3>
                <a href="#modalAddGrade" class="btn btn-primary float-right ml-1">Tambah </a>
            </div>

            @include('grades.add')

            @if ($collection->count() == 0)
                Belum Kelas
            @else
                <div class="table table-responsive">
                    <table id="example" class="display table-striped" style="width:100%">
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


    @endsection
    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    @stop
