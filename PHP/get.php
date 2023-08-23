<?php
//$_GET
$mahasiswa = [
    [
    "nama" => "Annisa Maulida",
    "nrp" => "0110221070",
    "email" => "Teknik Informatika@gmail.com",
    "jurusan"=> "Teknik Informatika",
    "gambar"=> "merah.jpg"
    ],
    [
        "nama" => "Nisa rahma",
        "nrp" => "0110221070",
        "email" => "TeknikIndust@gmail.com",
        "jurusan"=> "Teknik Industri",
        "gambar"=> "biru.jpg"
    ]
];
var_dump($_GET)
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) :?>
        <li>Nama mahasiswa: <a href="latihanget.php?nama=<?php  echo $mhs["nama"]; ?>
        &nrp=<?php  echo $mhs["nrp"];?> 
        & email=<?php  echo $mhs["email"]; ?>
        &jurusan=<?php  echo $mhs["jurusan"]; ?>
        &gambar=<?php  echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"];?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>