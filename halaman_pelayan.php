<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pelayan</title>
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
            <a class="tombol tombol-pesan" href="pesanan1.php?menu=pesanan">Pesanan</a>
        </div>

        <div class="kiri">
            <a class="tombol tombol-pesan" href="buat_pesanan.php">Buat</a>
        </div>
    </div>

    <div class="containera">
         <a class="tombol tombol-pesan" href="logout.php?menu=logout">Logout</a>
    </div>
</div>


</body>
</html>