@extends('layout.master')
@section('content')
    @include('sweetalert::alert')

    <br>
    <form action="{{ route('siswa.input_prestasi') }}" method="post">
        @csrf
        <form class="px-2 mx-2 pt-1" id="form">
            <fieldset>

                <h4 class="text-center">Prestasi</h4>
                <hr class="text-primary" />

                <div class="mb-3">
                    <label class="form-label" for="jenisprestasi">Jenis Prestasi
                    </label>
                    <select class="form-select" id="jenisprestasi" required name="jenis_prestasi">
                        <option>---</option>
                        <option>Akademik</option>
                        <option>Sains</option>
                        <option>Seni</option>
                        <option>Olahraga</option>
                        <option>Lain-lain</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tingkat">Tingkat </label>
                    <select class="form-select" id="tingkat" required name="tingkat">
                        <option>---</option>
                        <option>Sekolah</option>
                        <option>Kecamatan</option>
                        <option>Kabupaten</option>
                        <option>Provinsi</option>
                        <option>Nasional</option>
                        <option>Internasional</option>
                    </select>
                </div>

                <div class="mb-3 pt-2">
                    <label class="form-label" for="namaprestasi">Nama Prestasi</label>
                    <input class="form-control" type="text" id="namaprestasi" placeholder="Nama Prestasi" required
                        name="nama_prestasi" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tahun">Tahun</label>
                    <input class="form-control" type="number" id="tahun" placeholder="Tahun" required name="tahun" />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="penyelenggara">Penyelenggara</label>
                    <input class="form-control" type="text" id="keterangan" placeholder="Keterangan" name="penyelenggara">

                    </input>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="peringkat">Peringkat</label>
                    <input class="form-control" type="text" id="keterangan" placeholder="Keterangan" name="peringkat">

                    </input>
                </div>

                <br />
                <div class="columns">
                    <div class="column">
                        <input type="submit" value="Simpan" class="btn float-end btn-lg col-12 btn-primary" />
                    </div>
                    <div class="column">
                        {{-- <input type="submit" value="Batal" class="btn float-end btn-lg col-12 btn-primary" /> --}}
                    </div>
                </div>
            </fieldset>
        </form>
    </form>
@endsection
