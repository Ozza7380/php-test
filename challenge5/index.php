<?php
//function cek ganjil genap
function cekGanjilGenap($angka) {
    if ($angka % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}
echo cekGanjilGenap(10); //output: Genap
?>
