<?php
$json_data = file_get_contents('data.json');
$data = json_decode($json_data, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php $no = 1;
        foreach ($data as $row) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= date('d-m-Y', strtotime($row['tanggal_lahir'])); ?></td>
                <td><?= $umur = date_diff(date_create($row['tanggal_lahir']), date_create('today'))->y; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['kelas']; ?></td>
                <td><?= $row['nilai']; ?></td>
                <td>
                    <?php
                    if ($row['nilai'] >= 90 && $row['nilai'] <= 100) {
                        echo "A";
                    } elseif ($row['nilai'] >= 80 && $row['nilai'] <= 89) {
                        echo "B";
                    } elseif ($row['nilai'] >= 70 && $row['nilai'] <= 79) {
                        echo "C";
                    } elseif ($row['nilai'] >= 40 && $row['nilai'] <= 69) {
                        echo "D";
                    } else {
                        echo "E";
                    }
                    ?>
                </td>
            </tr>
        <?php $no++;
        endforeach; ?>

    </table>
</body>

</html>