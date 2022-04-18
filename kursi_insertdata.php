<?php
    /**
     * 1. buka koneksi ke DBMS MySQL dan buka database mahasiswa
     * 2.buat query insert data ke tabel mhs
     * 3.execute query insert data
     * 4.tutup koneksi
     */

     include_once("Koneksii.php");
     $kode ="101";
     $nama = "Pak Dudung";
     $jenis = "Besi";
     $alamat = "DENPASAR";
     $harga = "50000";

     $sql = "INSERT INTO tabel(KODE, NAMA, JENIS, ALAMAT, HARGA) Values('$kode','$nama','$jenis','$alamat','$harga')";
     $hsl = mysqli_query($cnn, $sql);
     if($hsl){
         echo "Insert Data ke tabel sukses<br>";
     }else{
        echo "Insert data gagal<br>";
     }