<?php

function persegi($sisi1, $sisi2)
{
    $hasil = $sisi1 * $sisi2;
    echo "Luas persegi adalah = $hasil cm2<br>";
}

function persegi_panjang($panjang, $lebar)
{
    $hasil = $panjang * $lebar;
    echo "Luas persegi panjang adalah = $hasil cm2<br>";
}

function segitiga($alas, $tinggi)
{
    $hasil = $alas * $tinggi;
    echo "Luas segitiga adalah = $hasil cm2<br>";
}

function trapesium($sisi_atas, $sisi_bawah, $tinggi)
{
    $hasil = 0.5 * ($sisi_atas * $sisi_bawah * $tinggi);
    echo "Luas trapesium adalah = $hasil cm2<br>";
}

function lingkaran($jari_jari)
{
    $hasil = 2 * 3.14 * $jari_jari;
    echo "Luas lingkaran adalah = $hasil cm2<br><br>";
}

function kubus($sisi)
{
    $hasil = $sisi ** 3;
    echo "Volume kubus adalah = $hasil cm³<br>";
}

function balok($panjang, $lebar, $tinggi)
{
    $hasil = $panjang * $lebar * $tinggi;
    echo "Volume balok adalah = $hasil cm³<br>";
}

function tabung($jari_jari, $tinggi)
{
    $hasil = 3.14 * $jari_jari ** 2 * $tinggi;
    echo "Volume tabung adalah = $hasil cm³<br>";
}

function kerucut($jari_jari, $tinggi)
{
    $hasil = (1 / 3) * 3.14 * $jari_jari ** 2 * $tinggi;
    echo "Volume kerucut adalah = $hasil cm³<br>";
}

function bola($jari_jari)
{
    $hasil = (4 / 3) * 3.14 * $jari_jari ** 3;
    echo "Volume bola adalah = $hasil cm³<br>";
}


persegi(5, 5);
persegi_panjang(7, 18);
segitiga(4, 9);
trapesium(4, 8, 12);
lingkaran(6);


kubus(8);
balok(4, 8, 2);
tabung(6, 14);
kerucut(2, 7);
bola(5);
