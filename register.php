<?php

include "include/koneksi.php";

if (isset($_POST['nama_lengkap']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['kelas'])) {
	$user = new User();

	$nama_lengkap = $_POST['nama_lengkap'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$email = $_POST['email'];
	$kelas = $_POST['kelas'];

	$qry = $user->Register($nama_lengkap, $username, $password, $email, $kelas);
	if ($qry) {
		echo "<script language='javascript'>alert('Register berhasil, silahkan login');document.location='index.php'</script>";
	} else {
		echo "<script language='javascript'>alert('Gagal');document;location='index.php'</script>";
	}
}
