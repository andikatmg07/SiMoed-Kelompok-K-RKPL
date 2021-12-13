<?php 
	extract($_GET);
	include 'koneksi.php';
	if (isset($id)) {
		$kueri = mysqli_query($koneksi, "SELECT * FROM meja WHERE no_pesanan='$id'");
		$data = mysqli_fetch_array($kueri);
	}else{
		echo "<script>alert('Pilih Dahulu Datanya');</script>";
		echo "<meta http-equiv='refresh' content='0; url=pesanan2.php'>";
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
    </br></br>
    </div>
	</br>
	<form action="update_pesanan.php" name="form1" method="post">
		<table style="margin-left:auto;margin-right:auto" border="1" cellpadding="5">
			<tr>
				<td>No Pesanan</td>
				<td><input type="text" readonly name="kd_pesanan" value="<?php echo $data['no_pesanan'] ?>"></td>
			</tr>
			<tr>
				<td>No Meja</td>
				<td><input type="text" readonly name="no_meja" value="<?php echo $data['no_meja'] ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="simpan" value="SELESAI">
				<input type="reset" name="batal" value="BATAL">
				</td>
			</tr>
		</table>
	</form>
	</br>

</div>st