    @extends('layout.master')

    @section('alert')

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

            <form action="{{ route('guru.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div id="1" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-left">Identitas PTK</h4>
                        <button type="submit" class="btn btn-primary float-right">Update</button>
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
                                <td>NIK</td>
                                <td><input class="form-input" type="text" name="nik" value="{{ $item->nik }}"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><input class="form-input" type="text" name="jk" value="{{ $item->jk }}"></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td><input class="form-input" type="text" name="tempat_lahir"
                                        value="{{ $item->tempat_lahir }}"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><input class="form-input" type="text" name="tanggal_lahir"
                                        value="{{ $item->tanggal_lahir }}"></td>
                            </tr>
                            <tr>
                                <td>Nama Ibu Kandung</td>
                                <td><input class="form-input" type="text" name="nama_ibu" value="{{ $item->nama_ibu }}">
                                </td>
                            </tr>
                            <tr>
                                <td>no telp/hp</td>
                                <td><input class="form-input" type="text" name="no_hp" value="{{ $item->no_hp }}"></td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td><input class="form-input" type="text" name="email" value="{{ $item->email }}"
                                        readonly></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="2" class="tabcontent">
                    <br />
                    <div class="clearfix">
                        <h4 class="float-left">Data Pribadi</h4>
                        <button type="submit" class="btn btn-primary float-right">Update</button>
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
                                <td><input class="form-input" type="text" name="alamat" value="{{ $item->alamat }}"></td>
                            </tr>
                            <tr>
                                <td>RT</td>
                                <td><input class="form-input" type="text" name="rt" value="{{ $item->rt }}"></td>
                            </tr>
                            <tr>
                                <td>RW</td>
                                <td><input class="form-input" type="text" name="rw" value="{{ $item->rw }}"></td>
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
                                <td><input class="form-input" type="text" name="kode_pos" value="{{ $item->kode_pos }}">
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
                                <td>Agama & Kepercayaan</td>
                                <td><input class="form-input" type="text" name="agama" value="{{ $item->agama }}"></td>
                            </tr>
                            <tr>
                                <td>NPWP</td>
                                <td><input class="form-input" type="text" name="npwp" value="{{ $item->npwp }}"></td>
                            </tr>
                            <tr>
                                <td>Nama Wajib Pajak</td>
                                <td><input class="form-input" type="text" name="nama_wajib_pajak"
                                        value="{{ $item->nama_wajib_pajak }}"></td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td><input class="form-input" type="text" name="kewarganegaraan"
                                        value="{{ $item->kewarganegaraan }}"></td>
                            </tr>
                            <tr>
                                <td>Status Kawin</td>
                                <td><input class="form-input" type="text" name="status_perkawinan"
                                        value="{{ $item->status_perkawinan }}"></td>
                            </tr>
                            <tr>
                                <td>Nama Suami/Istri</td>
                                <td><input class="form-input" type="text" name="nama_pasangan"
                                        value="{{ $item->nama_pasangan }}"></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Suami/Istri</td>
                                <td><input class="form-input" type="text" name="pekerjaan_pasangan"
                                        value="{{ $item->pekerjaan_pasangan }}"></td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td><input class="form-input" type="text" name="nip_pasangan"
                                        value="{{ $item->nip_pasangan }}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>

            <div id="3" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-left">Riwayat Pendidikan</h4>
                    <a class="btn btn-primary float-right" href="formGuruPendidikan.html">edit form</a>
                </div>

                <hr class="text-primary" />
                <table class="table table-striped tab-content" id="3">
                    <thead>
                        <tr>
                            <th>Bidang Studi</th>
                            <th>jenjang pendidikan</th>
                            <th>Gelar Akademi</th>
                            <th>nama Satuan pendidikan formal</th>
                            <th>Fakultas</th>
                            <th>Kependidikan</th>
                            <th>Tahun masuk</th>
                            <th>Tahun Lulus</th>
                            <th>NIM</th>
                            <th>Semester</th>
                            <th>IPK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>lainnya</td>
                            <td>SD/sederajat</td>
                            <td>-</td>
                            <td>SDN abcd</td>
                            <td>-</td>
                            <td>tidak</td>
                            <td>12345</td>
                            <td>12345</td>
                            <td>-</td>
                            <td>tidak</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="4" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-left">Anak</h4>
                    <a class="btn btn-primary float-right" href="formGuruAnak.html">edit form</a>
                </div>
                <hr class="text-primary" />
                <table class="table table-striped tab-content" id="4">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Jenjang Pendidikan</th>
                            <th>NISN</th>
                            <th>JK</th>
                            <th>tempat lahir</th>
                            <th>tanggal lahir</th>
                            <th>tahun masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>aaaabbbboooo</td>
                            <td>kandung</td>
                            <td>SD</td>
                            <td>123345</td>
                            <td>L</td>
                            <td>jember</td>
                            <td>13 maret 2021</td>
                            <td>12345</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="5" class="tabcontent">
                <br />
                <div class="clearfix">
                    <h4 class="float-left">Diklat</h4>
                    <a class="btn btn-primary float-right" href="formGuruDiklat.html">edit form</a>
                </div>
                <hr class="text-primary" />
                <table class="table table-striped tab-content" id="5">
                    <thead>
                        <tr>
                            <th>Jenis Diklat</th>
                            <th>Nama Diklat</th>
                            <th>Penyelenggara</th>
                            <th>Tahun</th>
                            <th>Peran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pelatihan</td>
                            <td>workshop</td>
                            <td>Kemdikbud</td>
                            <td>2021</td>
                            <td>peserta</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- <h3 class="pt-2">Data Guru</h3>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <a href="#" id="tomboledit" class="btn btn-primary"> Edit Form</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <br /> -->

            <!-- <div class="form-group">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <label class="form-switch">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <input type="checkbox" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <i class="form-icon"></i> edit form
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div> -->

            <!-- <div id="divedit" class="columns py-2 d-hide">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="column col-xs-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <a href="#" class="btn btn-primary col-12"> Edit Data </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="column col-xs-12 pt-sm-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <a href="#" class="btn btn-primary col-12"> Edit Datavvvv </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="column col-xs-12 pt-sm-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <a href="#" class="btn btn-primary col-12"> Edit Datadsvdsv </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="column col-xs-12 pt-sm-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <a href="#" class="btn btn-primary col-12"> Edit Data </a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <br /> -->
        </div>
    @endsection

    @section('css')
    @endsection
    @section('js')
    @stop
