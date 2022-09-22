<?php
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $satuan_barang = $_POST['satuan_barang'];
    $stok = $_POST['stok'];

    $sql = "UPDATE databarang SET kode_barang='$kode_barang',nama_barang='$nama_barang',jumlah_barang='$jumlah_barang',satuan_barang='$satuan_barang',stok='$stok' WHERE kode_barang='$kode_barang'";
    $query = mysqli_query($connect,$sql);
    if ($query){
    header('Location: tampilandatabarang.php');
    }else{
    header('Location: editdatabarang.php?status=gagal');
    }
}
?>