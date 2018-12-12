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
    <!-- <style type="text/css">
    th {
        text-align: center;}
    </style> -->
<div id="wrapper" class="wrapper-content">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">ADMIN</a>
            </li>
            <li><i class="fas fa-columns"></i><a href="home_index.php">DashBoard</a></li>
            <li><i class="far fa-envelope-open"></i><a href="">Kotak Pesan</a></li>
            <li><i class="fas fa-calendar"></i><a href="">Info Terbaru</a></li>
            <li><i class="fas fa-book"></i><a href="elearning.php">E-Learning</a></li>
            <li><i class="fas fa-calendar-alt"></i><a href="info_kegiatan.php">Informasi Kegiatan</a></li>
            <li><i class="fas fa-share-square"></i><a href="insert_kegiatan.php">Posting Kegiatan</a></li>
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
                    <h2>Info Profil Mahasiswa</h2>
                    <a href="tambah_mhs.php"><input type="submit" value="Tambah" class="tambah btn btn-primary"></a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><center>No</th>
                                <th><center>Nama Mahasiswa</th>
                                <th><center>Email</th>
                                <th><center>NIM</th>
                                <th><center>No.Handphone</th>
                                <th><center>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $ambil=$koneksi->query("SELECT * FROM mahasiswa"); ?>
                            <?php while($pecah = $ambil->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $pecah['id']; ?></td>
                                <td><?php echo $pecah['nama']; ?></td>
                                <td><?php echo $pecah['email']; ?></td>
                                <td><?php echo $pecah['username']; ?></td>
                                <td><?php echo $pecah['no_hp']; ?></td>
                               <td><CENTER>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn-danger btn">Hapus</a>
                                    <a href="" class="btn btn-warning">Kirim Info</a></CENTER>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 
</body>
</html>
<?php
            //  if (isset($_GET['halaman']))
            //  {
            //     if ($_GET['halaman']=="infoprofileadmin")
            //     {
            //       include 'infoprofileadmin.php';
            //     }
            //     elseif ($_GET['halaman']=="postinginfo")
            //     {
            //       include 'postinginfo.php';
            //     }
            //     elseif ($_GET['halaman']=="downloadelearning")
            //     {
            //       include 'downloadelearning.php';
            //     }
            //     elseif ($_GET['halaman']=="postingkegiatan")
            //     {
            //       include 'postingkegiatan.php';
            //     }
            //     elseif ($_GET['halaman']=="kiriminfo")
            //     {
            //       include 'kiriminfo.php';
            //     }
            //     elseif ($_GET['halaman']=="undanganpesan")
            //     {
            //       include 'undanganpesan.php';
            //     }
            //     elseif ($_GET['halaman']=="elearningdaridosen")
            //     {
            //       include 'elearningdaridosen.php';
            //     }
            //  }
            //  else
            //  {
            //   include 'infoprofileadmin.php';
            //  }
            //  ?>



<script type="text/javascript">
$(function(){
    $(".btn-toggle-menu").click(function() {
        $("#wrapper").toggleClass("toggled");
    });
})
</script>