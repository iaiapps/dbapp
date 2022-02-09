<div>
    <div class="py-2 mb-3 scrollmenu">
        {{-- <a href="{{ route('ekskul.export') }}" class="btn btn-sm btn-success rounded-pill">Export Data </a> --}}
        <button type="button" class="btn btn-sm btn-success rounded-pill position-relative mx-1">
            Export
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $jumlah }}
                {{-- <span class="visually-hidden">unread messages</span> --}}
            </span>
        </button>
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
