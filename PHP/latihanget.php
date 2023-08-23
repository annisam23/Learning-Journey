<?php
//cek apakah tida ada data di $_GET
if(!isset($_GET["nama"])|| 
!isset($_GET["nrp"])||
!isset($_GET["email"])||
!isset($_GET["jurusan"])||
!isset($_GET["gambar"])) {
    //redirect
    header("Location: get.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail mahasiswa</title>
</head>
<body>
<ul>
    <li><img src="img/merah.jpg" alt=""></li>
    <li><?php echo $_GET ["nama"];?></li>
    <li><?php echo $_GET ["nrp"];?></li>
    <li><?php echo $_GET ["email"];?></li>
    <li><?php echo $_GET ["jurusan"];?></li>
    <li><?php echo $_GET ["gambar"];?></li>
    </ul>

 <a href="get.php">Kembali ke halaman awal</a>
</body>
</html>