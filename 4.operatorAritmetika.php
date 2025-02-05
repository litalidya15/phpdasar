<?php
echo "OPERATOR ARITMETIKA <BR>";
echo "<hr>";
$x = 10;
$y =  5;

$hasil = $x + $y;
$hasil2 = $x - $y;
$hasil3 = $x * $y;
$hasil4 = $x / $y;
$hasil5 = $x % $y;
$hasil6 = $x ** $y;


echo "Diketahui: <br>";
echo "Bilangan 1 = $x <br> ";
echo "Bilangan 2 = $y <br> <br>";


echo "Pertanyaan : <br>Hitunglah Hasil Penjumlahan, kurang, kali, bagi, sisa bagi, perpangkatan! <br> <br>";

echo "Jawaban: <br>";
echo "Hasil Penjumlahan  = $hasil <br> ";
echo "Hasil Pengurangan  = $hasil2 <br> ";
echo "Hasil Perkalian  = $hasil3 <br> ";
echo "Hasil Pembagian  = $hasil4 <br> ";
echo "Hasil sisa bagi = $hasil5 <br>";
echo "Hasil perpangkatan = $hasil6 <br><br><br>";

//Sisa Bagi 
echo "SISA BAGI / MODULO <br>";
echo "Bilangan 1 : $x <br>";
echo "Bilangan 2 : $y <br>";
$hasil = $x % $y;
echo " Hasil Sisa bagi = $hasil <br><br>";

//Pangkat 
echo " Bilangan Pangkat <br>";
echo "Bilangan 1 : $x <br>";
echo "Bilangan 2 : $y <br>";
$hasil = $x ** $y;
echo "Pangkat = $hasil";
