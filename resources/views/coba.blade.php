<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba</title>
</head>

<body>
    @foreach ($getCount as $item)
        {{ $item->extra->name }}
    @endforeach
</body>

</html>
