<?php

$host   = "localhost";
$db     = "perpus";
$user   = "root";
$pass   = "";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die('Connection failed:' . mysqli_connect_error());
}

$query = "SELECT buku.isbn, buku.judul, buku.tahun, penerbit.nama_penerbit FROM buku JOIN penerbit  ON penerbit.id_penerbit = buku.id_penerbit";
$result = $con->query($query);

$sql = "SELECT peminjaman.tgl_pinjam, peminjaman.tgl_kembali, anggota.nama, anggota.sex, anggota.telp, anggota.alamat FROM peminjaman JOIN anggota On anggota.id_anggota = peminjaman.id_anggota";
$hasil = $con->query($sql);

if ($result->num_rows > 0) {
    while ($data = $result->fetch_assoc()) {
        $rows[] = $data;
    }
} else {
    echo "0 result";
}

// if ($hasil->num_rows > 0) {
//     while ($data2 = $hasil->fetch_assoc()) {
//         $row[] = $data2;
//     }
// } else {
//     echo "0 result";
// }


$con->close();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>

<body>
    <section>
        <table border="1" cellpadding="3" cellspacing="0">
            <tr>
                <th>No</th>
                <th>ISBN</th>
                <th>Judul</th>
                <th>Nama Penerbit</th>
                <th>Tahun</th>
            </tr>
            <?php $no = 1;
            foreach ($rows as $row) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['isbn']; ?></td>
                    <td><?= $row['judul']; ?></td>
                    <td><?= $row['nama_penerbit']; ?></td>
                    <td><?= $row['tahun']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <section>
        <table border="1" cellpadding="3" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
            <?php if ($hasil->num_rows > 0) {
                $no = 1;
                while ($rows = $hasil->fetch_assoc()) {
                    echo " <tr>
                            <td>" . $no++ . "</td>
                            <td>" . $rows['nama'] . "</td>
                            <td>" . $rows['sex'] . "</td>
                            <td>" . $rows['alamat'] . "</td>
                            <td>" . $rows['telp'] . "</td>
                            <td>" . date('d-m-Y', strtotime($rows['tgl_pinjam'])) . "</td>
                            <td>" . date('d-m-Y', strtotime($rows['tgl_kembali'])) . "</td>
                        </tr>";
                }
            }
            ?>

        </table>
    </section>

</body>

</html>