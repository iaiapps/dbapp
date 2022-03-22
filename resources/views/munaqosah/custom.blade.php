<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Certificate Generator</title>
</head>

<body>
    <center>
        <br><br><br>
        <h3>Custom Sertifikat</h3>
        <br>
        <form method="POST" action="{{ route('munaqosah.custom') }}">
            @csrf
            @method('POST')
            <div class="mb-3 col-sm-4">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
                <select name="juz" class="form-control">
                    <option selected disabled>Juz</option>
                    @for ($i = 1; $i <= 30; $i++)
                        <option> {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-3 col-sm-4">
                <input type="number" name="kelancaran" class="form-control" placeholder="kelancaran">
                <input type="number" name="fasohah_makhroj" class="form-control" placeholder="fasohah makhroj">
                <input type="number" name="tajwid" class="form-control" placeholder="tajwid">
                <input type="text" name="grade" class="form-control" placeholder="grade">
            </div>
            <div class="mb-3 col-sm-4">
                <input type="date" class="form-control" name="exam_date">
            </div>
            <button type="submit" class="btn btn-primary">Generate</button>
        </form>
        <br>
    </center>

    <footer>
        <center>
            <p>Built with &#10084;</p>
        </center>
    </footer>

</body>

</html>
