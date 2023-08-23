<?php
//Array Associative
//definisi sama seperti array numerik,kecuali
//key nya adalah string yg kita buat sendiri
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar-mahasiswa/Latihan Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li>
            <img src="img/<?php echo $mhs["gambar"];?>" alt="">
        </li>
        <li>Nama : <?php echo $mhs["nama"];?></li>
        <li>Nim  : <?php echo $mhs["nrp"];?></li>
        <li>Email :  <?php echo $mhs["email"]; ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>