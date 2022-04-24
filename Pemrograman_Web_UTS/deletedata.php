<?php
    
    include_once("koneksidb.php");
    $nom = "4";
    $sql = "DELETE FROM BUKU WHERE nomer='$nom';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }