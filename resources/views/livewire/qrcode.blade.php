<div>
    <div class="card rounded p-3 mt-3">
        <table id="data" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Value</th>
                    <th>Desc</th>
                    <th>Aksi</th>
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
                            <button wire:click="generate({{ $item->id }})"
                                class="btn btn-sm btn-success">Perbarui</button>
                            <a class="btn btn-outline-success btn-sm" target="_blank"
                                href="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data={{ $item->value }}">Qr</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
