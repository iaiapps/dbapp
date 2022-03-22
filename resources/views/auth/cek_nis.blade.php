@extends('auth.layouts.login_master')
@section('page_title', 'Klaim NISN')
@section('content')
    <div class="d-flex justify-content-center mt-5 pt-5">
        <div class="card col-md-6 col-12 rounded">
            <div class="title text-center">
                <img src="{{ asset('new_theme') }}/img/book.png"
                    class="border bg-white rounded-circle p-1 avatar mb-1 mt-3" alt="NIS" />
                <p class="text-white display-6">KLAIM NISN</p>
            </div>
            <div class="p-3">
                <form class="form" method="POST" action="{{ route('input_klaim_nis') }}">
                    @csrf
                    @method('POST')
                    <div class="mb-3 text-center">
                        <input type="text" class="form-control form-control-lg text-center" id="floatingInput"
                            placeholder="masukkan NISN siswa" name="nisn" />
                    </div>
                    <button class="btn btn-success btn-lg w-100" type="submit">
                        KLAIM NISN
                    </button>
                </form>
            </div>
            <p class="small px-3">
                NB: NISN didapat dari masing-masing Wali Kelas
            </p>
        </div>
    </div>
@endsection
