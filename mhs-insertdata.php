<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert ke tabel</title>
</head>
<body>

    <form method="POST" action="gudang_insertdataform.php">
        KODE<br>
        <input type="text" name=txKODE><br>
        NAMA<br>
        <input type="text" name=txNAMA><br>
        JENIS<br>
        <select name="txJENIS">
            <option value="KAYU"> KAYU </option>
            <option value="BESI"> BESI </option>
    </select><br>
        ALAMAT<br>
    <input type="text" name="txALAMAT">
       <br>
        HARGA<br>
    <input type="text" name="txHARGA">
    <br><br>
    <button type="submit"> simpan data </button>
    </form>

</body>
</html>