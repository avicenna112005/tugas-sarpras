<?php
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
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

    <div class="tabel1">
        <div class="sarana">
            <h1>Sarana Prasarana</h1>
        </div>

        <h3>Data Barang</h3>
        <br>
        <button><h4><a href="databarang.html">[+] Tambah Baru</a></h4></button>
        <br>
        <table class="kotak" border="1">
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Satuan Barang</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
            <?php
                $sql ="SELECT * FROM databarang";
                $query = mysqli_query($connect,$sql);
                while($pel = mysqli_fetch_array($query)){
                    //var_dump($pel);
                    echo "
                    <tr>
                    <td>$pel[kode_barang]</td>
                    <td>$pel[nama_barang]</td>
                    <td>$pel[jumlah_barang]</td>
                    <td>$pel[satuan_barang]</td>
                    <td>$pel[stok]</td>
                    <td>
                        <a href='formeditdatabarang.php?kode_barang=".$pel
                        ['kode_barang']."'>Edit</a>
                        <a href='hapusdata.php?kode_barang=".$pel['kode_barang'].
                        "'>hapus</a>
                    </td>
                </tr>";
                }
            ?>
    </div>
 </div>
    </table>
    
</body>
</html>