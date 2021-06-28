@extends('layout.master')
@section('content')
    @php
    $jml_siswa = DB::table('students')->count();
    $jml_guru = DB::table('teachers')->count();
    $jml_pegawai = DB::table('teachers')
        ->where('role_id', 5)
        ->count();
    @endphp
    <div class="columns pt-2">
        <div class="column col-md-12">
            <div class="totalcard">
                <div class="jumlah p-2 bg-primary">
                    <h1>{{ $jml_siswa }}</h1>
                    <p>siswa</p>
                </div>
                <div class="ket p-2">
                    <h5 class="bg-primary p-2">Total Siswa</h5>
                    <p class="px-2">SDIT Harapan Umat</p>
                </div>
            </div>
        </div>

        <div class="column col-md-12">
            <div class="totalcard">
                <div class="jumlah p-2 bg-primary">
                    <h1>{{ $jml_guru }}</h1>
                    <p>guru</p>
                </div>
                <div class="ket p-2">
                    <h5 class="bg-primary p-2">Total Guru</h5>
                    <p class="px-2">SDIT Harapan Umat</p>
                </div>
            </div>
        </div>

        <div class="column col-md-12">
            <div class="totalcard">
                <div class="jumlah p-2 bg-primary">
                    <h1>{{ $jml_pegawai }}</h1>
                    <p>pegawai</p>
                </div>
                <div class="ket p-2">
                    <h5 class="bg-primary p-2">Total Pegawai</h5>
                    <p class="px-2">SDIT Harapan Umat</p>
                </div>
            </div>
        </div>
    </div>

    <h4 class="py-2">Pengumuman!</h4>

    <div class="card">
        <div class="card-header">
            <div class="card-title h5">Judul Pengumuman</div>
        </div>
        <div class="card-body">ini isi beritanya....</div>
    </div>
    <br />

@endsection
@section('js')

@stop
