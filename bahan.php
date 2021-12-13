<title>Data Bahan</title>
<link rel="stylesheet" type="text/css" href="tabel.css">
<link rel="stylesheet" href="stylee.css">
<link rel="stylesheet" href="stylee1.css">
</br>
<div class="utama">

 

    <div class="header">
        <h1><font face="cooper black"> ----   SiMoed  ---- </font></h1>
        <p>Sistem Dapur Pangmoed</p>
    </br></br>
    </div>
    	<div class="container2">
        	<a class="tombol2 tombol-pesan2" href="input_bahan.php">Tambah Data</a>
    	</div>
		<form action="bahan.php" method="get">
		<table style="margin-left:auto;margin-right:auto" claobss="table1"   >
		<tr>
			<td> Cari </td>
			<td><input type="text" name="cari"></td>
			<td><input type="submit" value="Cari"></br></td>
		</tr>
		</form>
		<p></p>
		<?php
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		}
		?>
	</table>
		<p></p>
	</br>
		<table style="margin-left:auto;margin-right:auto" class="table1" border="1" cellpadding="5"  >
			<tr>
				<th>Kode</th>
				<th>Foto Bahan</th>
				<th>Nama Bahan</th>
				<th>Harga Bahan</th>
				<th>Stok Bahan</th>
				<th>Satuan</th>
				<th colspan="2">Aksi</th>
			</tr>
			<?php 
			include 'koneksi.php';
			if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
				$data = mysqli_query($koneksi,"select * from bahan where id_bahan like '%".$cari."%'");				
			}else{
				$data = mysqli_query($koneksi,"select * from bahan");		
			}
			while($d = mysqli_fetch_array($data)){
			?>
			<tr align="center">
				<td><?php echo $d['id_bahan']; ?></td>
				<td><img src="tambahan/<?php echo $d['foto_bahan'];?>" width="80" height="60"></td>
				<td><?php echo $d['nama_bahan']; ?></td>
				<td><?php echo $d['harga_bahan']; ?></td>
				<td><?php echo $d['stok_bahan']; ?></td>
				<td><?php echo $d['satuan']; ?></td>
				<td>
					<a href="ubah_bahan.php?id=<?php echo $d['id_bahan']; ?>">EDIT</a> | 
					<a href="hapus_bahan.php?id=<?php echo $d['id_bahan']; ?>">HAPUS</a>
				</td>

			</tr>
			<?php } ?>
			</table>
			</br></br></br></br></br>

	<div class="container2">
    	<div class="kanan">
        	<a class="tombol1 tombol-pesan1" href="halaman_pemilik.php?menu=logout">Logout</a>
    	</div>

    	<div class="kiri">
            <a class="tombol1 tombol-pesan1" href="halaman_pemilik.php">Back</a>
        </div>
    </div>

		</div>
			</div>

<style type="text/css">
.tombol2
{
    display: block;
    text-decoration: none;
    padding: 10px;
    width: 100px;
    height: 20px;
    color: black;
    font-size: 15px;
    border-radius: 5px;
    text-align: center;
    font-family: georgia;
}
 
.tombol2:hover
{
    background-color: white;
    transition-duration: 2s;
    align : center;
}
 
.tombol-pesan2
{
    background-color: white;
}</style>