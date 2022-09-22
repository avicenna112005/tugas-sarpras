<?php
include 'koneksi.php';

if (isset($_POST['simpan2'])){
    $nisn = $_POST['nisn'];
    $kelas = $_POST['kelas'];
    $nama = $_POST['nama'];

    $sql = "UPDATE datasiswa SET nama='$nama',kelas='$kelas' WHERE nisn='$nisn'";
    $query = mysqli_query($connect,$sql);
    if ($query){
    header('Location: tampilandatasiswa.php');
    }else{
    header('Location: editdatasiswa.php?status=gagal');
    }
}
?>