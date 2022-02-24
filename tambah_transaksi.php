<?php
require_once("require.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah data transaksi</title>
</head>
<body>
    <?php require("header.php"); ?>
    <h3>Tambah data transaksi</h3>
    <form action="proses_tambah_transaksi.php" method="POST">
        <table cellpadding="5">
            <tr>
                <td>Petugas :</td>
                <td><select name="petugas">
<?php
// Kita akan ambil Nama Petugas yang ada pada tabel Petugas
$petugas = mysqli_query($db, "SELECT * FROM petugas");
while($r = mysqli_fetch_assoc($petugas)){ ?>
                        <option value="<?= $r['id_petugas']; ?>"><?= $r['nama_petugas']; ?></option>
<?php } ?>          </select></td>
            </tr>
            <tr>
                <td>Nama siswa :</td>
                <td><select name="siswa">
<?php
// Sekarang kita ambil NISN Siswa 
$siswa = mysqli_query($db, "SELECT * FROM siswa");
while($r = mysqli_fetch_assoc($siswa)){ ?>
                        <option value="<?= $r['nisn']; ?>"><?= $r['nama']; ?></option>
<?php } ?>          </select></td>
            </tr>   
            <tr>
                <td>Tgl. / Bulan / Tahun bayar :</td>
                <td><input type="text" name="tgl" size="5" placeholder="Tanggal.">
                    <input type="text" name="bulan" size="10" placeholder="Bulan.">
                    <input type="text" name="tahun" size="5" placeholder="Tahun."></td>
            </tr>
            <tr>
                <td>SPP / Nominal yang harus dibayar</td>
                <td><select name="spp">
<?php
// Ambil juga data SPP
$spp = mysqli_query($db, "SELECT * FROM spp");
while($r = mysqli_fetch_assoc($spp)){ ?>
                        <option value="<?= $r['id_spp']; ?>">
                        <?= $r['bulan'] . " | " . $r['nominal']; ?></option>
<?php } ?>          </select></td>
            </tr>
            <tr>
                <td>Jumlah bayar</td>
                <td><input type="text" name="jumlah" placeholder="1000000"></tdd>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="simpan" class="btn btn-success">Simpan</button></td>
            </tr>
        </table>
<hr />
    <?php require("footer.php"); ?>
</body>
</html>