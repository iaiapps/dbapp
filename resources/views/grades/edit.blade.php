    @extends('layout.master')
    @section('content')
        <div class="leftright">
            <div class="py-2 my-2 clear-fix">
            </div>

            <div>

                <h4>Edit kelas</h4>
                <hr>
                <br>
                <form action="{{ route('grade.update', $grade->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Nama kelas</label>
                        <input class="form-input" type="text" name="name" value="{{ $grade->name }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
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
