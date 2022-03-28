<div id="6" class="tabcontent">
    <table class="table ">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis File</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            {{-- @php
                $doc = DB::table('documents')
                    ->where('teacher_id', $item->id)
                    ->get();
                dd($doc);
            @endphp --}}
            @foreach ($item->documents as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->document_type->name }}</td>
                    <td><a href="{{ '/documnet_images/' . $item->file }}" class="btn btn-secondary"><i
                                class="las la-search-plus"></i></a>
                        <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
