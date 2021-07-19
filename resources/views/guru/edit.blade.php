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


        </div>
    @endsection

    @section('css')
    @endsection
    @section('js')
    @stop
