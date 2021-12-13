<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Buat Pesanan</title>
<link rel="stylesheet" type="text/css" href="tabel.css">
<link rel="stylesheet" href="stylee.css">
<link rel="stylesheet" href="stylee1.css">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script language="javascript">

	function tambahPesanan() {
    		var idf = document.getElementById("idf").value;
			var stre;
			stre="<p id='srow" + idf + "'> <input type='text' size='20' placeholder='makanan' name='makanan[]'/> <input type='text' size='5' placeholder='jumlah' name='jumlah_makanan[]'/> <input type='text' size='20' placeholder='minuman' name='minuman[]' /> <input type='text' size='5' placeholder='jumlah' name='jumlah_minuman[]'  /> <a href='#' style=\"color:#3399FD;\" onclick='hapusElemen(\"#srow" + idf + "\"); return false;'>Hapus</a></p>";
    		$("#divHobi").append(stre);	
    		idf = (idf-1) +2;
    		document.getElementById("idf").value = idf;
		}
	function hapusElemen(idf) {
    		$(idf).remove();
		}
</script>
</head>
<body>
<div class="utama">

    <div class="header">
        <h1><font face="cooper black"> ----   SiMoed  ---- </font></h1>
        <p>Sistem Dapur Pangmoed</p>
    </br></br>
    </div>
<div id="container">
<h2>Input Data Pesanan</h2>
</br>
<form  method="post" action="simpan_pesanan.php">
	<table style="margin-left:auto;margin-right:auto">
		<input id="idf" value="1" type="hidden" name="no_pesanan" />
		<tr>
			<td>No Meja</td>
			<td><input name="no_meja" type="text" id="no" size="40"></td>
		</tr>
		<tr>
			<td colspan="3">
					<button type="button"  onclick="tambahPesanan(); return false;">Tambah Rincian Pesanan</button>
 					<div id="divHobi"></div>
 					<button type="submit">Simpan</button>
			</td>
		</tr>
	</table>
</form>
	</br></br>
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

</body>
</html>