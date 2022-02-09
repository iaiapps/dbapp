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
                        $sisa = 20 - $jml;
                    @endphp
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->day }}</td>

                        <td>
                            @if ($sisa <= 0)
                                <span class="badge rounded-pill bg-danger">Penuh</span>
                            @elseif ($sisa >= 15)
                                <span class="badge rounded-pill bg-success">{{ $sisa }}</span>
                            @elseif($sisa <= 14 && $sisa >= 10)
                                <span class="badge rounded-pill bg-info">{{ $sisa }}</span>
                            @elseif($sisa <= 9 && $sisa >= 5)
                                <span class="badge rounded-pill bg-warning">{{ $sisa }}</span>
                            @else
                                <span class="badge rounded-pill bg-danger">{{ $sisa }}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
