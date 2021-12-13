<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai pemilik
	if($data['level']=="pemilik"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pemilik";
		// alihkan ke halaman dashboard pemilik
		header("location:halaman_pemilik.php");
 
	// cek jika user login sebagai pelayan
	}else if($data['level']=="pelayan"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pelayan";
		// alihkan ke halaman dashboard pelayan
		header("location:halaman_pelayan.php");
 
	// cek jika user login sebagai karyawan
	}else if($data['level']=="karyawan"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "karyawan";
		// alihkan ke halaman dashboard karyawan
		header("location:halaman_karyawan.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>