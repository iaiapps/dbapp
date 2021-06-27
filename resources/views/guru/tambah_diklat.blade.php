@extends('layout.master')
@section('content')
    <div class="container grid-md bg-gray card">
        <form class="px-2 mx-2" id="form" method="POST" action="{{ route('guru.input_diklat') }}">
            @csrf
            <fieldset>
                <br />
                <h4 class="text-center bg-primary p-2">
                    Pendidikan dan Pelatihan
                </h4>

                <br />
                <hr class="text-primary" />

                <div class="form-group">
                    <label class="form-label" for="jenis_diklat">Jenis Diklat
                    </label>
                    <input class="form-input" type="text" id="jenis_diklat" name="jenis_diklat" placeholder="Bidang Studi"
                        required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="nama_diklat">Nama Diklat
                    </label>
                    <input class="form-input" type="text" id="nama_diklat" name="nama_diklat"
                        placeholder="Jenjang Pendidikan" required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="penyelenggara">Penyelenggara
                    </label>
                    <input class="form-input" type="text" id="penyelenggara" name="penyelenggara"
                        placeholder="Gelar Akademik" required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="tahun">Tahun
                    </label>
                    <input class="form-input" type="text" id="tahun" name="tahun" placeholder="Satuan Pendidikan"
                        required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="peran">Peran sebagai
                    </label>
                    <input class="form-input" type="text" id="peran" name="peran" placeholder="Tahun Masuk" required />
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
