<?php 
	extract($_GET);
	include 'koneksi.php';
	if (isset($id)) {
		$kueri = mysqli_query($koneksi, "SELECT * FROM bahan WHERE id_bahan='$id'");
		$data = mysqli_fetch_array($kueri);
	}else{
		echo "<script>alert('Pilih Dahulu Datanya');</script>";
		echo "<meta http-equiv='refresh' content='0; url=bahan.php'>";
	}
?>

<link rel="stylesheet" type="text/css" href="tabel.css">
<link rel="stylesheet" href="stylee.css">
<link rel="stylesheet" href="stylee1.css">
</br>
<div class="utama">

	<br/>
	<br/>
    <div class="header">
        <h1><font face="cooper black"> ----   SiMoed  ---- </font></h1>
        <p>Sistem Dapur Pangmoed</p>
    </br></br></br></br>
    </div>
	</br>
	<form action="update_bahan.php" name="form1" method="post">
		<table style="margin-left:auto;margin-right:auto" border="1" cellpadding="5">
			<tr>
				<td>Kode</td>
				<td><input type="text" readonly name="kd_bahan" value="<?php echo $data['id_bahan'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Bahan</td>
				<td><input type="text" name="nama_bahan" value="<?php echo $data['nama_bahan'] ?>"></td>
			</tr>
			<tr>
				<td>Harga Bahan</td>
				<td><input type="text" name="harga_bahan" value="<?php echo $data['harga_bahan'] ?>"></td>
			</tr>
			<tr>
				<td>Stok Bahan</td>
				<td><input type="text" name="stok_bahan" value="<?php echo $data['stok_bahan'] ?>"></td>
			</tr>
			<tr>
				<td>satuan</td>
				<td><input type="text" name="satuan" value="<?php echo $data['satuan'] ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="simpan" value="SIMPAN">
				<input type="reset" name="batal" value="BATAL">
				</td>
			</tr>
		</table>
	</form>
	</br>

</div>st