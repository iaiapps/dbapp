    @extends('layout.master')

    @section('alert')
        {{-- <section class="navbar-section">
            <div class="toast toast-error" id="pemberitahuantoast">
                <button class="btn btn-clear float-right" id="closepemberitahuantoast"></button>
                @if ($item->status_verifikasi == 1)
                    {{ 'Berhasil Verifikasi' }}
                @elseif($item->status_verifikasi == 2)
                    {{ 'Menunggu Verifikasi' }}
                @else
                    {{ 'Perubahan sedang ditinjau' }}
                @endif
            </div>
        </section> --}}
    @endsection
    @section('content')
        <div class="leftright">
            <h3 class="bg-primary p-2">Rincian Data</h3>

            <!-- tombol tab -->
            <div class="tab tab-block">
                <li class="tab-item">
                    <a href="#" id="defaultOpen" class="tablinks" onclick="openTab(event, '1')">
                        Identitas
                    </a>
                </li>
                <li class="tab-item">
                    <a href="#" class="tablinks" onclick="openTab(event, '2')">
                        Data Pribadi
                    </a>
                </li>

                <li class="tab-item">
                    <a href="#" class="tablinks" onclick="openTab(event, '3')">
                        Riwayat Pendidikan
                    </a>
                </li>
                <li class="tab-item">
                    <a href="#" class="tablinks" onclick="openTab(event, '4')">
                        Anak
                    </a>
                </li>

                <li class="tab-item">
                    <a href="#" class="tablinks" onclick="openTab(event, '5')">
                        Diklat
                    </a>
                </li>
            </div>

            <!-- isi tab -->
            <div id="1" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-left">Identitas PTK</h4>
                    <a class="btn btn-primary float-right" href="{{ route('guru.edit') }}">Edit</a>
                </div>
                <hr class="text-primary" />
                <table class="table table-striped tab-content" id="1">
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
                    <h4 class="float-left">Data Pribadi</h4>
                    <a class="btn btn-primary float-right" href="{{ route('guru.edit') }}">Edit</a>
                </div>
                <hr class="text-primary" />
                <table class="table table-striped tab-content" id="2">
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
                        <tr>
                            <td>NIP</td>
                            <td>{{ $item->nip_pasangan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            @include('guru.1_riwayat_pendidikan')
            @include('guru.2_anak')
            @include('guru.3_diklat')

        </div>
    @endsection

    @section('css')
    @endsection
    @section('js')
    @stop
