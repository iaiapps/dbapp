@extends('layout.master')
@section('content')
    <div class="leftright">
        <div class="form-group">
            <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="form-label" for="jenisprestasi">Jenis Dokumen
                </label>
                <select class="form-select" id="jenisprestasi" required name="document_type_id">
                    <option selected disabled>Pilih</option>
                    @foreach ($doc as $doc)
                        <option value="{{ $doc->id }}">{{ $doc->name }}</option>
                    @endforeach
                </select>
                <input type="file" name="dokumen" class="pt-2">
                <button type="submit" class="btn btn-primary mt-2">Upload</button>
            </form>
        </div>
        @include('siswa.list_dokumen')
    </div>
    </div>




@endsection

@section('css')
    {{-- <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}

@endsection
@section('js')

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
