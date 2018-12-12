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
                <h2>E-LEARNING</h2>
                    <a href="insert_elearning.php"><input type="submit" value="Tambah" class="tambah btn btn-primary"></a>
                    <table class="table table-bordered">                    
                        <thead>
                            <tr>                             
                                <th><center>Judul Materi</th>
                                <th><center>Dosen Pengampu</th>
                                <th><center>Mata Kuliah</th>
                                <th><center>Semester</th>
                                <th><center>Tanggal Upload</th>
                                <th><center>Document</th>
                                <th><center>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>        
                        <?php $insert =mysqli_query($koneksi,"SELECT * FROM elearning");
                            while($i = mysqli_fetch_array($insert)){ ?>                    
                            <tr>                        
                                <td><?php echo $i['nama_elearning']; ?></td>
                                <td><?php echo $i['nama_dosen']; ?></td>
                                <td><?php echo $i['mata_kuliah']; ?></td>
                                <td><center><?php echo $i['semester']; ?></td>
                                <td><center><?php echo $i['tanggal_upload']; ?></td>
                                <td><a href=""></a><?php echo $i['document']; ?></td>
                                <td><CENTER>                                
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="cek/tampilkan_elearning.php" class="btn btn-primary" target="blank" class>View</a></CENTER>
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
<script type="text/javascript">
$(function(){
    $(".btn-toggle-menu").click(function() {
        $("#wrapper").toggleClass("toggled");
    });
})
</script>
</body>
</html>