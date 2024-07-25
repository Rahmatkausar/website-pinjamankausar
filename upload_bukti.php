<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Upload Bukti Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Upload Bukti Pembayaran</h1>
        <form action="upload_proses.php" method="post" enctype="multipart/form-data">
            <label for="pinjaman_id">ID Pinjaman:</label>
            <input type="number" id="pinjaman_id" name="pinjaman_id" required>
            
            <label for="bulan">Bulan:</label>
            <input type="number" id="bulan" name="bulan" min="1" max="12" required>
            
            <label for="tahun">Tahun:</label>
            <input type="number" id="tahun" name="tahun" required>
            
            <label for="bukti_pembayaran">Bukti Pembayaran:</label>
            <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
            
            <input type="submit" value="Upload">
        </form>
    </div>
</body>
</html>
