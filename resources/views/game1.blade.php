<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Data Game</center>
    @foreach($roll as $data)
    Kode Game : {{$data->kode_game}}<br>
    Nama game : {{$data->nama_game}}<br>
    Genre Game : {{$data->genre}}<br>
    Tanggal Rilis : {{$data->tgl_rilis}}<br>
    Developer : {{$data->developer}}<br>
    Operation : {{$data->operation}}<br>
    Batas Umur : {{$data->batas_umur}}<br>
     <hr>
    @endforeach
</body>
</html>
