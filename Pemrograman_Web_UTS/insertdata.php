<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert ke tabel BUKU</title>
</head>
<body>
    
    <form method="POST" action="insertdataform.php">
        NOMER BUKU <br>
        <input type="text" name="txNOM"><br>
        NAMA BUKU<br>
        <input type="text" name="txNAMA"><br>
        JENIS BUKU<br>
        <select name="txJENIS">
            <option value="FIKSI"> FIKSI </option>
            <option value="NONFIKSI"> NONFIKSI </option>
        </select><br>
        STOCK
        <input type="number" name="txSTOCK"><br>
        <br><br>
        <button type=submit> simpan data </button>
    </form>
</body>
</html>