<?php
//persegi
$a = 4;
$b = 4;
//persegi panjang
$panjang = 5;
$lebar = 9;
//segitiga
$alas = 16;
$tinggi = 45;
//trapesium
$sisi_atas = 7;
$sisi_bawah = 3;
$tinggi2 = 9;
//lingkaran
$jari_jari = 6;


//luas persegi
$persegi = $a * $b;
//luas persegi panjang
$persegi_panjang = $panjang * $lebar;
//luas segitiga
$segitiga = 0.5 * $alas * $tinggi;
//luas trapesium
$trapesium = 0.5 * ($sisi_atas + $sisi_bawah) * $tinggi2;
//luas lingkaran
$lingkaran = 2 * 3.14 * $jari_jari;

echo "Luas persegi = $persegi cm2<br>";
echo "Luas persegi panjang = $persegi_panjang cm2<br>";
echo "Luas segitiga = $segitiga cm2<br>";
echo "Luas trapesium = $trapesium cm2<br>";
echo "Luas lingkaran = $lingkaran cm2";
