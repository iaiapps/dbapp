<div>
    <x-modal id="qrcodeModal">
        <x-slot name="title">
            Ubah QrCode
        </x-slot>
        <x-slot name="body">
            <form action="{{ route('qrcode.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mb-3">
                    <input type="text" name="qrcode" value="{{ $qrcode }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </x-slot>
    </x-modal>

    <div class="card rounded p-3 mt-3">
        <table>
            <tr>
                <th>QRCODE</th>
                <th>{{ $qrcode }}</th>
                <th>
                    <button type="button" class="btn btn-success me-1 " data-bs-toggle="modal"
                        data-bs-target="#qrcodeModal">
                        Ubah
                    </button>
                    <a href="">Save</a>
                </th>
            </tr>
        </table>
    </div>
</div>
