<?php
// Membuat variabel JSON
$jsonData = '{"nama":"Agung Dwi Susilo","usia":35,"pekerjaan":"IT Education","hobi":["Membaca", "Kuliner", "Traveling"]}';

// Decode JSON ke Objek
$jsonObject = json_decode($jsonData);

// Mengakses Objek JSON
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Key</th><th>Value</th></tr>";
echo "<tr><td>Nama</td><td>" . $jsonObject->nama . "</td></tr>";
echo "<tr><td>Usia</td><td>" . $jsonObject->usia . "</td></tr>";
echo "<tr><td>Pekerjaan</td><td>" . $jsonObject->pekerjaan . "</td></tr>";

// Mengakses Array untuk Hobi
echo "<tr><td>Hobi</td><td>";
echo "<ul>";
foreach ($jsonObject->hobi as $hobi) {
    echo "<li>" . $hobi . "</li>";
}
echo "</ul>";
echo "</td></tr>";

echo "</table>";
?>
