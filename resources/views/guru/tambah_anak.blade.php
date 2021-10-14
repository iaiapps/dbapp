@extends('layout.master')
@section('content')
    <div class="container grid-md bg-gray card">
        <form class="px-2 mx-2" id="form" method="POST" action="{{ route('guru.tambah_anak') }}">
            @csrf
            <fieldset>
                <br />
                <h4 class="text-center bg-primary p-2">
                    Data Anak
                </h4>

                <br />
                <hr class="text-primary" />

                <div class="form-group pt-2">
                    <label class="form-label" for="namaanak">
                        <span class="badge"> Nama Anak </span>
                    </label>
                    <input class="form-input" type="text" id="namaanak" name="nama" placeholder="Nama Anak" required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="statusanak">Status Anak
                    </label>
                    <input class="form-input" type="text" id="statusanak" name="status" placeholder="Status Anak"
                        required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="jenjangpendidikan">Jenjang Pendidikan
                    </label>
                    <input class="form-input" type="text" id="jenjangpendidikan" name="jenjang_pendidikan"
                        placeholder="Jenjang Pendidikan" required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="nisn">NISN
                    </label>
                    <input class="form-input" type="text" id="nisn" name="nisn" placeholder="NISN" />
                </div>

                <div class="form-group">
                    <label class="form-label" for="jeniskelamin">Jenis Kelamin </label>
                    <select class="form-select" id="jeniskelamin" name="jk" required>
                        <option>---</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="tempatlahir">Tempat Lahir
                    </label>
                    <input class="form-input" type="text" id="tempatlahir" name="tempat_lahir" placeholder="Tempat Lahir"
                        required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="tanggallahir">Tanggal Lahir
                    </label>
                    <input class="form-input" type="text" id="tanggallahir" name="tanggal_lahir" placeholder="Tanggal Lahir"
                        required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="tahunmasuk">Tahun Masuk
                    </label>
                    <input class="form-input" type="text" id="tahunmasuk" name="tahun_masuk" placeholder="Tahun Masuk"
                        required />
                </div>

                <div class="columns">
                    <div class="column">
                        <input type="submit" value="Simpan" class="btn float-right btn-lg col-12 btn-primary" />
                    </div>
                    <div class="column">
                        <a href="{{ URL::previous() }}" class="btn float-right btn-lg col-12 btn-secondary">Kembali</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

@endsection
