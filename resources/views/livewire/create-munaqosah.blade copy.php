<div>
    <div>
        <form action="{{ route('munaqosah.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" name="register_date" value="{{ now() }}">
            <div class="mb-3">
                <label class="form-label">Rekomendasi Oleh</label>
                <input type="text" name="recommended_by" placeholder="contoh : Ust. Fauzan" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Juz</label>
                <select class="form-select" name="juz" id="juz">
                    @for ($i = 1; $i <= 30; $i++)
                        <option>{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Status Ujian</label>
                <select class="form-select" name="exam_status">
                    <option>-- Pilih --</option>
                    <option>Baru</option>
                    <option>Remidi</option>
                </select>
            </div>
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
                    <select class="form-select" name="name" wire:model="selectedStudent">
                        <option selected>-- Pilih --</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->name }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <button type="submit" class="btn btn-success col-12" wire:loading.attr="disable">Daftar</button>
            <div wire:loading>
                Loading...
            </div>

        </form>
    </div>
</div>
