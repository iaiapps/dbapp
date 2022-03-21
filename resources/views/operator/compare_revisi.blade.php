    @extends('layout.master')
    @section('alert')
        <section class="navbar-section">
            <div class="toast toast-warning" id="pemberitahuantoast">
                {{-- <button class="btn btn-clear float-end" id="closepemberitahuantoast"></button> --}}
                @if ($dataOld->status_verifikasi == 1)
                    {{ 'Telah di verifikasi' }}
                @elseif($dataOld->status_verifikasi == 2)
                    {{ 'Menunggu Verifikasi' }}
                @else
                    {{ 'Perubahan sedang ditinjau' }}
                @endif
                {{-- </div> --}}
        </section>
    @endsection
    @section('content')
        <div class="leftright">
            <h3 class="bg-primary p-2">Revisi data</h3>
            <a class="btn btn-primary float-end" href="">Terapkan perubahan</a>
            <table class="table ">
                <thead>
                    <tr>
                        <th>Form</th>
                        <th>Lama</th>
                        <th>Baru</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- DATA_PRIBADI --}}
                    <tr>
                        <td @if ($dataOld->nama !== $dataNew->nama) style="background-color:yellow" @endif>Nama Lengkap</td>
                        <td @if ($dataOld->nama !== $dataNew->nama) style="background-color:yellow" @endif>{{ $dataOld->nama }}
                        </td>
                        <td @if ($dataOld->nama !== $dataNew->nama) style="background-color:yellow" @endif>{{ $dataNew->nama }}
                        </td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->jk !== $dataNew->jk) style="background-color:yellow" @endif>Jenis Kelamin</td>
                        <td @if ($dataOld->jk !== $dataNew->jk) style="background-color:yellow" @endif>{{ $dataOld->jk }}
                        </td>
                        <td @if ($dataOld->jk !== $dataNew->jk) style="background-color:yellow" @endif>{{ $dataNew->jk }}
                        </td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->nik !== $dataNew->nik) style="background-color:yellow" @endif>NIK</td>
                        <td @if ($dataOld->nik !== $dataNew->nik) style="background-color:yellow" @endif>{{ $dataOld->nik }}
                        </td>
                        <td @if ($dataOld->nik !== $dataNew->nik) style="background-color:yellow" @endif>{{ $dataNew->nik }}
                        </td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->no_kk !== $dataNew->no_kk) style="background-color:yellow" @endif>No. KK</td>
                        <td @if ($dataOld->no_kk !== $dataNew->no_kk) style="background-color:yellow" @endif>
                            {{ $dataOld->no_kk }}
                        </td>
                        <td @if ($dataOld->no_kk !== $dataNew->no_kk) style="background-color:yellow" @endif>
                            {{ $dataNew->no_kk }}
                        </td>
                    </tr>

                    <tr>
                        <td @if ($dataOld->tempat_lahir !== $dataNew->tempat_lahir) style="background-color:yellow" @endif>Tempat Lahir</td>
                        <td @if ($dataOld->tempat_lahir !== $dataNew->tempat_lahir) style="background-color:yellow" @endif>
                            {{ $dataOld->tempat_lahir }}</td>
                        <td @if ($dataOld->tempat_lahir !== $dataNew->tempat_lahir) style="background-color:yellow" @endif>
                            {{ $dataNew->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->tanggal_lahir !== $dataNew->tanggal_lahir) style="background-color:yellow" @endif>Tanggal Lahir</td>
                        <td @if ($dataOld->tanggal_lahir !== $dataNew->tanggal_lahir) style="background-color:yellow" @endif>
                            {{ $dataOld->tanggal_lahir }}</td>
                        <td @if ($dataOld->tanggal_lahir !== $dataNew->tanggal_lahir) style="background-color:yellow" @endif>
                            {{ $dataNew->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->agama !== $dataNew->agama) style="background-color:yellow" @endif>Agama & Kepercayaan
                        </td>
                        <td @if ($dataOld->agama !== $dataNew->agama) style="background-color:yellow" @endif>
                            {{ $dataOld->agama }}
                        </td>
                        <td @if ($dataOld->agama !== $dataNew->agama) style="background-color:yellow" @endif>
                            {{ $dataNew->agama }}
                        </td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->kebutuhan_khusus !== $dataNew->kebutuhan_khusus) style="background-color:yellow" @endif>Berkebutuhan Khusus
                        </td>
                        <td @if ($dataOld->kebutuhan_khusus !== $dataNew->kebutuhan_khusus) style="background-color:yellow" @endif>
                            {{ $dataOld->kebutuhan_khusus }}</td>
                        <td @if ($dataOld->kebutuhan_khusus !== $dataNew->kebutuhan_khusus) style="background-color:yellow" @endif>
                            {{ $dataNew->kebutuhan_khusus }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->alamat !== $dataNew->alamat) style="background-color:yellow" @endif>Alamat Jalan</td>
                        <td @if ($dataOld->alamat !== $dataNew->alamat) style="background-color:yellow" @endif>
                            {{ $dataOld->alamat }}</td>
                        <td @if ($dataOld->alamat !== $dataNew->alamat) style="background-color:yellow" @endif>
                            {{ $dataNew->alamat }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->rt !== $dataNew->rt) style="background-color:yellow" @endif>RT</td>
                        <td @if ($dataOld->rt !== $dataNew->rt) style="background-color:yellow" @endif>{{ $dataOld->rt }}
                        </td>
                        <td @if ($dataOld->rt !== $dataNew->rt) style="background-color:yellow" @endif>{{ $dataNew->rt }}
                        </td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->rw !== $dataNew->rw) style="background-color:yellow" @endif>RW</td>
                        <td @if ($dataOld->rw !== $dataNew->rw) style="background-color:yellow" @endif>{{ $dataOld->rw }}
                        </td>
                        <td @if ($dataOld->rw !== $dataNew->rw) style="background-color:yellow" @endif>{{ $dataNew->rw }}
                        </td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->dusun !== $dataNew->dusun) style="background-color:yellow" @endif>Dusun</td>
                        <td @if ($dataOld->dusun !== $dataNew->dusun) style="background-color:yellow" @endif>
                            {{ $dataOld->dusun }}
                        </td>
                        <td @if ($dataOld->dusun !== $dataNew->dusun) style="background-color:yellow" @endif>
                            {{ $dataNew->dusun }}
                        </td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->kelurahan !== $dataNew->kelurahan) style="background-color:yellow" @endif>Desa/Kelurahan</td>
                        <td @if ($dataOld->kelurahan !== $dataNew->kelurahan) style="background-color:yellow" @endif>
                            {{ $dataOld->kelurahan }}</td>
                        <td @if ($dataOld->kelurahan !== $dataNew->kelurahan) style="background-color:yellow" @endif>
                            {{ $dataNew->kelurahan }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->kecamatan !== $dataNew->kecamatan) style="background-color:yellow" @endif>Kecamatan</td>
                        <td @if ($dataOld->kecamatan !== $dataNew->kecamatan) style="background-color:yellow" @endif>
                            {{ $dataOld->kecamatan }}</td>
                        <td @if ($dataOld->kecamatan !== $dataNew->kecamatan) style="background-color:yellow" @endif>
                            {{ $dataNew->kecamatan }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->kota !== $dataNew->kota) style="background-color:yellow" @endif>Kabupaten/Kota</td>
                        <td @if ($dataOld->kota !== $dataNew->kota) style="background-color:yellow" @endif>
                            {{ $dataOld->kota }}
                        </td>
                        <td @if ($dataOld->kota !== $dataNew->kota) style="background-color:yellow" @endif>
                            {{ $dataNew->kota }}
                        </td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->provinsi !== $dataNew->provinsi) style="background-color:yellow" @endif>Provinsi</td>
                        <td @if ($dataOld->provinsi !== $dataNew->provinsi) style="background-color:yellow" @endif>
                            {{ $dataOld->provinsi }}</td>
                        <td @if ($dataOld->provinsi !== $dataNew->provinsi) style="background-color:yellow" @endif>
                            {{ $dataNew->provinsi }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->kode_pos !== $dataNew->kode_pos) style="background-color:yellow" @endif>Kode POS</td>
                        <td @if ($dataOld->kode_pos !== $dataNew->kode_pos) style="background-color:yellow" @endif>
                            {{ $dataOld->kode_pos }}</td>
                        <td @if ($dataOld->kode_pos !== $dataNew->kode_pos) style="background-color:yellow" @endif>
                            {{ $dataNew->kode_pos }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->lintang !== $dataNew->lintang) style="background-color:yellow" @endif>Lintang</td>
                        <td @if ($dataOld->lintang !== $dataNew->lintang) style="background-color:yellow" @endif>
                            {{ $dataOld->lintang }}</td>
                        <td @if ($dataOld->lintang !== $dataNew->lintang) style="background-color:yellow" @endif>
                            {{ $dataNew->lintang }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->bujur !== $dataNew->bujur) style="background-color:yellow" @endif>Bujur</td>
                        <td @if ($dataOld->bujur !== $dataNew->bujur) style="background-color:yellow" @endif>
                            {{ $dataOld->bujur }}
                        </td>
                        <td @if ($dataOld->bujur !== $dataNew->bujur) style="background-color:yellow" @endif>
                            {{ $dataNew->bujur }}
                        </td>
                    </tr>

                    <tr>
                        <td @if ($dataOld->jenis_tinggal !== $dataNew->jenis_tinggal) style="background-color:yellow" @endif>Tempat Tinggal</td>
                        <td @if ($dataOld->jenis_tinggal !== $dataNew->jenis_tinggal) style="background-color:yellow" @endif>
                            {{ $dataOld->jenis_tinggal }}</td>
                        <td @if ($dataOld->jenis_tinggal !== $dataNew->jenis_tinggal) style="background-color:yellow" @endif>
                            {{ $dataNew->jenis_tinggal }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->alat_transportasi !== $dataNew->alat_transportasi) style="background-color:yellow" @endif>Moda Transportasi
                        </td>
                        <td @if ($dataOld->alat_transportasi !== $dataNew->alat_transportasi) style="background-color:yellow" @endif>
                            {{ $dataOld->alat_transportasi }}</td>
                        <td @if ($dataOld->alat_transportasi !== $dataNew->alat_transportasi) style="background-color:yellow" @endif>
                            {{ $dataNew->alat_transportasi }}</td>
                    </tr>

                    <tr>
                        <td @if ($dataOld->anak_ke !== $dataNew->anak_ke) style="background-color:yellow" @endif>Anak Ke Berapa</td>
                        <td @if ($dataOld->anak_ke !== $dataNew->anak_ke) style="background-color:yellow" @endif>
                            {{ $dataOld->anak_ke }}</td>
                        <td @if ($dataOld->anak_ke !== $dataNew->anak_ke) style="background-color:yellow" @endif>
                            {{ $dataNew->anak_ke }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->jumlah_saudara_kandung !== $dataNew->jumlah_saudara_kandung) style="background-color:yellow" @endif>Jumlah saudara</td>
                        <td @if ($dataOld->jumlah_saudara_kandung !== $dataNew->jumlah_saudara_kandung) style="background-color:yellow" @endif>
                            {{ $dataOld->jumlah_saudara_kandung }}</td>
                        <td @if ($dataOld->jumlah_saudara_kandung !== $dataNew->jumlah_saudara_kandung) style="background-color:yellow" @endif>
                            {{ $dataNew->jumlah_saudara_kandung }}</td>
                    </tr>
                    {{-- DATA_AYAH --}}
                    <tr>
                        <td @if ($dataOld->nama_ayah !== $dataNew->nama_ayah) style="background-color:yellow" @endif>Nama ayah Kandung
                        </td>
                        <td @if ($dataOld->nama_ayah !== $dataNew->nama_ayah) style="background-color:yellow" @endif>
                            {{ $dataOld->nama_ayah }}</td>
                        <td @if ($dataOld->nama_ayah !== $dataNew->nama_ayah) style="background-color:yellow" @endif>
                            {{ $dataNew->nama_ayah }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->nik_ayah !== $dataNew->nik_ayah) style="background-color:yellow" @endif>NIK ayah</td>
                        <td @if ($dataOld->nik_ayah !== $dataNew->nik_ayah) style="background-color:yellow" @endif>
                            {{ $dataOld->nik_ayah }}</td>
                        <td @if ($dataOld->nik_ayah !== $dataNew->nik_ayah) style="background-color:yellow" @endif>
                            {{ $dataNew->nik_ayah }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->tanggal_lahir_ayah !== $dataNew->tanggal_lahir_ayah) style="background-color:yellow" @endif>Tahun Lahir</td>
                        <td @if ($dataOld->tanggal_lahir_ayah !== $dataNew->tanggal_lahir_ayah) style="background-color:yellow" @endif>
                            {{ $dataOld->tanggal_lahir_ayah }}</td>
                        <td @if ($dataOld->tanggal_lahir_ayah !== $dataNew->tanggal_lahir_ayah) style="background-color:yellow" @endif>
                            {{ $dataNew->tanggal_lahir_ayah }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->pendidikan_ayah !== $dataNew->pendidikan_ayah) style="background-color:yellow" @endif>Pendidikan</td>
                        <td @if ($dataOld->pendidikan_ayah !== $dataNew->pendidikan_ayah) style="background-color:yellow" @endif>
                            {{ $dataOld->pendidikan_ayah }}</td>
                        <td @if ($dataOld->pendidikan_ayah !== $dataNew->pendidikan_ayah) style="background-color:yellow" @endif>
                            {{ $dataNew->pendidikan_ayah }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->pekerjaan_ayah !== $dataNew->pekerjaan_ayah) style="background-color:yellow" @endif>Pekerjaan</td>
                        <td @if ($dataOld->pekerjaan_ayah !== $dataNew->pekerjaan_ayah) style="background-color:yellow" @endif>
                            {{ $dataOld->pekerjaan_ayah }}</td>
                        <td @if ($dataOld->pekerjaan_ayah !== $dataNew->pekerjaan_ayah) style="background-color:yellow" @endif>
                            {{ $dataNew->pekerjaan_ayah }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->penghasilan_ayah !== $dataNew->penghasilan_ayah) style="background-color:yellow" @endif>Penghasilan Bulanan
                        </td>
                        <td @if ($dataOld->penghasilan_ayah !== $dataNew->penghasilan_ayah) style="background-color:yellow" @endif>
                            {{ $dataOld->penghasilan_ayah }}</td>
                        <td @if ($dataOld->penghasilan_ayah !== $dataNew->penghasilan_ayah) style="background-color:yellow" @endif>
                            {{ $dataNew->penghasilan_ayah }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->hp_ayah !== $dataNew->hp_ayah) style="background-color:yellow" @endif>No. Telp/HP</td>
                        <td @if ($dataOld->hp_ayah !== $dataNew->hp_ayah) style="background-color:yellow" @endif>
                            {{ $dataOld->hp_ayah }}</td>
                        <td @if ($dataOld->hp_ayah !== $dataNew->hp_ayah) style="background-color:yellow" @endif>
                            {{ $dataNew->hp_ayah }}</td>
                    </tr>
                    {{-- DATA_IBU --}}
                    <tr>
                        <td @if ($dataOld->nama_ibu !== $dataNew->nama_ibu) style="background-color:yellow" @endif>Nama ibu Kandung</td>
                        <td @if ($dataOld->nama_ibu !== $dataNew->nama_ibu) style="background-color:yellow" @endif>
                            {{ $dataOld->nama_ibu }}</td>
                        <td @if ($dataOld->nama_ibu !== $dataNew->nama_ibu) style="background-color:yellow" @endif>
                            {{ $dataNew->nama_ibu }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->nik_ibu !== $dataNew->nik_ibu) style="background-color:yellow" @endif>NIK ibu</td>
                        <td @if ($dataOld->nik_ibu !== $dataNew->nik_ibu) style="background-color:yellow" @endif>
                            {{ $dataOld->nik_ibu }}</td>
                        <td @if ($dataOld->nik_ibu !== $dataNew->nik_ibu) style="background-color:yellow" @endif>
                            {{ $dataNew->nik_ibu }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->tanggal_lahir_ibu !== $dataNew->tanggal_lahir_ibu) style="background-color:yellow" @endif>Tahun Lahir</td>
                        <td @if ($dataOld->tanggal_lahir_ibu !== $dataNew->tanggal_lahir_ibu) style="background-color:yellow" @endif>
                            {{ $dataOld->tanggal_lahir_ibu }}</td>
                        <td @if ($dataOld->tanggal_lahir_ibu !== $dataNew->tanggal_lahir_ibu) style="background-color:yellow" @endif>
                            {{ $dataNew->tanggal_lahir_ibu }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->pendidikan_ibu !== $dataNew->pendidikan_ibu) style="background-color:yellow" @endif>Pendidikan</td>
                        <td @if ($dataOld->pendidikan_ibu !== $dataNew->pendidikan_ibu) style="background-color:yellow" @endif>
                            {{ $dataOld->pendidikan_ibu }}</td>
                        <td @if ($dataOld->pendidikan_ibu !== $dataNew->pendidikan_ibu) style="background-color:yellow" @endif>
                            {{ $dataNew->pendidikan_ibu }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->pekerjaan_ibu !== $dataNew->pekerjaan_ibu) style="background-color:yellow" @endif>Pekerjaan</td>
                        <td @if ($dataOld->pekerjaan_ibu !== $dataNew->pekerjaan_ibu) style="background-color:yellow" @endif>
                            {{ $dataOld->pekerjaan_ibu }}</td>
                        <td @if ($dataOld->pekerjaan_ibu !== $dataNew->pekerjaan_ibu) style="background-color:yellow" @endif>
                            {{ $dataNew->pekerjaan_ibu }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->penghasilan_ibu !== $dataNew->penghasilan_ibu) style="background-color:yellow" @endif>Penghasilan Bulanan
                        </td>
                        <td @if ($dataOld->penghasilan_ibu !== $dataNew->penghasilan_ibu) style="background-color:yellow" @endif>
                            {{ $dataOld->penghasilan_ibu }}</td>
                        <td @if ($dataOld->penghasilan_ibu !== $dataNew->penghasilan_ibu) style="background-color:yellow" @endif>
                            {{ $dataNew->penghasilan_ibu }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->hp_ibu !== $dataNew->hp_ibu) style="background-color:yellow" @endif>No. Telp/HP</td>
                        <td @if ($dataOld->hp_ibu !== $dataNew->hp_ibu) style="background-color:yellow" @endif>
                            {{ $dataOld->hp_ibu }}</td>
                        <td @if ($dataOld->hp_ibu !== $dataNew->hp_ibu) style="background-color:yellow" @endif>
                            {{ $dataNew->hp_ibu }}</td>
                    </tr>
                    {{-- DATA_WALI --}}
                    <tr>
                        <td @if ($dataOld->nama_wali !== $dataNew->nama_wali) style="background-color:yellow" @endif>Nama wali</td>
                        <td @if ($dataOld->nama_wali !== $dataNew->nama_wali) style="background-color:yellow" @endif>
                            {{ $dataOld->nama_wali }}</td>
                        <td @if ($dataOld->nama_wali !== $dataNew->nama_wali) style="background-color:yellow" @endif>
                            {{ $dataNew->nama_wali }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->nik_wali !== $dataNew->nik_wali) style="background-color:yellow" @endif>NIK wali</td>
                        <td @if ($dataOld->nik_wali !== $dataNew->nik_wali) style="background-color:yellow" @endif>
                            {{ $dataOld->nik_wali }}</td>
                        <td @if ($dataOld->nik_wali !== $dataNew->nik_wali) style="background-color:yellow" @endif>
                            {{ $dataNew->nik_wali }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->tanggal_lahir_wali !== $dataNew->tanggal_lahir_wali) style="background-color:yellow" @endif>Tahun Lahir</td>
                        <td @if ($dataOld->tanggal_lahir_wali !== $dataNew->tanggal_lahir_wali) style="background-color:yellow" @endif>
                            {{ $dataOld->tanggal_lahir_wali }}</td>
                        <td @if ($dataOld->tanggal_lahir_wali !== $dataNew->tanggal_lahir_wali) style="background-color:yellow" @endif>
                            {{ $dataNew->tanggal_lahir_wali }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->pendidikan_wali !== $dataNew->pendidikan_wali) style="background-color:yellow" @endif>Pendidikan</td>
                        <td @if ($dataOld->pendidikan_wali !== $dataNew->pendidikan_wali) style="background-color:yellow" @endif>
                            {{ $dataOld->pendidikan_wali }}</td>
                        <td @if ($dataOld->pendidikan_wali !== $dataNew->pendidikan_wali) style="background-color:yellow" @endif>
                            {{ $dataNew->pendidikan_wali }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->pekerjaan_wali !== $dataNew->pekerjaan_wali) style="background-color:yellow" @endif>Pekerjaan</td>
                        <td @if ($dataOld->pekerjaan_wali !== $dataNew->pekerjaan_wali) style="background-color:yellow" @endif>
                            {{ $dataOld->pekerjaan_wali }}</td>
                        <td @if ($dataOld->pekerjaan_wali !== $dataNew->pekerjaan_wali) style="background-color:yellow" @endif>
                            {{ $dataNew->pekerjaan_wali }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->penghasilan_wali !== $dataNew->penghasilan_wali) style="background-color:yellow" @endif>Penghasilan Bulanan
                        </td>
                        <td @if ($dataOld->penghasilan_wali !== $dataNew->penghasilan_wali) style="background-color:yellow" @endif>
                            {{ $dataOld->penghasilan_wali }}</td>
                        <td @if ($dataOld->penghasilan_wali !== $dataNew->penghasilan_wali) style="background-color:yellow" @endif>
                            {{ $dataNew->penghasilan_wali }}</td>
                    </tr>
                    <tr>
                        <td @if ($dataOld->hp_wali !== $dataNew->hp_wali) style="background-color:yellow" @endif>No. Telp/HP</td>
                        <td @if ($dataOld->hp_wali !== $dataNew->hp_wali) style="background-color:yellow" @endif>
                            {{ $dataOld->hp_wali }}</td>
                        <td @if ($dataOld->hp_wali !== $dataNew->hp_wali) style="background-color:yellow" @endif>
                            {{ $dataNew->hp_wali }}</td>
                    </tr>
                </tbody>
            </table>
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
