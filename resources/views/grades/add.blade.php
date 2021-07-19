<div id="modalAddGrade" class="modalDialog">
    <div> <a href="#close" title="Close" class="close">X</a>
        <h4>Tambah kelas</h4>
        <hr>
        <br>
        <form action="{{ route('grade.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama kelas</label>
                <input class="form-input" type="text" name="name" class="form-control" required>
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
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
