@extends('layout.master')
@section('content')

    <div class="columns pt-2">
        <div class="column col-md-12">
            <div class="totalcard">
                <div class="jumlah p-2 bg-primary">
                    <h1>500</h1>
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
                    <h1>70</h1>
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
                    <h1>20</h1>
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



    {{-- <br />
    <hr />
    <h4 class="py-2">Daftar Kelas</h4>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kelas</th>
                <th>Siswa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1 Abu Bakar As Siddiq</td>
                <td>24 siswa</td>
            </tr>
            <tr>
                <td>1 Umar bin Khattab</td>
                <td>24 siswa</td>
            </tr>
            <tr>
                <td>1 Utsman bin Affan</td>
                <td>24 siswa</td>
            </tr>
            <tr>
                <td>1 Ali bin Abi Thalib</td>
                <td>24 siswa</td>
            </tr>
        </tbody>
    </table> --}}
@endsection
