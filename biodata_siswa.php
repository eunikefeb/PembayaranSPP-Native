<!DOCTYPE html>
<html lang="en">


<head>
    <?php require_once("index_siswa.php"); ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleNav.css">

    <div class="container">
    <div class="header">
      
    </div>
</head>

<body>
    <br>
    <div class="container mt-3">
    <div class="col-md-12 offset-md-0 rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:19px; ">
        <h5>Biodata Anda</h5>
    </div>
    <br>
    <div class="col-md-12 offset-md-0 rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:24px">
    <table class="table table-bordered" >
    <thead class="table-dark">

    <table cellpadding="5" id="biodata">
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?= $result['nisn']; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><?= $result['nis']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $result['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $result['nama_kelas'] . " | " . $result['kompetensi_keahlian']; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $result['alamat']; ?></td>
            </tr>
        </table>
</body>
<br><br>
</html>