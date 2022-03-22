@extends('layout.master')
@section('page_judul', 'Upload Berkas')
@section('content')
    <div id="page_info" class="card rounded p-3">
        <div class="mb-3">
            <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="jenisprestasi">Jenis Dokumen
                    </label>
                    <select class="form-select" id="jenisprestasi" required name="document_type_id">
                        <option selected disabled>Pilih</option>
                        @foreach ($doc as $doc)
                            <option value="{{ $doc->id }}">{{ $doc->name }}</option>
                        @endforeach
                    </select>
                </div>
                <input class="form-control" type="file" name="dokumen" class="pt-2">
                <button type="submit" class="btn btn-primary mt-2">Upload</button>
            </form>
        </div>
        @include('siswa.list_dokumen')
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
