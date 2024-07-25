<?php
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Mengambil data pembayaran dari database
$sql = "SELECT * FROM pembayaran";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pembayaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data Pembayaran</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Pembayaran</th>
                    <th>ID Pinjaman</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Bukti Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['pinjaman_id'] . "</td>";
                        echo "<td>" . $row['bulan'] . "</td>";
                        echo "<td>" . $row['tahun'] . "</td>";
                        echo "<td><a href='" . $row['bukti_pembayaran'] . "' target='_blank'>Lihat Bukti</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data pembayaran</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="button">Kembali ke Beranda</a>
    </div>
</body>
</html>
