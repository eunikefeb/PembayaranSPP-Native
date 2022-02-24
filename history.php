<?php
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>History Pembayaran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>

      body{
          background-color: grey ;
          background-size: cover;
        }

      div.container{
        margin: 0 auto;
        display: table;
        width: 500px;
      }
    </style>

</head>
<body>
    <!-- Konten -->
    <div class="container" style="margin-top:180px;">
    <div class="card">
    <div class="col-md-12" style="padding: 10px;px ">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <!-- <div class="box-header with-border"> -->
              <br><h2 class="box-title" align="center"><b>History Pembayaran Siswa</b></h2><br>
                <form action="tampil_history.php" method="POST" autocomplete="on" align="center">
                    <input type="text" name="nisn" placeholder="Cari berdasarkan NISN" autofocus>
                    <button type="submit" class="btn btn-primary btn-sm" name="cari">Cari</button>
                    <a class="btn btn-danger btn-sm" href="?pembayaran=read" >Cancel</a>
                </form>

</br> 
</br>
</div>
</div>    
</div>
</div>
</body>
</html>