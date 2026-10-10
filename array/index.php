<?php
//array di php
$buah = ["apel", "jeruk", "mangga"];
echo $buah[0]; //output: apel
echo "<br>";

//array asosiatif
$siswa = [
    "nama" => "Budi",
    "umur" => 17,
    "kelas" => "XI IPA 1"
];
echo $siswa["nama"]; //output: Budi
echo "<br>";

//array multidimensi
$kelas = [
    ["nama" => "Budi", "nilai" => 90],
    ["nama" => "Andi", "nilai" => 80],
    ["nama" => "Siti", "nilai" => 85]
];
echo $kelas[0]["nama"]; //output: Budi
?>