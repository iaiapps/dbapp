    @extends('layout.master')
    @section('content')
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

            </div>
            @php
                if (Auth::user()->role_id == 4) {
                    $button_update = 'Ajukan perubahan';
                } else {
                    $button_update = 'Update';
                }
            @endphp
            <form action="{{ route('student_update', $item->id) }}" method="post">
                @csrf
                @method('PUT')
                <!-- isi tab -->
                <div id="1" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-left">Identitas Peserta Didik</h4>
                        <button type="submit" class="btn btn-primary float-right">{{ $button_update }}</button>
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
                                <td>
                                    <input class="form-input" type="text" name="nama" value="{{ $item->nama }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><input class="form-input" type="text" name="jk" value="{{ $item->jk }}"></td>
                            </tr>

                            <tr>
                                <td>NIK</td>
                                <td><input class="form-input" type="number" name="nik" value="{{ $item->nik }}"></td>
                            </tr>
                            <tr>
                                <td>No. KK</td>
                                <td><input class="form-input" type="text" name="no_kk" value="{{ $item->no_kk }}"></td>
                            </tr>

                            <tr>
                                <td>Tempat Lahir</td>
                                <td><input class="form-input" type="text" name="tempat_lahir"
                                        value="{{ $item->tempat_lahir }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><input class="form-input" type="text" name="tanggal_lahir"
                                        value="{{ $item->tanggal_lahir }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Agama & Kepercayaan</td>
                                <td><input class="form-input" type="text" name="agama" value="{{ $item->agama }}"></td>
                            </tr>
                            {{-- <tr>
                            <td>Kewarganegaraan</td>
                            <td><input class="form-input" type="text" name="negara" value="{{ $item->negara }}"></td>
                        </tr> --}}
                            <tr>
                                <td>Berkebutuhan Khusus</td>
                                <td><input class="form-input" type="text" name="kebutuhan_khusus"
                                        value="{{ $item->kebutuhan_khusus }}"></td>
                            </tr>
                            <tr>
                                <td>Alamat Jalan</td>
                                <td><input class="form-input" type="text" name="alamat" value="{{ $item->alamat }}"></td>
                            </tr>
                            <tr>
                                <td>RT</td>
                                <td><input class="form-input" type="number" name="rt" value="{{ $item->rt }}"></td>
                            </tr>
                            <tr>
                                <td>RW</td>
                                <td><input class="form-input" type="number" name="rw" value="{{ $item->rw }}"></td>
                            </tr>
                            <tr>
                                <td>Dusun</td>
                                <td><input class="form-input" type="text" name="dusun" value="{{ $item->dusun }}"></td>
                            </tr>
                            <tr>
                                <td>Desa/Kelurahan</td>
                                <td><input class="form-input" type="text" name="kelurahan"
                                        value="{{ $item->kelurahan }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td><input class="form-input" type="text" name="kecamatan"
                                        value="{{ $item->kecamatan }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Kabupaten/Kota</td>
                                <td><input class="form-input" type="text" name="kota" value="{{ $item->kota }}"></td>
                            </tr>
                            <tr>
                                <td>Provinsi</td>
                                <td><input class="form-input" type="text" name="provinsi" value="{{ $item->provinsi }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Kode POS</td>
                                <td><input class="form-input" type="number" name="kode_pos"
                                        value="{{ $item->kode_pos }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Lintang</td>
                                <td><input class="form-input" type="text" name="lintang" value="{{ $item->lintang }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Bujur</td>
                                <td><input class="form-input" type="text" name="bujur" value="{{ $item->bujur }}"></td>
                            </tr>

                            <tr>
                                <td>Tempat Tinggal</td>
                                <td><input class="form-input" type="text" name="jenis_tinggal"
                                        value="{{ $item->jenis_tinggal }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Moda Transportasi</td>
                                <td><input class="form-input" type="text" name="alat_transportasi"
                                        value="{{ $item->alat_transportasi }}"></td>
                            </tr>

                            <tr>
                                <td>Anak Ke Berapa</td>
                                <td><input class="form-input" type="text" name="anak_ke" value="{{ $item->anak_ke }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah saudara</td>
                                <td><input class="form-input" type="text" name="jumlah_saudara_kandung"
                                        value="{{ $item->jumlah_saudara_kandung }}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="2" class="tabcontent">
                    <br />

                    <div class="clearfix">
                        <h4 class="float-left">Data Ayah Kandung</h4>
                        <button type="submit" class="btn btn-primary float-right">{{ $button_update }}</button>
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
                                <td><input class="form-input" type="text" name="nama_ayah"
                                        value="{{ $item->nama_ayah }}">
                                </td>
                            </tr>
                            <tr>
                                <td>NIK ayah</td>
                                <td><input class="form-input" type="text" name="nik_ayah" value="{{ $item->nik_ayah }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td><input class="form-input" type="text" name="tanggal_lahir_ayah"
                                        value="{{ $item->tanggal_lahir_ayah }}"></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td><input class="form-input" type="text" name="pendidikan_ayah"
                                        value="{{ $item->pendidikan_ayah }}"></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td><input class="form-input" type="text" name="pekerjaan_ayah"
                                        value="{{ $item->pekerjaan_ayah }}"></td>
                            </tr>
                            <tr>
                                <td>Penghasilan Bulanan</td>
                                <td><input class="form-input" type="text" name="penghasilan_ayah"
                                        value="{{ $item->penghasilan_ayah }}"></td>
                            </tr>
                            <tr>
                                <td>No. Telp/HP</td>
                                <td><input class="form-input" type="text" name="hp_ayah" value="{{ $item->hp_ayah }}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="3" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-left">Data Ibu Kandung</h4>
                        <button type="submit" class="btn btn-primary float-right">{{ $button_update }}</button>
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
                                <td><input class="form-input" type="text" name="nama_ibu" value="{{ $item->nama_ibu }}">
                                </td>
                            </tr>
                            <tr>
                                <td>NIK ibu</td>
                                <td><input class="form-input" type="text" name="nik_ibu" value="{{ $item->nik_ibu }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td><input class="form-input" type="text" name="tanggal_lahir_ibu"
                                        value="{{ $item->tanggal_lahir_ibu }}"></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td><input class="form-input" type="text" name="pendidikan_ibu"
                                        value="{{ $item->pendidikan_ibu }}"></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td><input class="form-input" type="text" name="pekerjaan_ibu"
                                        value="{{ $item->pekerjaan_ibu }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Penghasilan Bulanan</td>
                                <td><input class="form-input" type="text" name="penghasilan_ibu"
                                        value="{{ $item->penghasilan_ibu }}"></td>
                            </tr>
                            <tr>
                                <td>No. Telp/HP</td>
                                <td><input class="form-input" type="text" name="hp_ibu" value="{{ $item->hp_ibu }}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="4" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-left">Data Wali</h4>
                        <button type="submit" class="btn btn-primary float-right">{{ $button_update }}</button>
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
                                <td><input class="form-input" type="text" name="nama_wali"
                                        value="{{ $item->nama_wali }}">
                                </td>
                            </tr>
                            <tr>
                                <td>NIK wali</td>
                                <td><input class="form-input" type="text" name="nik_wali" value="{{ $item->nik_wali }}">
                                </td>
                            </tr>
                            <tr>
                                <td>Tahun Lahir</td>
                                <td><input class="form-input" type="text" name="tanggal_lahir_wali"
                                        value="{{ $item->tanggal_lahir_wali }}"></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td><input class="form-input" type="text" name="pendidikan_wali"
                                        value="{{ $item->pendidikan_wali }}"></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td><input class="form-input" type="text" name="pekerjaan_wali"
                                        value="{{ $item->pekerjaan_wali }}"></td>
                            </tr>
                            <tr>
                                <td>Penghasilan Bulanan</td>
                                <td><input class="form-input" type="text" name="penghasilan_wali"
                                        value="{{ $item->penghasilan_wali }}"></td>
                            </tr>
                            <tr>
                                <td>No. Telp/HP</td>
                                <td><input class="form-input" type="text" name="hp_wali" value="{{ $item->hp_wali }}">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </form>

        </div>
    @endsection

    @section('css')
    @endsection
    @section('js')
    @stop
