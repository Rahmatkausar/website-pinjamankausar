<?php
include 'db.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Situs Pinjaman Uang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo"> <!-- Path logo Anda -->
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="form_pinjaman.php">Ajukan Pinjaman</a></li>
                <li><a href="data_pinjaman.php">Lihat Data Pinjaman</a></li>
                <li><a href="upload_bukti.php">Upload Bukti Pembayaran</a></li>
                <li><a href="data_pembayaran.php">Data Pembayaran</a></li>
                <li><a href="tambah_user.php">Tambah akun</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Selamat Datang di Situs Pinjaman Uang</h1>
        <p>Halo, <?php echo $_SESSION['username']; ?>!</p>
    </div>
</body>
</html>
