<?php
 $mahasiswi = [
     ["AnnisaMaulida",0110221070, "Teknik Informatika","EMial"],
     ["rahma",0110221071,"Teknik Informatika","emaol"],
     ["cacy",0110221171,"Teknik Informatika","emaol"]
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

<?php foreach($mahasiswi as $mhs) :?>
    <ul>
        <li>Nama : <?php echo $mhs[0] ?></li>
        <li>Nim  : <?php echo $mhs[1] ?></li>
        <li>Jurusan :  <?php echo $mhs[2] ?></li>
        <li>Email : <?php echo $mhs[3] ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>