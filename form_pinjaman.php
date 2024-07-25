<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengajuan Pinjaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Pengajuan Pinjaman</h1>
        <form action="proses_pinjaman.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="jumlah">Jumlah Pinjaman:</label>
            <input type="number" id="jumlah" name="jumlah" step="0.01" required>
            
            <label for="durasi">Durasi (bulan):</label>
            <input type="number" id="durasi" name="durasi" required>
            
            <input type="submit" value="Ajukan">
        </form>
    </div>
</body>
</html>
