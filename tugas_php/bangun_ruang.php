<?php
//kubus
$sisi = 5;
$volume_kubus = $sisi ** 3;
//balok
$panjang = 25;
$lebar = 10;
$tinggi = 7;
$volume_balok = $panjang * $lebar * $tinggi;
//tabung
$jari_jari = 3;
$tinggi_tabung = 9;
$phi = 3.14;
$volume_tabung = $phi * $jari_jari ** 2 * $tinggi_tabung;

//volume kubus
echo "volume kubus = $volume_kubus cm3 <br>";
echo "volume balok = $volume_balok cm3 <br>";
echo "volume tabung = $volume_tabung cm3";
