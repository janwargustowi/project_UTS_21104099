<?php
    if(isset($_POST['txNOM'])){
    include_once ("koneksidb.php");
    $nom =$_POST['txNOM'];
    $nama =$_POST['txNAMA'];
    $jenis = $_POST["txJENIS"];
    $stock = $_POST["txSTOCK"];

    $sql = "INSERT INTO BUKU(NOMER,NAMA,JENIS,STOCK) Values('$nom','$nama','$jenis','$stock');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert data gagal<br>";
    }
}else{
    header("location : insertdata.php");
}
