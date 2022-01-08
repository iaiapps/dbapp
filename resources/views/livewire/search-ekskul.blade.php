<div>
    <input class="form-control" wire:model="search" type="text" placeholder="Cari Siswa" />
    <hr>
    @if (!is_null($ekskuls))
        @foreach ($ekskuls as $ekskul)
            {{ $ekskul->student->name }}: {{ $ekskul->extra->name }} <br>
        @endforeach
    @endif
</div>
