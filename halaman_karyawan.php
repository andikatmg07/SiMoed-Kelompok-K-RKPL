<!DOCTYPE html>
<html>
<head>
    <title>Halaman Karyawan</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>

    <div class="utama">
    <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
 
    ?>
    <div class="header">
        <h1><font face="cooper black"> ----   SiMoed  ---- </font></h1>
        <p>Sistem Dapur Pangmoed</p>
    </div>

    <div class="container">
        <div class="kanan">
            <a class="tombol tombol-pesan" href="bahan.php?menu=bahan">Stok</a>
        </div>

        <div class="kiri">
            <a class="tombol tombol-pesan" href="pesanan2.php?menu=pesanan2">Pesanan</a>
        </div>
    </div>

    <div class="containera">
         <a class="tombol tombol-pesan" href="logout.php?menu=logout">Logout</a>
    </div>
</div>


</body>
</html>