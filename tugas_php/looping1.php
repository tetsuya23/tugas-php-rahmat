<?php
$baris = 10;
for ($i = 0; $i < $baris; $i++) {
    $angka = 0;
    for ($j = 0; $j < $i; $j++) {
        echo $angka;
        $angka++;
    }
    echo '<br>';
}
