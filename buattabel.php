<?php
    /*
    untuk membuat tabel
    1.buat koneksi ke server
    2. buat script sql untuk menciptakan tabel
        tabel: mhs
        field: NIM char, NAMA STRING, JURUSAN STRING, PASCODE STRING
    3. execute script
    4. cek status
    */
    include_once("koneksii.php");
    $sql = "CREATE TABLE Tabel(
        KODE Varchar(8) PRIMARY KEY,
        NAMA Varchar(50),
        JENIS Varchar(50),
        ALAMAT Varchar(20),
        HARGA int(10)
    );";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "pembuatan tabel sukses";
    } else{
        echo "pembuatan tabel gagal";
    }