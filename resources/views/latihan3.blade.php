<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Nama : {{$tabungan->nama}}<br>
    Nis : {{$tabungan->nis}}<br>
    Kelas : {{$tabungan->kelas}}<br>
    Jumlah : {{$tabungan->jml}}<br>
    @if($tabungan->jml > 25000)
    Paket Tabunan : A
    @elseif($tabungan->jml > 10000)
    Paket Tabungan : B
    @else
    Paket Tabungan : C
    @endif
</body>
</html>
