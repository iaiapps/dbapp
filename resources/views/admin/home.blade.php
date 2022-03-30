@extends('layout.master')
@section('page_judul', 'Dashboard')
@section('content')
    @php
    $jml_siswa = DB::table('students')->count();
    $jml_guru = DB::table('teachers')->count();
    $jml_pegawai = DB::table('teachers')
        ->where('role_id', 5)
        ->count();
    @endphp

    <div id="info" class="row gx-3">
        <div class="col">
            <div class="card rounded p-3 flex-row justify-content-between align-items-center">
                <div class="flex-fill">
                    <span class="float-start square text-white bg-success rounded fs-5">
                        <i class="bi bi-people-fill"></i>
                    </span>
                    <span class="ms-2 fs-5"> Total Siswa </span>
                </div>
                <span class="bg-success p-1 fs-5 rounded text-white">{{ $jml_siswa }}</span>
            </div>
            <div class="mt-3 card rounded p-3 flex-row justify-content-between align-items-center">
                <div class="flex-fill">
                    <span class="float-start square text-white bg-success rounded fs-5">
                        <i class="bi bi-people-fill"></i>
                    </span>
                    <span class="ms-2 fs-5"> Guru/Karyawan </span>
                </div>
                <span class="bg-success p-1 fs-5 rounded text-white">{{ $jml_guru }}</span>
            </div>
        </div>
        <div class="col mt-3 mt-md-0">
            <div class="card rounded p-3">
                <div class="d-flex">
                    <div>
                        <span class="text-center me-2 fs-5 square rounded bg-success text-white">
                            <i class="bi bi-stack"></i>
                        </span>
                    </div>
                    <div>
                        <span>Sekolah</span>
                        <p class="ket">SDIT Harapan Umat Jember</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div>
                        <span class="text-center me-2 fs-5 square rounded bg-success text-white">
                            <i class="bi bi-stack"></i>
                        </span>
                    </div>
                    <div>
                        <span>NPSN</span>
                        <p class="ket">20554128</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div>
                        <span class="text-center me-2 fs-5 square rounded bg-success text-white">
                            <i class="bi bi-stack"></i>
                        </span>
                    </div>
                    <div>
                        <span>Alamat</span>
                        <p class="ket">Jl. Danau Toba gg. Islamic Center Jember</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page_info" class="card rounded mt-3 p-3">
        <p class="fs-5">Resume perkelas</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Siswa</th>
                    <th scope="col">Nama Guru</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>1 Abu</td>
                    <td>24</td>
                    <td>Bu Aisyah</td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>1 Umar</td>
                    <td>23</td>
                    <td>Bu Endah</td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection
@section('js')

@stop
