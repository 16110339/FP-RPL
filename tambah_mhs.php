<?php
session_start();
 
include 'koneksi.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Informasi Kampus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>
    <div id="wrapper" class="wrapper-content">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">ADMIN</a>
                </li>
                <li><i class="fas fa-columns"></i><a href="">DashBoard</a></li>
                <li><i class="far fa-envelope-open"></i><a href="">Kotak Pesan</a></li>
                <li><i class="fas fa-calendar"></i><a href="">Info Terbaru</a></li>
                <li><i class="fas fa-book"></i><a href="">E-Learning</a></li>
                <li><i class="fas fa-calendar-alt"></i><a href="">Informasi Kegiatan</a></li>
                <li><i class="fas fa-share-square"></i><a href="">Posting Kegiatan</a></li>
                <li><i class="fas fa-sign-out-alt"></i><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="btn-menu btn btn-success btn-toggle-menu" type="button">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Tambah Mahasiswa</h2>
                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="form-group col-lg-6">
                                <label for="nama">Nama</label>
                                <div class="input"><input class="form-control" type="text" name="nama" placeholder="Isi Nama Lengkap"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="email">E-Mail</label>
                                <div class="input"><input class="form-control"  type="email"  name="email" placeholder="Masukkan Email"></div>
                            </div>
                            
                            <div class="form-group col-lg-3">
                                <label for="no_hp">No.Handphone</label> 
                                <div class="input"><input class="form-control"  type="text"  name="no_hp" placeholder="Contoh : 08238438****"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="username">Username</label>
                                <div class="input"><input class="form-control"  type="text" name="username" placeholder="Nim Mahasiswa"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="password">Password</label>
                                <div class="input"><input class="form-control"  type="password"  name="password" placeholder="Password Mahasiswa"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <input class="btn btn-primary" type="submit" value="Simpan" name="submit">
                                <input class="btn btn-primary" type="reset" value="Batal" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php


if(isset($_POST['submit'])) {

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$mhs ="INSERT INTO mahasiswa (nama,email,no_hp,username,password)
VALUES ('$nama','$email','$no_hp','$username','$password')";

$hasil = mysqli_query($koneksi, $mhs) or die(mysql_error());

header("location:home_index.php");
}

?>
<script type="text/javascript">
    $(function () {
        $(".btn-toggle-menu").click(function () {
            $("#wrapper").toggleClass("toggled");
        });
    })
</script>