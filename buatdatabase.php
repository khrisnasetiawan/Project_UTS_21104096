<?php
    /*
    untuk membuat database
    1.koneksi server mysql
    2. buat sql untuk menciptakan database
        CREATE DATABASE namadv;
    3. execute/jalankan intruksi pembuatan database
    4. cek status
    */
    include_once("koneksii.php");
    $sql = "CREATE DATABASE GUDANGKURSI;";
    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        echo "Pembuatan database sukses";
    }
    else{
        echo "Terjadi kesalahan pembuatan database";
    }
    mysqli_close($cnn);