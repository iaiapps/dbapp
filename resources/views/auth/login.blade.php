<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Database</title>
    <link rel="stylesheet" href="{{ url('/dbapps') }}/assets/spectre/spectre.min.css" />
    <link rel="stylesheet" href="{{ url('/dbapps') }}/assets/lineawesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{ url('/dbapps') }}/css/app.css" />
</head>

<body>
    <div class="centerwrap">
        <div class="login">
            <div class="kiri">
                <h4 class="text-center">DATABASE APPLICATION</h4>
                <h5 class="text-center">SDIT Harapan Umat Jember</h5>
                <img class="p-centered" src="{{ url('/dbapps') }}/img/loginback.svg" />
            </div>

            <div class="kanan bg-primary">
                <h5 class="text-center"></h5>
                <h5 class="text-center">Silahkan Masuk</h5>

                <form method="POST" action="{{ route('login') }}">
                    @csrf





                    <div class="form-group my-2">
                        <label class="form-label mt-2" for="email">Email</label>
                        <div class="has-icon-left">
                            <input type="email" id="email" class="form-input" placeholder="email" name="email" />
                            <i class="las la-user form-icon text-primary"></i>
                        </div>
                    </div>

                    <div class="form-group my-2">
                        <label class="form-label my-t" for="password">Password</label>
                        <div class="has-icon-left">
                            <input type="password" id="password" class="form-input" placeholder="Password"
                                name="password" />
                            <i class="las la-lock form-icon text-primary"></i>
                        </div>
                    </div>

                    <br />
                    <button class="btn col-12 text-large" type="submit">Sign in</button>
                    <a href="{{ route('login.google', 'google') }}" class="btn col-12 text-large">With Google</a>
                </form>
            </div>
        </div>
    </div>
    {{-- <script src="{{ url('dbapps') }}/js/app.js"></script> --}}

    <script src="{{ url('dbapps') }}/js/tata.js"></script>
    @if (Session::has('success'))
        <script>
            tata.error("Maaf", "Data guru/karyawan telah ada")
        </script>
    @endif

</body>

</html>
