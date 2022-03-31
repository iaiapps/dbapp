    @extends('layout.master')
    @section('page_judul', 'Detail Barang')
    @section('content')

        <div class="card p-3">
            <div class="mb-3">
                <a href="{{ route('inventaris.index') }}" class="btn btn-success ">kembali</a>
            </div>
            <div class="table-responsive">
                <table class="table" id="data-table">
                    <thead>
                        <thead>
                            <tr>
                                <th>Form</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Nama Barang</th>
                            <td>{{ $item->nama_barang }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Pembelian</th>
                            <td>{{ $item->tanggal_pembelian }}</td>
                        </tr>
                        <tr>
                            <th>Kuantitas</th>
                            <td>{{ $item->kuantitas }}</td>
                        </tr>
                        <tr>
                            <th>Pembuat</th>
                            <td>{{ $item->pembuat }}</td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp. {{ $item->harga }}</td>
                        </tr>
                        <tr>
                            <th>Sumber Dana</th>
                            <td>{{ $item->sumber_dana }}</td>
                        </tr>
                        <tr>
                            <th>Referensi</th>
                            <td>{{ $item->referensi }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Penerimaan</th>
                            <td>{{ $item->tanggal_penerimaan }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Pembelian</th>
                            <td>{{ $item->tempat_pembelian }}</td>
                        </tr>
                        <tr>
                            <th>Kondisi Barang</th>
                            <td>{{ $item->kondisi_barang }}</td>
                        </tr>
                        <tr>
                            <th>Kondisi Barang</th>
                            <td><img src="{{ asset('img_inventaris') . '/' . $item->dokumen }}" alt="image"
                                    class="img_upload"> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    @endsection
