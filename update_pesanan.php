<?php 
	extract($_POST);
	if (isset($simpan)) {
		include 'koneksi.php';

		$qry = mysqli_query($koneksi, "UPDATE meja SET no_meja='$no_meja', post='1' WHERE no_pesanan='$kd_pesanan'");

		if ($qry) {
			echo "<script>alert('Data $kd_pesanan selesai diproses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=pesanan2.php'>";
		}else{
			echo "<script>alert('Data $kd_pesanan gagal diproses');</script>";
			echo "<meta http-equiv='refresh' content='0; url=pesanan2.php'>";
		}
	}
?>