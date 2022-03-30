@extends('layout.master')
@section('page_judul', 'Data Sekolah')
@section('content')
    <div class="card rounded p-3">
        <div class="mb-3">
            <a href="{{ route('operator.edit_schoolid', $item->id) }}" class="btn btn-primary float-end ml-1">Edit </a>
        </div>
        <div class="table-responsive">
            <table id="example" class="table">
                <tbody>
                    <tr>
                        <th>Nama Sekolah</th>
                        <td>{{ $item->nama_sekolah }}</td>
                    </tr>
                    <tr>
                        <th>Npsn</th>
                        <td>{{ $item->npsn }}</td>
                    </tr>
                    {{-- <tr>
                        <th>NSS</th>
                        <td>{{ $item->nss }}</td>
                    </tr> --}}
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
    </div>
@endsection
