<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Inventaris Bos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('inventaris.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nama_barang">Nama Barang</label>
                        <input class="form-control" type="text" id="nama_barang" name="nama_barang">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="tanggal_pembelian">Tanggal Pembelian</label>
                                <input class="form-control" type="date" id="tanggal_pembelian"
                                    name="tanggal_pembelian">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="kuantitas">Kuantitas (Unit)</label>
                                <input class="form-control" type="number" id="kuantitas" name="kuantitas">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="pembuat">Pembuat/Pengarang</label>
                                <input class="form-control" type="text" id="pembuat" name="pembuat">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="harga">Harga</label>
                                <input class="form-control" type="number" id="harga" name="harga">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="sumber_dana">Sumber Dana</label>
                        <select class="form-select" id="sumber_dana" name="sumber_dana">
                            <option selected>pilih sumber dana</option>
                            <option value="Dana Bos">Dana Bos</option>
                            <option value="Mandiri">Mandiri</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="referensi">Referensi</label>
                                <input class="form-control" type="text" id="referensi" name="referensi">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="tanggal_penerimaan">Tanggal Penerimaan</label>
                                <input class="form-control" type="date" id="tanggal_penerimaan"
                                    name="tanggal_penerimaan">
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="tempat_pembelian">Tempat Pembelian</label>
                        <input class="form-control" type="text" id="tempat_pembelian" name="tempat_pembelian">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="kondisi_barang">Kondisi Barang</label>
                        <input class="form-control" id="kondisi_barang" name="kondisi_barang">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="file" name="dokumen">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
