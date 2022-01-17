<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) 
{
	$nama = addslashes(trim($_POST['Username']));
	$NIM	= ($_POST['Password']);

	$query = mysqli_query($host, "SELECT * FROM user WHERE Username='$username' AND password='$password' ");
	if (mysqli_num_rows($query) == 0) 
	{
		echo "<script>alert('Username atau Password yang Anda masukan salah !!!');document.location.href='login.php'</script>/n";
	}else{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['level']  = $row['level'];
		
		if($row['level'] == "admin")
		{	
			echo "<script>alert('Welcome To Administrator!');document.location.href='admin/'</script>/n";
		}
		else if($row['level'] =="petugas")
		{
			echo "<script>alert('Welcome To Petugas !');document.location.href='mhs/'</script>/n";
		}
		else
		{
			echo "<script>alert('Login Gagal !!!');document.location.href='login.php'</script>/n";
		}
	}
}
?>