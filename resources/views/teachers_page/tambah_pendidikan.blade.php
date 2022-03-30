@extends('layout.master')
@section('page_judul', 'Tambah Pendidikan')
@section('content')

    <div class="card shadow rounded">
        <p class="fs-4 mb-3 px-3 py-3 bg-light rounded">
            Riwayat Pendidikan Formal
        </p>
        <form class="px-2 mx-2" id="form" method="POST" action="{{ route('guru.input_pendidikan') }}">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label class="form-label" for="jenjangpendidikan">Jenjang Pendidikan
                    </label>
                    <input class="form-control" type="text" id="jenjangpendidikan" name="jenjang_pendidikan"
                        placeholder="Jenjang Pendidikan" required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="gelarakademik">Gelar Akademik
                    </label>
                    <input class="form-control" type="text" id="gelarakademik" name="gelar_akademik"
                        placeholder="Gelar Akademik" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="satuanpendidikan">Nama Lembaga / Sekolah / Satuan
                        Pendidikan
                    </label>
                    <input class="form-control" type="text" id="satuanpendidikan" name="nama_satuan_pendidikan"
                        placeholder="Satuan Pendidikan" required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="fakultas">Nama Fakultas
                    </label>
                    <input class="form-control" type="text" id="fakultas" name="fakultas" placeholder="Fakultas"
                        required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tahunmasuk">Tahun Masuk
                    </label>
                    <input class="form-control" type="text" id="tahunmasuk" name="tahun_masuk" placeholder="Tahun Masuk"
                        required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tahunlulus">Tahun Lulus
                    </label>
                    <input class="form-control" type="text" id="tahunlulus" name="tahun_lulus" placeholder="Tahun Lulus"
                        required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="nim">NISN/NIM
                    </label>
                    <input class="form-control" type="text" id="nim" name="nim" placeholder="NIM" />
                </div>
                <div class="btn-group mb-3 w-100">
                    <input type="submit" value="Simpan" class="btn float-end btn-primary" />
                    <a href="{{ URL::previous() }}" class="btn float-start btn-secondary">Kembali</a>
                </div>
            </fieldset>
        </form>
        <p class="small px-3">
            NB: Jika ada form yang tidak sesuai bisa diisi "-" (tanpa kutip).
        </p>
    </div>
@endsection
