<?php

include_once("koneksii.php");
$sql = "DELETE FROM tabel WHERE kode ='';";

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo "Proses hapus berhasil<br>";
}else{
    echo "Proses hapus gagal<br>";
}