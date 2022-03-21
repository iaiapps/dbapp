@extends('auth.layouts.login_master')
@section('page_title', 'Login Siswa')

@section('content')
    @include('auth.layouts.login_nav')
    <div class="d-flex justify-content-center">
        <div class="card col-md-6 col-12 rounded">
            <div class="title text-center">
                <img src="{{ asset('new_theme') }}/img/student.png"
                    class="border bg-white rounded-circle p-1 avatar mb-1 mt-3" alt="teacher" />
                <p class="text-white display-6">LOGIN SISWA</p>
            </div>
            <div class="p-3">
                <a href="#" class="btnG btn btn-outline-success img-fluid">
                    <img src="{{ asset('new_theme') }}/img/google.svg" alt="google" /> Login with "Google"
                </a>
                <div class="line"><span> atau </span></div>
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword"
                            placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-success w-100" type="submit">
                        Login Siswa
                    </button>
                </form>
            </div>
            <p class="small px-3">
                NB: Pertama kali "Login" gunakan "Login With Google", <br />
                setelah itu klaim "NIS" yang didapat dari walas masing-masing
            </p>
        </div>
    </div>
@endsection
