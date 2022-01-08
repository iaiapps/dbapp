<div>
    <div class="px-3 py-3 mb-3 scrollmenu">
        @foreach ($ekskulCategory as $eksCat)
            <button class="btn btn-sm btn-outline-primary rounded-pill"
                wire:click="choose({{ $eksCat->id }}, '{{ $eksCat->name }}')">{{ $eksCat->name }}</button>
        @endforeach
    </div>
    <div class="">
        <table class="table table-striped">
            <thead>
                <td>#</td>
                <td>Nama</td>
                <td>Kelas</td>
            </thead>
            <tbody>
                @if (!is_null($ekskuls))
                    @foreach ($ekskuls as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->student->name }}</td>
                            <td>{{ $item->class->name }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
