<?php
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
            <td><a href="tampilandatasiswa.php">Data Siswa</a></td>
        </div>
              <br>
        <div class="textdatabarang">
            <td><a href="databarang/tampilandatabarang.php">Data Barang</a></td>
        </div>
    </div>

    <div class="tabel1">
        <div class="sarana">
            <h1>Sarana Prasarana</h1>
        </div>

        <h3>Data siswa</h3>
        <br>
        <button><h4><a href="datasiswa.html">[+] Tambah Baru</a></h4></button>
        <br>
        <table class="kotak" border="1">
            <tr>
                <th>Nisn</th>
                <th>Kelas</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            <?php
                $sql ="SELECT * FROM datasiswa";
                $query = mysqli_query($connect,$sql);
                while($pel = mysqli_fetch_array($query)){
                    //var_dump($pel);
                    echo "
                    <tr>
                    <td>$pel[nisn]</td>
                    <td>$pel[kelas]</td>
                    <td>$pel[nama]</td>
                    <td>
                        <a href='formeditdatasiswa.php?nisn=".$pel
                        ['nisn']."'>Edit</a>
                        <a href='hapusdata.php?nisn=".$pel['nisn'].
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