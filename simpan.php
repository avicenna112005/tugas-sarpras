<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
     $nisn = $_POST['nisn'];
    $kelas =$_POST['kelas'];
    $nama =$_POST['nama'];
    

    $sql = "INSERT INTO datasiswa (kelas,nama,nisn) VALUE ('$nama','$kelas','$nisn')";

    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location: tampilandatasiswa.php');
   }else{
        header('location: simpan.php?status=gagal');
   }
}
?>
