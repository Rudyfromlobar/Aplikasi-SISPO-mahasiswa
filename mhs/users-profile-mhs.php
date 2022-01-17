<?php
    session_start();
    if($_SESSION['level']=="admin") {
        header("Location: ../admin/index-admin.php");
    }

    elseif ($_SESSION['level']=="") {
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

    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">


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
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="tabel-jadwal-mhs.php">
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

        <section class="section profile">

            <div class="row">
                <div class="col-md-8 p-3 pt-2">

                    <div class="card">
                        <div class="card-body pt-2">
                            <h3 class="text-center text-primary"> Profile</h3>
                            <hr>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview">

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label text-primary ">Nama</div>
                                        <div class="col-lg-9 col-md-8 label "></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 pt-2 label text-primary">NIM</div>
                                        <div class="col-lg-9 col-md-8 label ">TI17200015</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 pt-2 label text-primary">Tempat tgl</div>
                                        <div class="col-lg-9 col-md-8 label ">Petoak, 22-februari-2000</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 pt-2 label text-primary ">Alamat</div>
                                        <div class="col-lg-9 col-md-8 label "></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 pt-2 label text-primary">Prodi</div>
                                        <div class="col-lg-9 col-md-8 label ">teknik informatika</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 pt-2 label text-primary">Semester</div>
                                        <div class="col-lg-9 col-md-8 label ">tiga(3)</div>
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main> 
 
    <script src="assets/js/main.js"></script>

</body>

</html>



