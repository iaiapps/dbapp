@extends('layout.master')
@section('content')
    <div class="container grid-md bg-gray card">
        <form class="px-2 mx-2" id="form" method="POST" action="{{ route('guru.input_pendidikan') }}">
            @csrf
            <fieldset>
                <br />
                <h4 class="text-center bg-primary p-2">
                    Riwayat Pendidikan Formal
                </h4>

                <br />
                <hr class="text-primary" />

                <div class="form-group pt-2">
                    <label class="form-label" for="bidangstudi">Bidang Studi
                    </label>
                    <input class="form-input" type="text" id="bidangstudi" name="bidang_study" placeholder="Bidang Studi" />
                </div>

                <div class="form-group">
                    <label class="form-label" for="jenjangpendidikan">Jenjang Pendidikan

                    </label>
                    <input class="form-input" type="text" id="jenjangpendidikan" name="jenjang_pendidikan"
                        placeholder="Jenjang  Pendidikan" required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="gelarakademik">Gelar Akademik
                    </label>
                    <input class="form-input" type="text" id="gelarakademik" name="gelar_akademik"
                        placeholder="Gelar Akademik" />
                </div>

                <div class="form-group">
                    <label class="form-label" for="satuanpendidikan">Satuan Pendidikan
                    </label>
                    <input class="form-input" type="text" id="satuanpendidikan" name="nama_satuan_pendidikan"
                        placeholder="Satuan Pendidikan" required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="tahunmasuk">Tahun Masuk
                    </label>
                    <input class="form-input" type="text" id="tahunmasuk" name="tahun_masuk" placeholder="Tahun Masuk"
                        required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="tahunlulus">Tahun Lulus
                    </label>
                    <input class="form-input" type="text" id="tahunlulus" name="tahun_lulus" placeholder="Tahun Lulus"
                        required />
                </div>

                <div class="form-group">
                    <label class="form-label" for="nim">NIM
                    </label>
                    <input class="form-input" type="text" id="nim" name="nim" placeholder="NIM" />
                </div>

                {{-- <div class="form-group">
                    <label class="form-label" for="masih">Masih
                    </label>
                    <input class="form-input" type="text" id="masih" name="masih" placeholder="Masih" />
                </div> --}}

                <div class="form-group">
                    <label class="form-label" for="semester">Semester
                    </label>
                    <input class="form-input" type="text" id="semester" name="semester" placeholder="Semester" />
                </div>

                <div class="form-group">
                    <label class="form-label" for="ipk">IPK
                    </label>
                    <input class="form-input" type="text" id="ipk" name="ipk" placeholder="IPK" />
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
