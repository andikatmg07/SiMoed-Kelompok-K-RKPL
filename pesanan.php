<title>Data Pesanan</title>
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

		<link rel="stylesheet" type="text/css" href="tabel.css">
</br>
</br>
	<div>
		<table style="margin-left:auto;margin-right:auto" class="table1" border="2" cellpadding="10">
			<th>No Pesanan</th>
			<th>No Meja</th>
			<th>Makanan</th>
			<th>Jumlah Makanan</th>
			<th>Minuman</th>
			<th>Jumlah Minuman</th>
			<tr>
				<?php 
					include 'koneksi.php';
					$kueri = mysqli_query($koneksi, "SELECT * FROM meja INNER JOIN pesanan ON meja.no_pesanan = pesanan.no_pesanan where post = 1");

					while($data = mysqli_fetch_array($kueri)){
						echo "
								<tr>
								<td>$data[no_pesanan]</td>
								<td>$data[no_meja]</td>
								<td>$data[makanan]</td>
								<td>$data[jumlah_makanan]</td>
								<td>$data[minuman]</td>
								<td>$data[jumlah_makanan]</td>
								</tr>";
					}
				?>
			</tr>
		</table> 
		</br></br></br>
		
	</div>

	<div class="container2">
    	<div class="kanan">
        	<a class="tombol1 tombol-pesan1" href="logout.php">Logout</a>
    	</div>

    	<div class="kiri">
            <a class="tombol1 tombol-pesan1" href="halaman_pemilik.php">Back</a>
        </div>
    </div>

		</div>
			