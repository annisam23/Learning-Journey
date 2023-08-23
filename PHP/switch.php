<?php
//switch
// Berikan sebuah angka ke $num
$num = 90;
// Berikan sisa $num dibagi dengan 3
$remainder = $num % 3;

switch ($remainder) {
case 0:
    echo 'Sangat beruntung!!';
    break;
    
case 1:
    echo 'Beruntung!';
    break;
case 2:
    echo 'Sedikit beruntung.';
    break;
    
default:
    echo 'Tidak beruntung...';
    break;
}
?>