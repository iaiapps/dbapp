<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <title>Ekskul</title>
</head>

<body>
    <p class="display-6 bg-primary text-white text-center p-3">Pilih Ekskul</p>
    <div class="container ">

        <div class="btn-group d-flex py-3" role="group">
            <a href="pilih_ekskul" type="button" class="btn btn-outline-primary vw-100">Pilih Ekskul</a>
            <a href="data_ekskul" type="button" class="btn btn-outline-primary vw-100">Kuota Ekskul</a>
            <a href="cek_ekskul" type="button" class="btn btn-outline-primary vw-100">Cek Data Siswa</a>
        </div>
        <section id="form">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Pilih Kelas</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Pilih Nama Siswa</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Pilih Ekstrakurikuler </label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary col-12">Submit</button>
            </form>
        </section>
        <br>
        <p>NB: jika ekskul tidak bisa dipilih silahkan cek kuota ekskul, masing-masing ekskul berisi maksimal 20
            anak
        </p>
    </div>

</html>
