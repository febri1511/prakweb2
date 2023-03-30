<?php 
// konstanta adalah pengeidentifikasi atau nama sederhana yang dapat di berikan nilai tetap apapun.
define ('PHI', 3.14);


// soal 1. cari nilai dari luas lingkaran dengan jari-jari 8
// soal 2. cari nilai dari keliling lingkaran dengan jari-jari 8

// definisikan jari-jari
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo "Luas lingkaran dengan jari-jari 8 adalah  $luas";
echo "<br/>Keliling lingkarannya $keliling";
?>
