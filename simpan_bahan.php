<?php 
	extract($_POST);
	if (isset($simpan)) {
		include 'koneksi.php';
		$lokasi_file = $_FILES['foto_bahan']['tmp_name'];
		$nama_file = $_FILES['foto_bahan']['name'];
		$size_file = $_FILES['foto_bahan']['size'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);

		$folder = "tambahan/";
		$max_size = 1024 * 1024;

		if ($tipe_file != "jpg" && $tipe_file != "png"){
			echo "<script>alert('File harus bertipe .jpg atau .png')</script><meta http-equiv= 'refresh'
			content='0';input_bahan.php'>";
		}else{
			$cekData = $koneksi -> query ("SELECT * FROM bahan WHERE foto_bahan='$nama_file'");

			if (mysqli_num_rows($cekData) > 0){
				$dataLamaImage = $cekData -> fetch_array();
				if (file_exists($folder.$dataLamaImage['foto_bahan'])){
					unlink($folder.$dataLamaImage['foto_bahan']);
				}
			}
			
			move_uploaded_file($lokasi_file, $folder.$nama_file);
			include "koneksi.php";
			$tgl_upload = date('y-m-d');
			$qry = mysqli_query($koneksi, "INSERT INTO bahan VALUES ('$id_bahan','$nama_file','$nama_bahan','$harga_bahan','$stok_bahan','$satuan')");
			if($qry){
				echo "<script>alert('Data Berhasil Di Simpan');</script>";
				echo "<meta http-equiv='refresh' content='0; url=bahan.php'>";
			}else{
				echo "<script>alert('Data Gagal Di Simpan');</script>";
				echo "<meta http-equiv='refresh' content='0; url=bahan.php'>";
			}

		}

	}
?>