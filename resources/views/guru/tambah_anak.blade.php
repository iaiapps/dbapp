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

            <div class="form-group @error('nama') has-error @enderror">
                <label class="form-label " for="namaanak">Nama Anak </label>
                <input class="form-input" type="text" id="namaanak" name="nama" value="{{old('nama')}}" placeholder="Nama Anak" />
                {{-- @error('nama')
                    <p class="form-input-hint danger">{{$message}}</p>
                @enderror --}}
            </div>

            <div class="form-group  @error('status') has-error @enderror">
                <label class="form-label" for="statusanak">Status Anak
                </label>
                <input class="form-input" type="text" id="statusanak" name="status" value="{{old('status')}}" placeholder="Status Anak" />
            </div>

            <div class="form-group  @error('jenjang_pendidikan') has-error @enderror">
                <label class="form-label" for="jenjangpendidikan">Jenjang Pendidikan
                </label>
                <input class="form-input" type="text" id="jenjangpendidikan" name="jenjang_pendidikan" value="{{old('jenjang_pendidikan')}}"
                    placeholder="Jenjang Pendidikan" />
            </div>

            <div class="form-group  @error('nisn') has-error @enderror">
                <label class="form-label" for="nisn">NISN
                </label>
                <input class="form-input" type="text" id="nisn" name="nisn" value="{{old('nisn')}}" placeholder="NISN" />
            </div>

            <div class="form-group  @error('jk') has-error @enderror">
                <label class="form-label" for="jeniskelamin">Jenis Kelamin </label>
                <select class="form-select" id="jeniskelamin" name="jk">
                    <option selected disabled>Pilih</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            <div class="form-group  @error('tempat_lahir') has-error @enderror">
                <label class="form-label" for="tempatlahir">Tempat Lahir
                </label>
                <input class="form-input" type="text" id="tempatlahir" name="tempat_lahir" value="{{old('tempat_lahir')}}" placeholder="Tempat Lahir" />
            </div>

            <div class="form-group  @error('tanggal_lahir') has-error @enderror">
                <label class="form-label" for="tanggallahir">Tanggal Lahir
                </label>
                <input class="form-input" type="text" id="tanggallahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}"
                    placeholder="Tanggal Lahir" />
            </div>

            <div class="form-group  @error('tahun_masuk') has-error @enderror">
                <label class="form-label" for="tahunmasuk">Tahun Masuk
                </label>
                <input class="form-input" type="text" id="tahunmasuk" name="tahun_masuk" value="{{old('tahun_masuk')}}" placeholder="Tahun Masuk" />
            </div>
<br>
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