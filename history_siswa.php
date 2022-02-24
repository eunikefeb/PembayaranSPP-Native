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
    <div class="col-md-12 offset-md-0 rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:24px">
    <table class="table table-bordered" >

        <center><p><h3>History Pembayaran Anda</p></h3>
                <table id="history" class="table table-sm" cellspacing="0" border="1" cellpadding="5">
                <thead class="table-dark">    
                <tr>
                        <td>No. </td>
                        <td>Dibayarkan kepada</td>
                        <td>Tgl. Pembayaran</td>
                        <td>Tahun | Nominal yang harus dibayar</td>
                        <td>Jumlah yang dibayarkan</td>
                        <td>Status</td>
                    </tr>
                </thead>
            <?php
            $no = 1;
            while($r = mysqli_fetch_assoc($pembayaran)){ ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r['nama_petugas']; ?></td>
                        <td><?= $r['tgl_bayar'] . "/" . $r['bulan_dibayar'] . "/" . $r['tahun_dibayar']; ?></td>
                        <td><?= $r['bulan'] . " | Rp. " . $r['nominal']; ?></td>
                        <td><?= $r['jumlah_bayar']; ?></td>
                        <td>
            <?php
            // Jika jumlah bayar sesuai dengan yang harus dibayar maka Status LUNAS
            if($r['jumlah_bayar'] == $r['nominal']){ ?>
                            <font style="color: darkgreen; font-weight: bold;">LUNAS</font>
            <?php }else{ ?>                             BELUM LUNAS <?php } ?> </td>
                    </tr>
                <?php $no++; } ?>
                </table><br>
</body>
</html>