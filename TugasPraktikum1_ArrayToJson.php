<?php
// Membuat variabel array
$array_data = [
    "nama" => "Agung Dwi Susilo",
    "usia" => 35,
    "pekerjaan" => "IT Education",
    "hobi" => ["Membaca", "Kuliner", "Traveling"],
];

// Encode array ke format JSON
$jsonData = json_encode($array_data);
echo "Data dalam format JSON:" . $jsonData;