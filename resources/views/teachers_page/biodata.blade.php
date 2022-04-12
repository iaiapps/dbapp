@extends('layout.master')
@section('page_judul', 'Biodata Guru')
@section('alert')
@endsection
@section('content')
    <div id="page_info" class="card rounded">
        <div id="tab">
            <!-- tombol tab -->
            <ul class="nav tab px-1">
                <li class="nav-item">
                    <a href="#" id="defaultOpen" class="nav-link tablinks" onclick="openTab(event, '1')">
                        Identitas
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link tablinks" onclick="openTab(event, '2')">
                        Data Pribadi
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link tablinks" onclick="openTab(event, '3')">
                        Riwayat Pendidikan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link tablinks" onclick="openTab(event, '4')">
                        Data Anak
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link tablinks" onclick="openTab(event, '5')">
                        Diklat
                    </a>
                </li>
            </ul>
        </div>

        <!-- isi tab -->
        <div class="px-4">
            <div id="1" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-start">Identitas PTK</h4>
                    <a class="btn btn-success float-end" href="{{ route('teachers.edit') }}">Edit</a>
                </div>
                <hr class="text-primary" />
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Form</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>{{ $item->nama }}</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>{{ $item->nik }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $item->jk }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>{{ $item->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu Kandung</td>
                            <td>{{ $item->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <td>no telp/hp</td>
                            <td>{{ $item->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td>{{ $item->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="2" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-start">Data Pribadi</h4>
                    <a class="btn btn-success float-end" href="{{ route('teachers.edit') }}">Edit</a>
                </div>
                <hr class="text-primary" />
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Form</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alamat Jalan</td>
                            <td>{{ $item->alamat }}</td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>{{ $item->rt }}</td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>{{ $item->rw }}</td>
                        </tr>
                        <tr>
                            <td>Dusun</td>
                            <td>{{ $item->dusun }}</td>
                        </tr>
                        <tr>
                            <td>Desa/Kelurahan</td>
                            <td>{{ $item->kelurahan }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>{{ $item->kecamatan }}</td>
                        </tr>
                        <tr>
                            <td>Kabupaten/Kota</td>
                            <td>{{ $item->kota }}</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>{{ $item->provinsi }}</td>
                        </tr>
                        <tr>
                            <td>Kode POS</td>
                            <td>{{ $item->kode_pos }}</td>
                        </tr>
                        <tr>
                            <td>Lintang</td>
                            <td>{{ $item->lintang }}</td>
                        </tr>
                        <tr>
                            <td>Bujur</td>
                            <td>{{ $item->bujur }}</td>
                        </tr>
                        <tr>
                            <td>Agama & Kepercayaan</td>
                            <td>{{ $item->agama }}</td>
                        </tr>
                        <tr>
                            <td>NPWP</td>
                            <td>{{ $item->npwp }}</td>
                        </tr>
                        <tr>
                            <td>Nama Wajib Pajak</td>
                            <td>{{ $item->nama_wajib_pajak }}</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>{{ $item->kewarganegaraan }}</td>
                        </tr>
                        <tr>
                            <td>Status Kawin</td>
                            <td>{{ $item->status_perkawinan }}</td>
                        </tr>
                        <tr>
                            <td>Nama Suami/Istri</td>
                            <td>{{ $item->nama_pasangan }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Suami/Istri</td>
                            <td>{{ $item->pekerjaan_pasangan }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            @include('teachers_page.1_riwayat_pendidikan')
            @include('teachers_page.2_anak')
            @include('teachers_page.3_diklat')
        </div>
    </div>
@endsection

@section('css')
@endsection
@section('js')
@stop
