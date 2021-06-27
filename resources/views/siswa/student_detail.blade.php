    @extends('layout.master')

    @section('alert')
        <section class="navbar-section">
            <div class="toast toast-warning" id="pemberitahuantoast">
                {{-- <button class="btn btn-clear float-right" id="closepemberitahuantoast"></button> --}}
                @if ($item->status_verifikasi == 1)
                    {{ 'Telah di verifikasi' }}
                @elseif($item->status_verifikasi == 2)
                    {{ 'Menunggu Verifikasi' }}
                @else
                    {{ 'Perubahan sedang ditinjau' }}
                @endif
                {{-- </div> --}}
        </section>
    @endsection
    @section('content')

        @php
            if (Auth::user()->role_id == 4) {
                $button_edit = 'Revisi data';
            } else {
                $button_edit = 'Edit';
            }
        @endphp
        <div class="leftright">
            <h3 class="bg-primary p-2">Rincian Data</h3>
            <div class="tab tab-block">
                <li class="tab-item">
                    <a href="#" id="defaultOpen" class="tablinks" onclick="openTab(event, '1')">
                        Identitas
                    </a>
                </li>
                <li class="tab-item">
                    <a href="#" class="tablinks" onclick="openTab(event, '2')">
                        Data Ayah
                    </a>
                </li>
                <li class="tab-item">
                    <a href="#" class="tablinks" onclick="openTab(event, '3')">
                        Data Ibu
                    </a>
                </li>
                <li class="tab-item">
                    <a href="#" class="tablinks" onclick="openTab(event, '4')">
                        Data Wali
                    </a>
                </li>

                <li class="tab-item">
                    <a href="#" class="tablinks" onclick="openTab(event, '5')">
                        Prestasi
                    </a>
                </li>
            </div>

            <!-- isi tab -->
            <div id="1" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-left">Identitas Peserta Didik</h4>
                    <a class="btn btn-primary float-right" href="{{ route('siswa_edit') }}">{{ $button_edit }}</a>
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
                            <td>Jenis Kelamin</td>
                            <td>{{ $item->jk }}</td>
                        </tr>

                        <tr>
                            <td>NIK</td>
                            <td>{{ $item->nik }}</td>
                        </tr>
                        <tr>
                            <td>No. KK</td>
                            <td>{{ $item->no_kk }}</td>
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
                            <td>Agama & Kepercayaan</td>
                            <td>{{ $item->agama }}</td>
                        </tr>
                        {{-- <tr>
                            <td>Kewarganegaraan</td>
                            <td>{{ $item->negara }}</td>
                        </tr> --}}
                        <tr>
                            <td>Berkebutuhan Khusus</td>
                            <td>{{ $item->kebutuhan_khusus }}</td>
                        </tr>
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
                            <td>Tempat Tinggal</td>
                            <td>{{ $item->jenis_tinggal }}</td>
                        </tr>
                        <tr>
                            <td>Moda Transportasi</td>
                            <td>{{ $item->alat_transportasi }}</td>
                        </tr>

                        <tr>
                            <td>Anak Ke Berapa</td>
                            <td>{{ $item->anak_ke }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah saudara</td>
                            <td>{{ $item->jumlah_saudara_kandung }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="2" class="tabcontent">
                <br />

                <div class="clearfix">
                    <h4 class="float-left">Data Ayah Kandung</h4>
                    <a class="btn btn-primary float-right" href="{{ route('siswa_edit') }}">{{ $button_edit }}</a>
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
                            <td>Nama ayah Kandung</td>
                            <td>{{ $item->nama_ayah }}</td>
                        </tr>
                        <tr>
                            <td>NIK ayah</td>
                            <td>{{ $item->nik_ayah }}</td>
                        </tr>
                        <tr>
                            <td>Tahun Lahir</td>
                            <td>{{ $item->tanggal_lahir_ayah }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ $item->pendidikan_ayah }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{ $item->pekerjaan_ayah }}</td>
                        </tr>
                        <tr>
                            <td>Penghasilan Bulanan</td>
                            <td>{{ $item->penghasilan_ayah }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp/HP</td>
                            <td>{{ $item->hp_ayah }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="3" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-left">Data Ibu Kandung</h4>
                    <a class="btn btn-primary float-right" href="{{ route('siswa_edit') }}">{{ $button_edit }}</a>
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
                            <td>Nama ibu Kandung</td>
                            <td>{{ $item->nama_ibu }}</td>
                        </tr>
                        <tr>
                            <td>NIK ibu</td>
                            <td>{{ $item->nik_ibu }}</td>
                        </tr>
                        <tr>
                            <td>Tahun Lahir</td>
                            <td>{{ $item->tanggal_lahir_ibu }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ $item->pendidikan_ibu }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{ $item->pekerjaan_ibu }}</td>
                        </tr>
                        <tr>
                            <td>Penghasilan Bulanan</td>
                            <td>{{ $item->penghasilan_ibu }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp/HP</td>
                            <td>{{ $item->hp_ibu }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="4" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-left">Data Wali</h4>
                    <a class="btn btn-primary float-right" href="{{ route('siswa_edit') }}">{{ $button_edit }}</a>
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
                            <td>Nama wali</td>
                            <td>{{ $item->nama_wali }}</td>
                        </tr>
                        <tr>
                            <td>NIK wali</td>
                            <td>{{ $item->nik_wali }}</td>
                        </tr>
                        <tr>
                            <td>Tahun Lahir</td>
                            <td>{{ $item->tanggal_lahir_wali }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ $item->pendidikan_wali }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{ $item->pekerjaan_wali }}</td>
                        </tr>
                        <tr>
                            <td>Penghasilan Bulanan</td>
                            <td>{{ $item->penghasilan_wali }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp/HP</td>
                            <td>{{ $item->hp_wali }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="5" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-left">Data Prestasi</h4>
                    <a class="btn btn-primary float-right" href="{{ route('siswa_prestasi') }}">Tambah Prestasi</a>
                </div>
                <hr class="text-primary" />
                <table class="table table-striped tab-content" id="8">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis Prestasi</th>
                            <th>Tingkat</th>
                            <th>Nama Prestasi</th>
                            <th>Tahun</th>
                            <th>Ket</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item->achievements as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->jenis_prestasi }}</td>
                                <td>{{ $item->tingkat }}</td>
                                <td>{{ $item->nama_prestasi }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>
                                    <form action="{{ route('siswa.hapus_prestasi', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <span><i class="las la-minus-circle"></i></span>
                                        </button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

    @section('css')
    @endsection
    @section('js')
        @if (Session::has('success'))
            <script>
                tata.success("OK", "{!! Session::get('success') !!}")
            </script>
        @endif
    @stop
