<?php

function curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
$send = curl("http://localhost:8080/RekayasaWeb/Latihan2/getWisata.php");

$data = json_decode($send, TRUE);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekayasa Web</title>
</head>
<body>
    <table border="1">
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
        <?php
        foreach ($data as $row) {
        ?>
        <tr>
        <td><?php echo $row["kota"] ?></td>
        <td><?php echo $row["landmark"] ?></td>
        <td><?php echo $row["tarif"]?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>