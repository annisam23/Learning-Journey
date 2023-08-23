<?php
//Array Associative
//definisi sama seperti array numerik,kecuali
//key nya adalah string yg kita buat sendiri
$kucing = [
    [
    "nama" => "Anyong",
    "ciri" => "kiyowo",
    "warna" => "putih agak abu2",
    "jenis" => "Kampung",
    "gambar"=> "1.png"
    ],
    [
        "nama" => "gagak",
        "ciri" => "nyebelin",
        "warna" => "putih agak orange",
        "jenis" => "Kampung",
        "gambar"=> "2.png"
        ],
    [
        "nama" => "manyong",
        "ciri" => "kalem",
        "warna" => "putih palanya item",
        "jenis" => "Kampung",
        "gambar"=> "3.png"
        ],
    [
        "nama" => "Aoks",
        "ciri" => "tampan",
        "warna" => "putih agak abu2 bingitss",
        "jenis" => "Kampung",
        "gambar"=> "4.png"
        ],
    [
        "nama" => "Batman",
        "ciri" => "penakut",
        "warna" => "item ada putihnya dikit",
        "jenis" => "anggora",
        "gambar"=> "5.png"
    ],
    [
        "nama" => "gemeng",
        "ciri" => "terlove",
        "warna" => "belang-belang",
        "jenis" => "anggora",
        "gambar"=> "6.png"
        ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar Kucing</title>
</head>
<body>
    <h1>Daftar Kucing</h1>

<?php foreach($kucing as $cat) :?>
    <ul>
        <li>
            <img src="img/<?php echo $cat["gambar"];?>" alt="">
        </li>
        <li>Nama Kucing : <?php echo $cat["nama"];?></li>
        <li>Ciri  : <?php echo $cat["ciri"];?></li>
        <li>Warna:  <?php echo $cat["warna"]; ?></li>
        <li>Jenis : <?php echo $cat["jenis"]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>