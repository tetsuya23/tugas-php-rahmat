<?php
$nama = 'Rahmat Purwanto';
$berat_badan = 60; // masukkan berat badan dalam kilogram
$tinggi_badan = 1.68; // masukkan tinggi badan dalam meter

// menghitung BMI
$bmi = $berat_badan / ($tinggi_badan * $tinggi_badan);

// menentukan kategori BMI
if ($bmi < 18.5) {
    $kategori = "Kurus";
} else if ($bmi >= 18.5 && $bmi < 25) {
    $kategori = "Normal";
} else if ($bmi >= 25 && $bmi < 30) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
}

// menampilkan hasil BMI dan kategorinya
echo "Halo, $nama nilai BMI anda adalah " . $bmi . " anda termasuk " . $kategori . " ";
