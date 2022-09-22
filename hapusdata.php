<?php
include 'koneksi.php';

if (isset($_GET['nisn'])){
    $nisn = $_GET['nisn'];
    
    $sql = "DELETE FROM datasiswa WHERE nisn= '$nisn'";
    $query = mysqli_query($connect,$sql);
    
    if($query) {
        header('Location: tampilandatasiswa.php');
    }else{
        header('Location: hapusdata.php?status=gagal');
    }
}

?>