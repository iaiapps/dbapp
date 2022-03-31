@extends('auth.layouts.login_master')
@section('page_title', 'Login Guru')

@section('content')
    @include('auth.layouts.login_nav')
    <div class="d-flex justify-content-center">
        <div class="card col-md-6 col-12 rounded">
            <div class="title text-center">
                <img src="{{ asset('new_theme') }}/img/teacher.png"
                    class="border bg-white rounded-circle p-1 avatar mb-1 mt-3" alt="teacher" />
                <p class="text-white display-6">LOGIN GURU</p>
            </div>
            <div class="p-3">
                <a href="{{ route('login_guru_google') }}" class="btnG btn btn-outline-success img-fluid">
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
                        Login Guru
                    </button>
                </form>
            </div>
            <p class="small px-3">
                NB: Untuk pertama kali login gunakan "Login With Google"
            </p>
        </div>
    </div>
@endsection
