<table class="table table-striped tab-content" id="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis File</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
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
