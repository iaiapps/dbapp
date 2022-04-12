@extends('layout.master')
@section('page_judul', 'Tambah Diklat')
@section('content')
    <div class="card shadow rounded">
        <p class="fs-4 mb-3 px-3 py-3 bg-light rounded">
            Form Pendidikan dan Latihan
        </p>
        <form class="px-2 mx-2" id="form" method="POST" action="{{ route('teachers.input_diklat') }}">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label class="form-label" for="jenis_diklat">Jenis Diklat
                    </label>
                    <input class="form-control" type="text" id="jenis_diklat" name="jenis_diklat"
                        placeholder="Jenis Diklat" required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="nama_diklat">Nama Diklat
                    </label>
                    <input class="form-control" type="text" id="nama_diklat" name="nama_diklat" placeholder="Nama Diklat"
                        required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="penyelenggara">Penyelenggara
                    </label>
                    <input class="form-control" type="text" id="penyelenggara" name="penyelenggara"
                        placeholder="Penyelenggara" required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tahun">Tahun
                    </label>
                    <input class="form-control" type="text" id="tahun" name="tahun" placeholder="Tahun Diklat" required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="peran">Berperan Sebagai
                    </label>
                    <input class="form-control" type="text" id="peran" name="peran" placeholder="Berperan Sebagai"
                        required />
                </div>

                <div class="btn-group mb-3 w-100">
                    <a href="{{ URL::previous() }}" class="btn  btn-secondary">Kembali</a>
                    <input type="submit" value="Simpan" class="btn  btn-primary" />
                </div>
            </fieldset>
        </form>
    </div>
@endsection
