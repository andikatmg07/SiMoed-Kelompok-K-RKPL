<?php 
	extract($_GET);
	if (isset($id)) {
		include 'koneksi.php';

		$qry = mysqli_query($koneksi, "DELETE FROM bahan WHERE id_bahan='$id'");
		if ($qry) {
			echo "<script>alert('Data $id_bahan Berhasil Dihapus');</script>";
			echo "<meta http-equiv='refresh' content='0; url=bahan.php'>";
		}else{
			echo "<script>alert('Data $id_bahan Gagal Dihapus');</script>";
			echo "<meta http-equiv='refresh' content='0; url=bahan.php'>";
		}
	}
?>