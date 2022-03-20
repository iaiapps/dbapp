<div>

    <table class="table mb-0 table-bordered table-striped tableFixHead mb-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ekskul</th>
                <th scope="col">Hari</th>
                <th scope="col">Sisa Kuota</th>
            </tr>
        </thead>
        <tbody>
            @if (!is_null($ekskuls))
                @foreach ($ekskuls ?? '' as $item)
                    @php
                        $jml = DB::table('extracurricular_data')
                            ->where('extra_id', $item->id)
                            ->count();
                        $sisa = $item->quantity - $jml;
                    @endphp
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->day }}</td>

                        <td>
                            {{ $sisa }}
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
