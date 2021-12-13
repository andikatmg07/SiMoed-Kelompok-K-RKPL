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

	<h2 align="center"><font color="white" face="georgia"> Input Data Bahan </font> </h2>
	</br></br>
	<form action="simpan_bahan.php" name="form1" method="post" enctype="multipart/form-data">
		<table style="margin-left:auto;margin-right:auto" class="table1"  border="1" cellpadding="5">
			<tr>
				<td>Kode</td>
				<td><input type="text" readonly type="hidden" name="id_bahan"></td>
			</tr>
			<tr>
				<td>Nama Bahan</td>
				<td><input type="text" name="nama_bahan"></td>
			</tr>
			<tr>
				<td>Harga Bahan</td>
				<td><input type="text" name="harga_bahan"></td>
			</tr>
			<tr>
				<td>Stok Bahan</td>
				<td><input type="text" name="stok_bahan"></td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td><input type="text" name="satuan"></td>
			</tr>
			<tr>
				<td>Foto Bahan</td>
				<td><input type="file" name="foto_bahan"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="simpan" value="SIMPAN">
				<input type="reset" name="batal" value="BATAL">
				</td>
			</tr>
		</table>
	</form>
	</br></br>

</div>