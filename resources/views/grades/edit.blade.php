    @extends('layout.master')
    @section('page_judul', 'Edit Kelas')
    @section('content')
        <div id="page_info" class="card rounded p-3">
            <form action="{{ route('grade.update', $grade->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama kelas</label>
                    <input class="form-control" type="text" name="name" value="{{ $grade->name }}" class="form-control"
                        required>
                </div>
                <div class="mb-3">
                    <label for="walas">Wali kelas</label>
                    <select class="form-select" name="teacher_id" id="walas">
                        <option selected disabled>Pilih</option>
                        @foreach ($teachers as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        </div>
    @endsection
