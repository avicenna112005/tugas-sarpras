<?php
include 'koneksi.php';

$kode_barang = $_GET ['kode_barang'];
$sql = "SELECT * FROM databarang WHERE kode_barang='$kode_barang'";
$query = mysqli_query($connect,$sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Data</title>
    <link rel="stylesheet" href="style.css">

     <!--font quicksand-->

     <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="keseluruhan">
      
        <div class="kiri-besar">
            <div class="logo">
                <img src="user.png" alt="">
                <h1 class="user">username</h1>
            </div>
          <div class="textdatasiswa">
              <td><a href="../tampilandatasiswa.php">Data Siswa</a></td>
          </div>
                <br>
          <div class="textdatabarang">
              <td><a href="tampilandatabarang.php">Data Barang</a></td>
          </div>
        </div>

    <div class="table2">
        <div class="sarana">
            <h1>Sarana Prasarana</h1>
        </div>
        <form action="editdatabarang.php" method="post">
            <h3>edit data </h3>
            <br>
            <p><label for="">kode Barang: <input value="<?php echo $pel ['kode_barang']?>"  type="number" name="kode_barang"></label></p>
            <br>
            <br>
            <p><label for="">Nama Barang : <input value="<?php echo $pel ['nama_barang']?>" type="text" name="nama_barang"></label></p>
            <br>
            <br>
            <p><label for="">Jumlah Barang : <input value="<?php echo $pel ['jumlah_barang']?>" type="number" name="jumlah_barang"></label></p>
            <br>
            <br>
            <p><label for="">Satuan Barang: <input value="<?php echo $pel ['satuan_barang']?>" type="text" name="satuan_barang"></label></p>
            <br>
            <br>
            <p><label for="">Stok : <input value="<?php echo $pel ['stok']?>" type="text" name="stok"></label></p>
            <br>
            <br>
            <input type="submit" name="simpan" value="simpan">
        </form>
    </div>
</div>
</body>
</html>