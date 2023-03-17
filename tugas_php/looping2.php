<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping 2</title>
</head>

<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr bgcolor="lightblue">
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php
        $no = 1;
        $a = 10;
        while ($no <= 10 and $a > 0) {
            echo "<tr>
                <td>$no</td>
                <td>Nama ke $no </td>
                <td>Kelas ke $a </td>
                </tr>";
            $no++;
            $a--;
        }
        ?>
    </table>
</body>

</html>