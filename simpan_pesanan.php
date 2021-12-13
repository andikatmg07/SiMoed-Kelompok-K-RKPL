<?php
		$mysqli = new mysqli("localhost","root", "", "db_simoed");
		$no_meja = $_POST['no_meja'];

		function proses_pesanan($no_pesanan, $mysqli){
			if(isset($_POST["makanan"]) && isset($_POST['jumlah_makanan'])){

				foreach ($_POST['makanan'] as $key => $value) {						
					
					$mkn            = $_POST['makanan'][$key];
					$jumlah_makanan = $_POST['jumlah_makanan'][$key];
					$minuman        = $_POST['minuman'][$key];
					$jumlah_minuman = $_POST['jumlah_minuman'][$key];


					$mysqli->query("INSERT INTO pesanan(makanan,jumlah_makanan,minuman,jumlah_minuman,no_pesanan) VALUES ('$mkn','$jumlah_makanan','$minuman','$jumlah_minuman','$no_pesanan')");				
				}
			}		
		}
		$no_pesanan=$_POST['no_pesanan'];
		$hasil = $mysqli->query("INSERT INTO meja (no_pesanan,no_meja) VALUES ('$no_pesanan','$no_meja')");
		if($hasil){ 
			proses_pesanan($_POST['no_pesanan'], $mysqli);
			echo "<script>alert('Data $no_pesanan Berhasil Di Simpan');</script>";
			echo "<meta http-equiv='refresh' content='0; url=buat_pesanan.php'>";
		}else{
			echo "<script>alert('Data $no_pesanan Gagal Di Simpan');</script>";
		    echo "<meta http-equiv='refresh' content='0; url=buat_pesanan.php'>";
		}	
		
?>
