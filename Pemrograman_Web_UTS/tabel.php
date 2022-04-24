<?php

include_once("koneksidb.php");
$sql = "CREATE TABLE BUKU(
    NOMER Varchar(4) PRIMARY KEY,
    NAMA Varchar(40),
    JENIS Varchar(8),
    STOCK INT(100)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "tabel sukses";
}else{
    echo "tabel gagal";
}