<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ url('/dbapps') }}/css/login.css" />
    <title>Login</title>

</head>

<body>
    <div class="judul">
        <h2>DATABASE APPLICATION</h2>
        <h3>SDIT Harapan Umat Jember</h3>
    </div>
    <div class="container">
        <div class="petunjuk">
            <h2>Petunjuk Login</h2>
            <a id="tblpetunjuk"> Klik untuk buka petunjuk</a>
            <div id="isi" class="isi">
                <div class="one">
                    <h3>Untuk Guru</h3>

                    <p>Untuk Pertama kali gunakan "Login with Google"</p>
                    <p>Kemudian lengkapi form data yang diminta</p>
                    <p>
                        Login berikutnya bisa memilih login dengan email atau "login with
                        google"
                    </p>
                </div>
                <div class="two">
                    <h3>Untuk Siswa</h3>
                    <p>Untuk pertama kali gunakan "Login with Google"</p>
                    <p>klaim NIS (didapat dari wali kelas)</p>
                    <p>Lengkapi kelengkapan form data yang diminta</p>
                    <p>
                        Login berikutnya bisa memilih login dengan email atau "login with
                        google"
                    </p>
                </div>
            </div>
        </div>
        <div class="login">
            <div class="tablogin">
                <a id="clickguru">GURU</a>
                <a id="clicksiswa">SISWA</a>
            </div>

            <div class="formlogin">
                @include('auth.form_login_guru')
                @include('auth.form_login_siswa')
            </div>

        </div>
    </div>
</body>

<script>
    const clickguru = document.querySelector("#clickguru");
    const clicksiswa = document.querySelector("#clicksiswa");

    const formloginguru = document.querySelector("#formloginguru");
    const formloginsiswa = document.querySelector("#formloginsiswa");

    const tblpetunjuk = document.querySelector("#tblpetunjuk");
    const isi = document.querySelector("#isi");

    window.addEventListener("DOMContentLoaded", () => {
        formloginsiswa.style.display = "none";
        clickguru.classList.add("active");
    });

    clickguru.addEventListener("click", () => {
        formloginguru.style.display = "block";
        formloginsiswa.style.display = "none";
        clickguru.classList.add("active");
        clicksiswa.classList.remove("active");
    });
    clicksiswa.addEventListener("click", () => {
        formloginsiswa.style.display = "block";
        formloginguru.style.display = "none";
        clicksiswa.classList.add("active");
        clickguru.classList.remove("active");
    });

    tblpetunjuk.addEventListener("click", () => {
        isi.classList.toggle("isi");
    });
</script>
{{-- <script src="{{ url('dbapps') }}/js/app.js"></script> --}}

<script src="{{ url('dbapps') }}/js/tata.js"></script>
@if (Session::has('error'))
    <script>
        tata.warn('Maaf', "{!! Session::get('error') !!}", {
            animate: 'slide',
            closeBtn: true,
            duration: 10000,
            position: 'bm'
        })
    </script>
@endif

</html>
