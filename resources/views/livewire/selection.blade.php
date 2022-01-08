<div>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="nama" class="form-label">Pilih Kelas</label>
            <select class="form-select" wire:model="selectedClass">
                <option disabled>Open this select menu</option>
                @foreach ($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="text" wire:model="siswa" name="siswa">
        {{ $siswa }}

        <button type="submit" class="btn btn-primary col-12" wire:loading.attr="disable">Submit</button>
        {{-- <div wire:loading>
                hold on...
            </div> --}}

    </form>
</div>
