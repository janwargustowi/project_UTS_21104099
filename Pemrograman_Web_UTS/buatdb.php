<?php
include_once("koneksidb.php");
$sql = "CREATE DATABASE BOOK_STORE;";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan database sukses";
}else{
    echo "Pembuatan database bermasalah";
}
mysqli_close($cnn);