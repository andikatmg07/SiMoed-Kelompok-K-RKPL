<?php 
	extract($_POST);
	if (isset($simpan)) {
		include 'koneksi.php';

		$qry = mysqli_query($koneksi, "UPDATE bahan SET nama_bahan='$nama_bahan', harga_bahan='$harga_bahan', stok_bahan='$stok_bahan', satuan='$satuan' WHERE id_bahan='$kd_bahan'");

		if ($qry) {
			echo "<script>alert('Data $id_bahan Berhasil Di Update');</script>";
			echo "<meta http-equiv='refresh' content='0; url=bahan.php'>";
		}else{
			echo "<script>alert('Data $id_bahan Gagal Di Update');</script>";
			echo "<meta http-equiv='refresh' content='0; url=bahan.php'>";
		}
	}
?>