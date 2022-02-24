<?php
require_once("require.php");
$id = $_GET['id'];
$spp = mysqli_query($db, "SELECT * FROM spp WHERE id_spp='$id'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit data SPP</title>
</head>
<body>
    <!-- Panggil header -->
    <?php require("header.php"); ?>
    <!-- Konten -->
    <br><h2>Edit data SPP</h2><br>
<?php
while($row = mysqli_fetch_assoc($spp)){?>
    <form action="" method="POST">
        <table cellpadding="5">
            <input type="hidden" name="id" value="<?= $row['id_spp']; ?>">
            <tr>
                <td>Bulan :</td>
                <td><input type="text" name="bulan" value="<?= $row['bulan']; ?>"></td>
            </tr>
            <tr>
                <td>Nominal :</td>
                <td><input type="text" name="nominal" value="<?= $row['nominal']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan" name="simpan" class="btn btn-success"></td>
            </tr>
        </table>
    </form>
<?php } ?>
</body>
</html>
<?php
// Proses update 
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $bulan = $_POST['bulan'];
    $nominal = $_POST['nominal'];
    $update = mysqli_query($db, "UPDATE spp SET bulan='$bulan', nominal='$nominal'
                                 WHERE spp.id_spp='$id'");
        if($update){
            header("location: spp.php");
        }else{
            echo "<script>alert('Gagal'); </script>";
        }
}
?>