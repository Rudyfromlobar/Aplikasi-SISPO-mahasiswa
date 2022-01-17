<?php
    session_start();
    if($_SESSION['level']=="") {
        header("Location: ../admin/index-admin.php");
    }

    elseif ($_SESSION['level']=="petugas") {
        header("Location: ../mhs/users-profile-mhs.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
 
    <title>STMIK</title>

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex  justify-content-between">
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
                <a class="nav-link collapsed" href="#">
                <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Daftar Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="daftar-tabel-ti.php">
                            <i class="bi bi-circle"></i><span>Daftar Mahasiswa TI</span>
                        </a>
                    </li>
                    <li>
                        <a href="daftar-tabel-si.php">
                            <i class="bi bi-circle"></i><span>Daftar mahasiswa SI</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Jadwal Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="jadwaTI.php">
                        <i class="bi bi-circle"></i><span>Jadwal TI</span>
                        </a>
                    </li>
                    <li>
                        <a href="jadwalSI.php">
                            <i class="bi bi-circle"></i><span>Jadwal SI</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Input Nilai Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="daftar-nilai-ti.php">
                            <i class="bi bi-circle"></i><span>input nilai  TI</span>
                        </a>
                    </li>
                    <li>
                        <a href="daftar-nilai-si.php">
                            <i class="bi bi-circle"></i><span>input nilai SI</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Log-out</span>
                </a>
            </li>
        </ul>

    </aside>

    <main id="main" class="main">

<?php
    include 'koneksi.php';
    $jumlah = mysqli_query($host, "SELECT * FROM mahasiswa where nipd like 'TI%'");
    $mhs = mysqli_num_rows($jumlah);
?>

<?php
    include 'koneksi.php';
    $banyak = mysqli_query($host, "SELECT * FROM mahasiswa where nipd like 'SI%'");
    $aku = mysqli_num_rows($banyak);
?>
 
        <section class="section dashboard">
        <div class="card mt-3">
                <div class="card-header bg-warning text-white text-center">
                    <h3>DASHBOARD</h3>
                </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xxl-6 col-md-6 ps-5">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h6 class="card-title text-center pt-3">Jumlah Mahasiswa</h6>
                                        <div class="ps-5 pt-5">
                                            <span>Jumlah mahasiswa TI <?=$mhs; ?></span><br>
                                            <span>Jumlah mahasiswa SI <?=$aku; ?></span>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h6 class="card-title text-center pt-3">Jumlah Prodi</h6>                                      
                                        <div class="ps-5 pt-5">
                                            <span>Sistem Informasi</span><br>
                                            <span>Teknik Informatika</span>
                                        </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            </div>
            </div>

        </section>

    </main>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>