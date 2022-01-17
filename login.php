<?php
    error_reporting(0);
    session_start();
    if($_SESSION['level']=="admin") {
        header("Location: admin/index-admin.php");
    }

    elseif ($_SESSION['level']=="petugas") {
        header("Location: mhs/users-profile.php");
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
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>


        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4 ">STMIK</h5>
                                </div>

                                <form action="proses1.php" method="POST" class="row g-3 needs-validation" novalidate>

                                    <div class="col-12">
                                        <label for="Username" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-circle"></i></span>
                                            <input type="text" name="Username" class="form-control" id="Username" required>
                                            <div class="invalid-feedback">The name you entered is wrong</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="Password" class="form-label">Password</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"> <i class="bi bi-lock"></i></span>
                                            <input type="password" name="Passwrod" class="form-control" id="Password" required>
                                            <div class="invalid-feedback">The password you entered is wrong</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 " type="submit" value="login" name="login">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>