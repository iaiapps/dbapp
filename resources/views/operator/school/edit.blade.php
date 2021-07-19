@extends('layout.master')
@section('content')

    <form action="{{ route('operator.update_schoolid', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="py-2 my-2 clear-fix">
            <h3 class="float-left">Data Sekolah</h3>
        </div>
        <div class="table table-responsive">
            <table id="example" class="display table-striped" style="width:100%">
                <tbody>
                    <tr>
                        <th>Nama Sekolah</th>
                        <td><input type="text" class="form-input" name="nama_sekolah" value="{{ $item->nama_sekolah }}">
                        </td>
                    </tr>
                    <tr>
                        <th>Npsn</th>
                        <td><input type="text" class="form-input" name="npsn" value="{{ $item->npsn }}"></td>
                    </tr>
                    <tr>
                        <th>nss</th>
                        <td><input type="text" class="form-input" name="nss" value="{{ $item->nss }}"></td>
                    </tr>
                    <tr>
                        <th>Alamat Sekolah</th>
                        <td><input type="text" class="form-input" name="alamat_sekolah"
                                value="{{ $item->alamat_sekolah }}"></td>
                    </tr>
                    <tr>
                        <th>Kode Pos</th>
                        <td><input type="text" class="form-input" name="kode_pos" value="{{ $item->kode_pos }}"></td>
                    </tr>
                    <tr>
                        <th>No Telp</th>
                        <td><input type="text" class="form-input" name="no_telp" value="{{ $item->no_telp }}"></td>
                    </tr>
                    <tr>
                        <th>Kelurahan</th>
                        <td><input type="text" class="form-input" name="kelurahan" value="{{ $item->kelurahan }}"></td>
                    </tr>
                    <tr>
                        <th>Kecamatan</th>
                        <td><input type="text" class="form-input" name="kecamatan" value="{{ $item->kecamatan }}"></td>
                    </tr>
                    <tr>
                        <th>Kota</th>
                        <td><input type="text" class="form-input" name="kota" value="{{ $item->kota }}"></td>
                    </tr>
                    <tr>
                        <th>Provinsi</th>
                        <td><input type="text" class="form-input" name="provinsi" value="{{ $item->provinsi }}"></td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td><input type="text" class="form-input" name="website" value="{{ $item->website }}"></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="text" class="form-input" name="email" value="{{ $item->email }}"></td>
                    </tr>
                </tbody>

            </table>

        </div>
        <button type="SUBMIT" class="btn btn-primary float-right ml-1">Update </button>
    </form>
@endsection
