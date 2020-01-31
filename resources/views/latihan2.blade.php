<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Tabungan</center>

    @foreach($tabungan as $data)

    <?php
    $jum = "";
    if($data['jml']>=1000 && $data['jml'] <=10000){
        $jum = 'Paket A';
    }else if($data['jml']>=10000 && $data['jml']<= 25000){
        $jum = 'Paket B';
    }else if($data['jml']>=25000 && $data['jml']<= 50000){
        $jum = 'Paket C';
    }
    ?>
    Nama : {{$data->nama}}<br>
    Nis : {{$data->nis}}<br>
    Kelas : {{$data->kelas}}<br>
    Jumlah : {{$data->jml}}<br>
    Paket : <?php echo $jum?>
    <hr>
    @endforeach
</body>
</html>
