@extends('layout.master')
@section('page_judul', 'Resum Data')
@section('content')
    @php
    $jml_siswa = DB::table('students')->count();
    $jml_guru = DB::table('teachers')->count();
    $jml_pegawai = DB::table('teachers')
        ->where('role_id', 5)
        ->count();
    @endphp
    <div id="info" class="row gx-4">
        <div class="col mt-3 mt-md-0">
            <div class="card rounded p-3">
                <div class="d-flex">
                    <div>
                        <span class="text-center me-2 fs-5 square rounded bg-success text-white">
                            <i class="bi bi-stack"></i>
                        </span>
                    </div>
                    <div>
                        <span>Nama</span>
                        <p class="ket">IAI IAI IAI</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div>
                        <span class="text-center me-2 fs-5 square rounded bg-success text-white">
                            <i class="bi bi-stack"></i>
                        </span>
                    </div>
                    <div>
                        <span>Guru </span>
                        <p class="ket">Kelas</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div>
                        <span class="text-center me-2 fs-5 square rounded bg-success text-white">
                            <i class="bi bi-stack"></i>
                        </span>
                    </div>
                    <div>
                        <span>Pelajaran</span>
                        <p class="ket">Tematik</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <span class="text-center me-2 fs-5 square rounded bg-success text-white">
                            <i class="bi bi-stack"></i>
                        </span>
                    </div>
                    <div>
                        <span>Tahun Masuk</span>
                        <p class="ket">Juli 2017</p>
                    </div>
                </div>
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
@endsection
@section('js')

@stop
