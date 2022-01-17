<?php
	//Koneksi Database
    include 'koneksi.php';
	//jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
		//Pengujian Apakah data akan diedit atau disimpan baru
		if($_GET['hal'] == "edit")
		{
			//Data akan di edit
			$edit = mysqli_query($host, "UPDATE mahasiswa set
											 	nipd = '$_POST[NIM]',
											 	nm_pd = '$_POST[nama]',
												jk = '$_POST[jenis]',
											 	nik = '$_POST[induk]',
                                                tmpt_lahir= '$_POST[tempat]',
                                                tgl_lahir= '$_POST[tgl]',
                                                id_prodi= '$_POST[prodi]',
                                                nidn= '$_POST[dosen]',
                                                kelas= '$_POST[kls]'
											WHERE nipd = '$_GET[id]'
										    ");
			if($edit) //jika edit sukses
			{
				echo "<script>
						alert('Edit data suksess!');
						document.location='daftar-tabel-si.php';
				     </script>";
			}
			else
			{
				echo "<script>
					    alert('Edit data GAGAL!!');
						document.location='daftar-tabel-si.php';
				     </script>";
			}
		}
        else
        {
			//Data akan disimpan Baru
			$simpan = mysqli_query($host, "INSERT INTO mahasiswa (nipd,nm_pd, jk, nik, tmpt_lahir, tgl_lahir, id_prodi, nidn, kelas)
										  VALUES ('$_POST[NIM]', 
										  		 '$_POST[nama]', 
										  		 '$_POST[jenis]', 
										  		 '$_POST[induk]',
                                                   '$_POST[tempat]',
                                                   '$_POST[tgl]',
                                                   '$_POST[prodi]',
                                                   '$_POST[dosen]',
                                                  '$_POST[kls]')
										 ");
			if($simpan) //jika simpan sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='daftar-tabel-si.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='daftar-tabel-si.php';
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
			$tampil = mysqli_query($host, "SELECT * FROM mahasiswa WHERE nipd = '$_GET[id]'");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$vnim = $data['nipd'];
                $vnama = $data['nm_pd'];
				$vjenis = $data['jk'];
				$vinduk = $data['nik'];
                $vtempat = $data['tmpt_lahir'];
                $vtgl = $data['tgl_lahir'];
                $vprodi = $data['id_prodi'];
                $vdosen = $data['nidn'];
                $vkls = $data['kls'];
			}
		}
		else if ($_GET['hal'] == "hapus")
		{
			//Persiapan hapus data
			$hapus = mysqli_query($host, "DELETE FROM mahasiswa WHERE nipd = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='daftar-tabel-si.php';
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
                        <a href="#">
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
                        <a href="jadwal-SI.php">
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
                <a class="nav-link collapsed" href="login.php">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Log-out</span>
                </a>
            </li>
        </ul>

    </aside>

    <main id="main" class="main">
        <form action="" method="POST">
            <div class="card mt-3">
                <div class="card-header bg-primary text-white text-center">
                    <h3>Input/ Edit/ Hapus Data Mahasiswa SI</h3>
                </div>
                <div class="card-body">
                    <div class="form-group pt-3">
                        <label>NIM</label>
                        <input type="text"  name="NIM" value="<?=@$vnim?>"  class="form-control">
                    </div>

                    <div class="form-group pt-2">
                        <label>Nama</label>
                        <input type="text" name="nama" value="<?=@$vnama?>" class="form-control" >
                    </div>

                    <div class="form-group pt-2">
                        <label>Jenis kelamin</label>
                        <input type="text"  name="jenis" value="<?=@$vjenis?>"  class="form-control" >
                    </div>
                    
                    <div class="form-group pt-2">
                        <label>NIK</label>
                        <input type="text" name="induk" value="<?=@$vinduk?>" class="form-control" >
                    </div>
                    
                    <div class="form-group pt-2">
                        <label>Tempat lahir</label>
                        <input type="text" name="tempat" value="<?=@$vtempat?>" class="form-control" >
                    </div>
                    <div class="form-group pt-2">
                        <label>Tgl lahir</label>
                        <input type="text" name="tgl" value="<?=@$vtgl?>" class="form-control" >
                    </div>
                    <div class="form-group pt-2">
                        <label>ID prodi</label>
                        <input type="text" name="prodi" value="<?=@$vprodi?>" class="form-control" >
                    </div>
                    <div class="form-group pt-2">
                        <label>NIDN</label>
                        <input type="text"  name="dosen" value="<?=@$vdosen?>" class="form-control" >
                    </div>
                    <div class="form-group pt-2">
                        <label>kelas</label>
                        <input type="text" name="kls" value="<?=@$vkls?>" class="form-control" >
                    </div>
                            
                    <div class="pt-3">
                        <button type="submit" class="btn btn-success " name="bsimpan">Simpan</button>
                        <button type="reset" class="btn btn-danger"  name="breset">Kosongkan</button>
                    </div>
                </div>
            </div>
        </form>
        
            <div class="card">
                <div class="card-body pt-3">
                    <div class="col-md-15 p-1 pt-2 text-center">
                        <h3>DAFTAR MAHASISWA SI</h3>
                    <hr>

                        <table class="table table-bordered table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>jenis kelamin</th>
                        <th>nik</th>
                        <th>tempat lahir</th>
                        <th>tanggal lahir</th>
                        <th>prodi</th>
                        <th>nidn</th>
                        <th>kelas</th>
                        <th>aksi</th>
                    </tr>
<?php
    $no = 1;
    $tampil = mysqli_query($host, "SELECT * FROM mahasiswa where nipd like 'SI%' ");
    while($data = mysqli_fetch_array($tampil)) :

?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['nipd']?></td>
                        <td><?=$data['nm_pd']?></td>
                        <td><?=$data['jk']?></td>
                        <td><?=$data['nik']?></td>
                        <td><?=$data['tmpt_lahir']?></td>
                        <td><?=$data['tgl_lahir']?></td>
                        <td><?=$data['id_prodi']?></td>
                        <td><?=$data['nidn']?></td>
                        <td ><?=$data['kelas']?></td>
                        <td>
                            <a href="daftar-tabel-si.php?hal=edit&id=<?=$data['nipd']?>" class="btn btn-warning"> Edit </a>
                            <a href="daftar-tabel-si.php?hal=hapus&id=<?=$data['nipd']?>" 
                            onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
                    </tr>
                <?php endwhile; //penutup perulangan while ?>
                </table>

                </div>
            </div>
        </div>
            
    </main>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>



