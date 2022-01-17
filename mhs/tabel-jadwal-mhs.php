
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>STMIK</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!--Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn p-2"></i>
                <div class="logo d-flex align-items-center">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">Black list</span>
                </div>
        </div>

    </header>

  <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile-mhs.php">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-journal-text"></i>
                    <span>jadwal</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="tabel-nilai.php">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Transkip nilai</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="login.php">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Log-out</span>
                </a>
            </li>

        </ul>

    </aside>
    
    <!--Dashboard -->
    <main id="main" class="main">

 


    <!-- Awal Card Tabel -->
    <div class="card mt-3">
        <div class="card-header bg-success text-white">
            JADWAL MATAKULIAH
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Dosen Pengajar</th>
                    <th>Mata Kuliah</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                </tr>
<?php
    include 'koneksi.php';
    $nomor = 1;
    $tampil = mysqli_query($host, "SELECT * from jadwal_ti order by id_jadwal desc");

while($data = mysqli_fetch_array($tampil)) :

?>
                <tr>
                    <th><?=$nomor ++;?></th>
                    <td><?=$data['hari']; ?></td>
                    <td><?=$data['dosen']; ?></td>
                    <td><?=$data['matakuliah']; ?></td>
                    <td><?=$data['waktu']; ?></td>
                    <td><?=$data['tempat']; ?></td>
                </tr>
                <?php endwhile; //penutup perulangan while ?>
            </table>

        </div>
    </div>

        
</main>


  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
