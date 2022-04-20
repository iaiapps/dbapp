@extends('layout.master')
@section('page_judul', 'Dashboard')
@section('content')
    {{-- @php
    $jml_siswa = DB::table('students')->count();
    $jml_guru = DB::table('teachers')->count();
    $jml_pegawai = DB::table('teachers')
    ->where('role_id', 5)
    ->count();
    @endphp --}}
    <div class="card rounded p-3">
        <p class="fs-4 text-center m-0">Selamat Datang di <br> Aplikasi Database SDIT HARAPAN UMAT JEMBER</p>
    </div>
    <div id="info" class="row gx-3">
        <div class="col-12 col-sm-6">
            <div class="mt-3 card rounded p-3 flex-row justify-content-between align-items-center">
                <div class="flex-fill">
                    <button class="float-start btn btn-success rounded">
                        <i class="las la-user-check la-lg"></i>
                    </button>
                    <span class="ms-2 fs-5"> Total Siswa </span>
                </div>
                <span class="bg-success p-1 px-2 fs-5 rounded text-white">{{ $jml_siswa }}</span>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="mt-3 card rounded p-3 flex-row justify-content-between align-items-center">
                <div class="flex-fill">
                    <span class="float-start btn btn-success rounded">
                        <i class="las la-user-check la-lg"></i>
                    </span>
                    <span class="ms-2 fs-5"> Guru/Karyawan </span>
                </div>
                <span class="bg-success p-1 px-2 fs-5 rounded text-white">{{ $jml_guru }}</span>
            </div>
        </div>

    </div>
    <div class="card mt-3 rounded p-3">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Form</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><button class="btn btn-success btn-sm rounded">
                            <i class="las la-school la-lg"></i>
                        </button></th>
                    <td>Sekolah</td>
                    <td> {{ $sekolah->nama_sekolah }}</td>
                </tr>
                <tr>
                    <th><button class="btn btn-success btn-sm rounded">
                            <i class="las la-code la-lg"></i>
                        </button></th>
                    <td>NPSN</td>
                    <td> {{ $sekolah->npsn }}</td>
                </tr>
                <tr>
                    <th><button class="btn btn-success btn-sm rounded">
                            <i class="las la-map-marked la-lg"></i>
                        </button></th>
                    <td>Alamat</td>
                    <td> {{ $sekolah->alamat_sekolah }}
                        <br>{{ $sekolah->kelurahan }} {{ $sekolah->kecamatan }} {{ $sekolah->kota }}
                        {{ $sekolah->provinsi }}
                    </td>
                </tr>
                <tr>
                    <th><button class="btn btn-success btn-sm rounded">
                            <i class="las la-atlas la-lg"></i>
                        </button></th>
                    <td>Website</td>
                    <td> <a href="https://{{ $sekolah->website }}">{{ $sekolah->website }}</a> </td>
                </tr>
                <tr>
                    <th><button class="btn btn-success btn-sm rounded">
                            <i class="las la-envelope-open-text la-lg"></i>
                        </button></th>
                    <td>Email</td>
                    <td> {{ $sekolah->email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('js')

@stop
