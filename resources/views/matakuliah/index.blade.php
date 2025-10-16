<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Matakuliah
    <br>
    <table>
        <thead></thead>
        <body></body>
    @foreach($banyak_matakuliah as $matakuliah)
        {{ $matakuliah['kode_mk'] }} <br>
    @endforeach
    </table>
</body>
</html>
