@extends('layout.master')
@section('page_judul', 'Form Tambah Anak')
@section('content')
    <div class="card shadow rounded">
        <p class="fs-4 mb-3 px-3 py-3 bg-light rounded">
            Form Anak
        </p>
        <form class="px-2 mx-2" id="form" method="POST" action="{{ route('teachers.tambah_anak') }}">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label class="form-label" for="namaanak">Nama Anak</label>
                    <input class="form-control" type="text" id="namaanak" name="nama" placeholder="Nama Anak" required />
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="tempatlahir">Tempat Lahir
                            </label>
                            <input class="form-control" type="text" id="tempatlahir" name="tempat_lahir"
                                placeholder="Tempat Lahir" required />
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="tanggallahir">Tanggal Lahir
                            </label>
                            <input class="form-control" type="date" id="tanggallahir" name="tanggal_lahir"
                                placeholder="Tanggal Lahir" required />
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="jeniskelamin">Jenis Kelamin </label>
                    <select class="form-select" id="jeniskelamin" name="jk" required>
                        <option>---</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                {{-- <div class="mb-3">
                    <label class="form-label" for="statusanak">Status Anak </label>
                    <input class="form-control" type="text" id="statusanak" name="status" placeholder="Status Anak"
                        required />
                </div> --}}

                <div class="mb-3">
                    <label class="form-label" for="jenjangpendidikan">Jenjang Pendidikan
                    </label>
                    <input class="form-control" type="text" id="jenjangpendidikan" name="jenjang_pendidikan"
                        placeholder="Jenjang Pendidikan" required />
                </div>

                {{-- <div class="mb-3">
                    <label class="form-label" for="nisn">NISN
                    </label>
                    <input class="form-control" type="text" id="nisn" name="nisn" placeholder="NISN" />
                </div> --}}

                {{-- <div class="mb-3">
                        <label class="form-label" for="tahunmasuk">Tahun Masuk
                        </label>
                        <input class="form-control" type="text" id="tahunmasuk" name="tahun_masuk" placeholder="Tahun Masuk"
                            required />
                    </div> --}}

                <div class="btn-group w-100 mb-3">
                    <a href="{{ URL::previous() }}" class="btn btn-secondary">Kembali</a>
                    <input type="submit" value="Simpan" class="btn btn-primary" />
                </div>
            </fieldset>
        </form>
    </div>
@endsection
