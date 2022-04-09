<div>
    <div class="card rounded p-3 mt-3">
        <table id="data" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Value</th>
                    <th>Desc</th>
                    <th>Cetak</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($qrcode as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->value }}</td>
                        <td>{{ $item->desc }}</td>
                        <td>
                            <a href="{{ route('admin.editSettingPresence', $item->id) }}" class="btn btn-primary">
                                <span><i class="las la-print"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
