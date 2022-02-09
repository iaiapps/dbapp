<div>
    <form action="{{ route('ekskul.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label class="form-label">Pilih Kelas</label>
            <select class="form-select" name="class_id" wire:model="selectedClass">
                <option selected>-- Pilih --</option>
                @foreach ($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            </select>
        </div>
        @if (!is_null($students))
            <div class="mb-3">
                <label class="form-label">Pilih Siswa</label>
                <select class="form-select" name="student_id" wire:model="selectedStudent">
                    <option selected>-- Pilih --</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if (!is_null($ekskul))
            <div class="mb-3">
                <label class="form-label">Pilih Ekstrakurikuler</label>
                <select class="form-select" name="extra_id">
                    <option selected disabled>-- Pilih --</option>
                    @foreach ($ekskul as $eks)
                        <option value="{{ $eks->id }}">{{ $eks->id }} - {{ $eks->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        <button type="submit" class="btn btn-primary col-12" wire:loading.attr="disable">Kirim Pilihan</button>
        <div wire:loading>
            tunggu sebentar ...
        </div>

    </form>
</div>
