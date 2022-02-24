<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styleNav.css">
</head>

<body>

    <div class="container">
    <div class="header">
    <h1 id="title" class="text-center mt-5 display-4">Aplikasi Pembayaran SPP</h1><br><hr>
  </div>

<!-- Logika kita, Jika Level Admin Maka Fitur apa saja yang dapat diakses -->
<?php
$panggil = mysqli_query($db, "SELECT * FROM petugas WHERE username='$username'");
$hasil = mysqli_fetch_assoc($panggil);
    if($hasil['level'] == "Administrator"){ ?>

<div class="container-nav">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <center><ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="siswa.php">Data Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="petugas.php" >Data Petugas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="kelas.php">Data Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="spp.php">Data SPP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="transaksi.php">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="history.php">History Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="logout.php">LogOut</a>
          </li>
        </ul></center>
      </div>
    </div>
  </nav>
</div>

<?php
    }else{ ?>
    <div class="container-navPetugas">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <center><ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="transaksi.php">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="history.php">History Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="logout.php">LogOut</a>
          </li>
        </ul></center>
      </div>
    </div>
  </nav>
    </div>
<?php } ?>