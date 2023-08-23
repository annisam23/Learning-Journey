<?php 
//array
//variabel yang dapat memiliki banyak nilai
//ELemen pada array boleh memiliki tipe data berbeda
//pasangan antara key dan value
//keynya adalah index,dan dimulai dari 0


//membuat array
//cara lama
$hari =array("Senin","selasa","rabu"); 
//cara baru
$bulan = ["Januari","Februari","Maret"];
//contoh beda
$arr = [123,"tulis",false];


//menampilkan array
//var_dump()/ print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan satu elemen pada array
// echo $arr[0];
// echo "<br>";
// echo $bulan[1];

//menambahkan element baru pada array
var_dump($hari);
$hari[]= "Kamis";
$hari[]= "Jum'at";
echo "<br>";
var_dump($hari);


?>