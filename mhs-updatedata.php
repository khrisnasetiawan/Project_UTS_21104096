<?php

include_once("Koneksii.php");
$nama ="";
$kode = "";
$jenis ="";
$alamat ="";
$harga ="";

$sql = "UPDATE tabel SET NAMA='Pak Didong' WHERE KODE='104';";

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo "Pengubahan data suskes<br>";
}else{
    echo "Pengubahan Gagal<br>";
}
mysqli_close($cnn);