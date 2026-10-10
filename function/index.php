<?php
//function sederhana
function sapa($nama) {
    return "Halo, $nama!";
}
echo sapa("Budi"); //output: Halo, Budi!
echo "<br>";

//function dengan default value
function hitung($a, $b = 10) {
    return $a + $b;
}
echo hitung(5); //output: 15
echo "<br>";
echo hitung(5, 20); //output: 25 
echo "<br>";

//type declaration (PHP 7+)
function tambah(int $a, int $b): int {
    return $a + $b;
}
echo tambah(5, 10); //output: 15
?>