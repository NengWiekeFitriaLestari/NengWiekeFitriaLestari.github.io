<?php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "tour";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

// Periksa koneksi
if (!$conn) {
    echo "Connection Failed:", mysqli_connect_error();
    exit;
}

// Periksa hasil query sebelum menggunakannya
$qsl = "SELECT * FROM contact";
$result = mysqli_query($conn, $qsl);

if (!$result) {
    echo "error: ", mysqli_error($conn);
    exit;
}

echo "We will contact you soon";

// Tampilkan data hasil query
while ($row = mysqli_fetch_assoc($result)) {
    // var_dump($row);
}

// Tutup koneksi setelah digunakan
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>nama</td>
            <td>email</td>
            <td>pesan</td>
        </tr>

        <?php
        // Memulai ulang hasil query
        mysqli_data_seek($result, 0);

        // Iterasi melalui hasil query
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td> <?= $row["Name"] ?></td>
                <td> <?= $row["Email"] ?></td>
                <td> <?= $row["Message"] ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>