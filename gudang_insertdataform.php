<?php
    /**
     * 1. buka koneksi ke DBMS MySQL dan buka database mahasiswa
     * 2.buat query insert data ke tabel mhs
     * 3.execute query insert data
     * 4.tutup koneksi
     */

     if(isset($_POST['txKODE'])){
     include_once("Koneksii.php");
     $kode =$_POST['txKODE'];
     $nama = $_POST['txNAMA'];
     $jenis = $_POST['txJENIS'];
     $alamat = $_POST["txALAMAT"];
     $harga = $_POST["txHARGA"];

     $sql = "INSERT INTO tabel(KODE, NAMA, JENIS, ALAMAT, HARGA) Values('$kode','$nama','$jenis','$alamat','$harga');";
     $hsl = mysqli_query($cnn, $sql);
     if($hsl){
         echo "Insert Data ke tabel mhs sukses<br>";
     }else{
        echo "Insert data gagal<br>";
     }
    }else{
         header("location : mhs-insertdata.php");
     }