    @extends('layout.master')
    @section('alert')
    @endsection

    @section('page_judul', 'Edit Inventaris')
    @section('content')
        <div class="card p-3">
            <div class="mb-3">
                <a href="{{ route('inventaris.index') }}" class="btn btn-success ">kembali</a>
            </div>
            <form action="{{ route('inventaris.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
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
                                <td>
                                    <input class="form-control" type="text" name="nama_barang"
                                        value="{{ $item->nama_barang }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Pembelian</th>
                                <td>
                                    <input class="form-control" type="date" name="tanggal_pembelian"
                                        value="{{ $item->tanggal_pembelian }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Kuantitas</th>
                                <td>
                                    <input class="form-control" type="number" name="kuantitas"
                                        value="{{ $item->kuantitas }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Pembuat</th>
                                <td>
                                    <input class="form-control" type="text" name="pembuat" value="{{ $item->pembuat }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>
                                    <input class="form-control" type="number" name="harga" value="{{ $item->harga }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Sumber Dana</th>
                                <td>
                                    <select class="form-control" type="text" name="sumber_dana"
                                        value="{{ $item->sumber_dana }}">
                                        <option value="Dana Bos">Dana BOS</option>
                                        <option value="Mandiri">Mandiri</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Referensi</th>
                                <td>
                                    <input class="form-control" type="text" name="referensi"
                                        value="{{ $item->referensi }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Penerimaan</th>
                                <td>
                                    <input class="form-control" type="text" name="tanggal_penerimaan"
                                        value="{{ $item->tanggal_penerimaan }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Tempat Pembelian</th>
                                <td>
                                    <input class="form-control" type="text" name="tempat_pembelian"
                                        value="{{ $item->tempat_pembelian }}">
                                </td>
                            </tr>
                            <tr>
                                <th>Kondisi Barang</th>
                                <td>
                                    <select class="form-control" type="text" name="kondisi_barang"
                                        value="{{ $item->kondisi_barang }}">
                                        <option value="Baik">Baik</option>
                                        <option value="Rusak">Rusak</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    @endsection
