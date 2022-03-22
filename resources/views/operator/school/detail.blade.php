@extends('layout.master')
@section('content')
    <div class="py-2 my-2 clear-fix">
        <h3 class="float-start">Data Sekolah</h3>
        <a href="{{ route('operator.edit_schoolid', $item->id) }}" class="btn btn-primary float-end ml-1">Edit </a>
    </div>
    <div class="table table-responsive">
        <table id="example" class="display table-striped" style="width:100%">
            <tbody>
                <tr>
                    <th>Nama Sekolah</th>
                    <td>{{ $item->nama_sekolah }}</td>
                </tr>
                <tr>
                    <th>Npsn</th>
                    <td>{{ $item->npsn }}</td>
                </tr>
                <tr>
                    <th>nss</th>
                    <td>{{ $item->nss }}</td>
                </tr>
                <tr>
                    <th>Alamat Sekolah</th>
                    <td>{{ $item->alamat_sekolah }}</td>
                </tr>
                <tr>
                    <th>Kode Pos</th>
                    <td>{{ $item->kode_pos }}</td>
                </tr>
                <tr>
                    <th>No Telp</th>
                    <td>{{ $item->no_telp }}</td>
                </tr>
                <tr>
                    <th>Kelurahan</th>
                    <td>{{ $item->kelurahan }}</td>
                </tr>
                <tr>
                    <th>Kecamatan</th>
                    <td>{{ $item->kecamatan }}</td>
                </tr>
                <tr>
                    <th>Kota</th>
                    <td>{{ $item->kota }}</td>
                </tr>
                <tr>
                    <th>Provinsi</th>
                    <td>{{ $item->provinsi }}</td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td>{{ $item->website }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $item->email }}</td>
                </tr>
            </tbody>

        </table>
    </div>
@endsection
