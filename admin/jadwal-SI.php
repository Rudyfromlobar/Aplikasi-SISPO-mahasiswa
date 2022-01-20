<?php
	//Koneksi Database
    include '../koneksi.php';
	//jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
		//Pengujian Apakah data akan diedit atau disimpan baru
		if($_GET['hal'] == "edit")
		{
			//Data akan di edit
			$edit = mysqli_query($host, "UPDATE jadwal_si set
											 	hari = '$_POST[hri]',
											 	dosen = '$_POST[dsn]',
												matakuliah = '$_POST[mk]',
											 	waktu = '$_POST[time]',
                                                tempat= '$_POST[temp]'
											WHERE id_jadwal_si = '$_GET[id]'
										    ");
			if($edit) //jika edit sukses
			{
				echo "<script>
						alert('Edit data suksess!');
						document.location='jadwal-SI.php';
				     </script>";
			}
			else
			{
				echo "<script>
					    alert('Edit data GAGAL!!');
						document.location='jadwal-SI.php';
				     </script>";
			}
		}
		else
		{
			//Data akan disimpan Baru
			$simpan = mysqli_query($host, "INSERT INTO jadwal_si (hari,dosen, matakuliah, waktu, tempat)
										  VALUES ('$_POST[hri]', 
										  		 '$_POST[dsn]', 
										  		 '$_POST[mk]', 
										  		 '$_POST[time]',
                                                  '$_POST[temp]')
										 ");
			if($simpan) //jika simpan sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='jadwal-SI.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='jadwal-SI.php';
				     </script>";
			}
		}


		
	}


	//Pengujian jika tombol Edit / Hapus di klik
	if(isset($_GET['hal']))
	{
		//Pengujian jika edit Data
		if($_GET['hal'] == "edit")
		{
			//Tampilkan Data yang akan diedit
			$tampil = mysqli_query($host, "SELECT * FROM jadwal_si WHERE id_jadwal_si = '$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$vhari = $data['hari'];
				$vdosen = $data['dosen'];
				$vmatakuliah = $data['matakuliah'];
				$vwaktu = $data['waktu'];
                $vtempat = $data['tempat'];
			}
		}
		else if ($_GET['hal'] == "hapus")
		{
			//Persiapan hapus data
			$hapus = mysqli_query($host, "DELETE FROM jadwal_si WHERE id_jadwal_si = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='jadwaTI.php';
				     </script>";
			}
		}
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
                <a class="nav-link collapsed" href="index-admin.php">
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
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Jadwal SI</span>
                        </a>
                    </li>
                </ul>
            </li>
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
                <a class="nav-link collapsed" href="login.php">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Log-out</span>
                </a>
            </li>
        </ul>

    </aside>
 
    <main id="main" class="main">
        <form action="" method="post">
            <div class="card mt-3">
                <div class="card-header bg-primary text-white text-center">
                    <span>TABEL JADWAL SI</span>
                </div>
                <div class="card-body">
                    <div class="form-group pt-3">
                        <label>HARI</label>
                        <input type="text" name="hri" value="<?=@$vhari?>"  class="form-control">
                    </div>

                    <div class="form-group pt-2">
                        <label>DOSEN PENGAJAR</label>
                        <input type="text" name="dsn" value="<?=@$vdosen?>" class="form-control" >
                    </div>

                    <div class="form-group pt-2">
                        <label>MATAKULIAH</label>
                        <input type="text" name="mk" value="<?=@$vmatakuliah?>"  class="form-control" >
                    </div>
                    
                    <div class="form-group pt-2">
                        <label>WAKTU</label>
                        <input type="text" name="time" value="<?=@$vwaktu?>"  class="form-control" >
                    </div>
                    
                    <div class="form-group pt-2">
                        <label>TEMPAT</label>
                        <input type="text" name="temp" value="<?=@$vtempat?>" class="form-control" >
                    </div>
                
                    <div class="pt-3">
                        <button type="submit" class="btn btn-success " name="bsimpan">Simpan</button>
                        <button type="reset" class="btn btn-danger"  name="breset">Kosongkan</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="card mt-3">
            <div class="card-header bg-success text-white text-center">
                JADWAL MAHASISWA
            </div>
            <div class="card-body">
            
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Hari</th>
                        <th>Dosen Pengajar</th>
                        <th>Matakuliah</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Aksi</th>
                    </tr>
<?php

    $tampil = mysqli_query($host, "SELECT * from jadwal_si order by id_jadwal_si desc");
    while($data = mysqli_fetch_array($tampil)) :

?>
                    <tr>
                        <td><?=$data['hari']; ?></td>
                        <td><?=$data['dosen']; ?></td>
                        <td><?=$data['matakuliah']; ?></td>
                        <td><?=$data['waktu']; ?></td>
                        <td><?=$data['tempat']; ?></td>
                        <td>
                            <a href="jadwal-SI.php?hal=edit&id=<?=$data['id_jadwal_si']?>" class="btn btn-warning"> Edit </a>
                            <a href="jadwal-SI.php?hal=hapus&id=<?=$data['id_jadwal_si']?>" 
                            onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                        </td>
                    </tr>
                    <?php endwhile; //penutup perulangan while ?>
                </table>
            </div>
        </div>

    </main>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>