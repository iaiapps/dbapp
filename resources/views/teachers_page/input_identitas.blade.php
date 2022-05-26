@extends('layout.master')
@section('page_judul', 'Form Identitas')
@section('content')
    <div class="container grid-md bg-gray card rounded">
        <form class="px-2 mx-2" id="form" action="{{ route('teachers.input_data') }}" method="POST">
            @method('POST')
            @csrf
            <fieldset>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
                <br />
                <!-- Identitas Pendidik dan Tenaga Kependidikan -->
                <h4 class="text-center">
                    IDENTITAS
                </h4>
                <hr class="text-primary" />

                <div class="mb-3 pt-2">
                    <label class="form-label" for="namalengkap">Nama Lengkap (tanpa gelar)</label>
                    <input class="form-control" type="text" id="namalengkap" name="nama" placeholder="Nama Lengkap"
                        required />
                </div>



                <div class="mb-3">
                    <label class="form-label" for="nik">NIK</label>
                    <input class="form-control" type="number" id="nik" name="nik" placeholder="NIK" required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="jeniskelamin">Jenis Kelamin </label>
                    <select class="form-select" id="jeniskelamin" name="jk" required>
                        <option selected disabled>Pilih</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="tempatlahir">Tempat Lahir</label>
                            <input class="form-control" type="text" id="tempatlahir" name="tempat_lahir"
                                placeholder="Tempat Lahir" required />
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="tanggallahir">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="tanggallahir" name="tanggal_lahir"
                                placeholder="Tanggal Lahir" required />
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="namaibukandung">Nama Ibu Kandung</label>
                    <input class="form-control" type="text" id="namaibukandung" name="nama_ibu"
                        placeholder="Nama Ibu Kandung" required />
                </div>

                <div class="mb-3">
                    <label class="form-label" for="nohp">No.Telp/HP</label>
                    <input class="form-control" type="number" name="no_hp" id="nohp" placeholder="No. Telp/HP" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">E-Mail</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                        readonly />
                </div>
                <br />
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Simpan" class="btn float-end btn-lg col-12 btn-primary" />
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
