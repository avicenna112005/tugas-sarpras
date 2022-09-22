<?php
include 'koneksi.php';

if (isset($_GET['kode_barang'])){
    $kode_barang = $_GET['kode_barang'];
    
    $sql = "DELETE FROM databarang WHERE kode_barang= '$kode_barang'";
    $query = mysqli_query($connect,$sql);
    
    if($query) {
        header('Location: tampilandatabarang.php');
    }else{
        header('Location: hapusdata.php?status=gagal');
    }
}

?>