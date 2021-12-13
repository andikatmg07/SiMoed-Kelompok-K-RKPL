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
	<div>
		<h2>Pesanan Selesai</h2>
		</br>
		<table style="margin-left:auto;margin-right:auto" class="table1" border="2" cellpadding="10">
			<th>No Pesanan</th>
			<th>No Meja</th>
			<tr>
				<?php 
					include 'koneksi.php';
					$kueri = mysqli_query($koneksi, "SELECT * FROM meja WHERE post = '1' ");

					while($data = mysqli_fetch_array($kueri)){
						echo "
								<tr>
								<td>$data[no_pesanan]</td>
								<td>$data[no_meja]</td>
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

            <a class="tombol1 tombol-pesan1" href="halaman_pelayan.php">Back</a>
        </div>
    </div>

	</div>

	<style type="text/css">
    h2{
      font-family: serif;
      text-align: center;
      color: white;
    }
  </style>
			