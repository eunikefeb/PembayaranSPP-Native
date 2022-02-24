<?php
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<body >

<?php
// Kita lakukan proses pencariannya disini
if(isset($_POST['cari'])){
    $nisn = $_POST['nisn'];
    // Kita panggil table siswa
    $biodataSiswa = mysqli_query($db, "SELECT * FROM siswa 
                    JOIN kelas ON siswa.id_kelas=kelas.id_kelas 
                    WHERE nisn='$nisn'");
    // Table pembayaran wajib kita panggil
    $historyPembayaran = mysqli_query($db, "SELECT * FROM pembayaran
                         JOIN petugas ON pembayaran.id_petugas=petugas.id_petugas
                         JOIN spp ON pembayaran.id_spp=spp.id_spp
                         WHERE nisn='$nisn'
                         ORDER BY tgl_bayar");
    $r_siswa = mysqli_fetch_assoc($biodataSiswa);
?>

    <!-- Kita tampilkan Biodata Siswa -->
    <div class="col-md-12">
          <div class="box box-primary">
            <!-- <div class="box-header"> -->
              <!-- <h3 class="box-title">Date picker</h3> --> 
        <h3 align="center">Biodata Siswa</h3>
        <table cellpadding="5" style="margin: 30px">
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?= $r_siswa['nisn']; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><?= $r_siswa['nis']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $r_siswa['nama']; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $r_siswa['nama_kelas'] . " | " . $r_siswa['kompetensi_keahlian']; ?></td>
            </tr>
             </div>
        </div>
        </table><hr>
       <!-- Sekarang kita tampilkan history pembayarannya -->
       <h3 align="center">History Pembayaran Siswa</h3><br>
       <center>
        <table cellpadding="5" cellspacing="1" border="1">
            <tr>
                <td>No. </td>
                <td>Tanggal Pembayaran</td>
                <td>Bulan Pembayaran</td>
                <td>Nominal Pembayaran</td>
                <td>Keterangan</td>
            </tr>
            
<?php 
$no=1;
while($r_trx = mysqli_fetch_assoc($historyPembayaran)){ ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $r_trx['tgl_bayar'] . " " . $r_trx['bulan_dibayar'] . " " .
                        $r_trx['tahun_dibayar']; ?></td>
                <td><?= $r_trx['bulan'] . " | Rp. " . $r_trx['nominal']; ?></td>
                <td><?= "Rp. " . $r_trx['jumlah_bayar']; ?></td>
<?php
if($r_trx['jumlah_bayar'] == $r_trx['nominal']){ ?>
                <td><font style="color: darkgreen; font-weight: bold;">LUNAS</font></td>
<?php }else{ ?> <td>BELUM LUNAS</td>
                <td><a href="transaksi.php?lunas&id=<?= $r_trx['id_pembayaran']; ?>">
                BAYAR LUNAS</a></td>
<?php } ?>
            </tr>
<?php $no++; }?>
        </table>
        <br>
        <a  href="#" onclick="window.print();"><link href class="btn btn-link">Cetak PDF</a>
        </center>
<?php } ?>
</body>
</html>