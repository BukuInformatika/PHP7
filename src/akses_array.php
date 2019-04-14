<?php
//membuat kategori array berindeks
$matakuliah[0] = "pemograman web";
$matakuliah[1] = "database";
$matakuliah[2] = "keamanan jaringan";
$matakuliah[3] = "sistem informasi";
$matakuliah[4] = "rekayasa perangkat lunak";
//membuat kategori array asosiatif
$detailmk = array("kode" => "TKB5218", "nama" => "pemograman web 2", "sks"
=> 2);
//mengakses array berindeks
echo "DAFTAR MATAKULIAH" . '<br>';
echo $matakuliah[0] . '<br>';
echo $matakuliah[1] . '<br>';
echo $matakuliah[2] . '<br>';
echo $matakuliah[3] . '<br>';
echo $matakuliah[4] . '<br>';
//mengakses array asosiatif
echo '<br>' . "DETAIL MATAKULIAH" . '<br>';
echo "KODE : " . $detailmk["kode"] . '<br>';
echo "NAMA : " . $detailmk["nama"] . '<br>';
echo "JUMLAH SKS : " . $detailmk["sks"] . '<br>';
?>