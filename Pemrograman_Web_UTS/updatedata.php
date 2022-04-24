<?php

    include_once("koneksidb.php");
    $nom = "B2";
    $gantijenis = "FIKSI";
    $sql = "UPDATE BUKU SET JENIS='$gantijenis' WHERE nomer='$nom';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }