<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $kode_barang =$_POST['kode_barang'];
    $nama_barang =$_POST['nama_barang'];
    $jumlah_barang =$_POST['jumlah_barang'];
    $satuan_barang =$_POST['satuan_barang'];
    $stok =$_POST['stok'];
    

    $sql = "INSERT INTO databarang (kode_barang,nama_barang,jumlah_barang,satuan_barang,stok) 
    VALUE ('$kode_barang','$nama_barang','$jumlah_barang','$satuan_barang','$stok')";

    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location: tampilandatabarang.php');
   }else{
        header('location: simpan.php?status=gagal');
   }
}
?>
