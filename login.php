<?php
session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
}
?>
<html>
    <head>
        <title>LOG IN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <style>
        body{
          background-color: grey ;
        }
    </style>

<body>
    
    <div class="row" style="margin-top:180px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 3px-3px;padding:15px">

    <center>
        <h3>Login Pembayaran SPP</h3> <hr />
    <form action="proseslogin.php" method="POST">
        <table>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="LOG IN" name="login" class="btn btn-success"></td>
            </tr>
            <tr>
                <td colspan="2"><br><center>Apakah anda seorang siswa? login 
                    <a href="login_siswa.php">disini</a></center> 
                </td>
            </tr>
        </table>
    </form>
    </center>

    </div>
    <div class="col-md"></div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>
</body>
</html>