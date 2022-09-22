<?php
include 'koneksi.php';

$nisn = $_GET ['nisn'];
$sql = "SELECT * FROM datasiswa WHERE nisn='$nisn'";
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
              <td><a href="tampilandatasiswa.php">Data Siswa</a></td>
          </div>
                <br>
          <div class="textdatabarang">
              <td><a href="databarang/tampilandatabarang.php">Data Barang</a></td>
          </div>
        </div>

    <div class="table2">
        <div class="sarana">
            <h1>Sarana Prasarana</h1>
        </div>
        <form action="editdatasiswa.php" method="post">
            <h3>edit data </h3>
            <br>
            <p><label for="">Nisn: <input value="<?php echo $pel ['nisn']?>"  type="number" name="nisn"></label></p>
            <br>
            <br>
            <p><label for="">Kelas : <input value="<?php echo $pel ['kelas']?>" type="text" name="kelas"></label></p>
            <br>
            <br>
            <p><label for="">Nama : <input value="<?php echo $pel ['nama']?>" type="text" name="nama"></label></p>
            <br>
            <br>
            <input class='button' type="submit" name="simpan2" value="simpan">
        </form>
    </div>
</div>
</body>
</html>