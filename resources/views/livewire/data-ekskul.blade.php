<div>
    <div class="py-2 mb-3 scrollmenu">
        <a type="button" href="{{ route('ekskul.export') }}"
            class="btn btn-sm btn-success rounded-pill position-relative mx-1">Export
            Data<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $jumlah }}
            </span> </a>
        {{-- <button type="button" class="btn btn-sm btn-success rounded-pill position-relative mx-1">
            Export
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $jumlah }}
            </span>
        </button> --}}
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
                @if (isset($user))
                    <td>Act</td>
                @endif
            </thead>
            <tbody>
                @if (!is_null($ekskuls))
                    @foreach ($ekskuls as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->student->name }}</td>
                            <td>{{ $item->class->name }}</td>
                            @php
                                $user = Auth::user();
                                // dd($item);
                            @endphp
                            @if (isset($user))
                                <td>
                                    <form action="{{ route('ekskul.delete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="confirm('Yakin bro?')" type="submit"
                                            class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
