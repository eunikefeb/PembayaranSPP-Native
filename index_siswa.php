<?php
session_start();
require_once("koneksi.php");
// Jika sesi dari login belum dibuat maka akan kita kembalikan ke halaman login
if(!isset($_SESSION['nisn'])){
    header("location: login_siswa.php");
}else{
    // Jika sudah dibuatkan sesi maka akan kita masukkan kedalam variabel
    $nisn = $_SESSION['nisn'];
}
$siswa = mysqli_query($db, "SELECT * FROM siswa 
    JOIN kelas ON siswa.id_kelas=kelas.id_kelas 
    WHERE nisn='$nisn'");
$result = mysqli_fetch_assoc($siswa);
$pembayaran = mysqli_query($db, "SELECT * FROM pembayaran 
    JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas 
    JOIN spp ON pembayaran.id_spp = spp.id_spp
    WHERE nisn='$nisn'
    ORDER BY tgl_bayar");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman Utama</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styleNav.css">

        <div class="container">
        <div class="header">
            <h1 id="title" class="text-center mt-5 display-4">Aplikasi Pembayaran SPP</h1><br><hr/>
        </div>
    </head>
    <body>
    <h5> Hallo, <?= $result['nama']; ?> !</h5>
<div class="container-nav">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <center><ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="biodata_siswa.php" >Biodata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="history_siswa.php">History Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="logout.php">LogOut</a>
          </li>
        </ul></center>
      </div>
    </div>
  </nav>
</div>
        
    </body>
</html>