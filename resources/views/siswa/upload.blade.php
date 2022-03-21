@extends('layout.master')
@section('content')
    <div class="leftright">
        <div class="mb-3">
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
@endsection

@section('js')

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop
