<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pinjaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Data Pinjaman</h1>
        <?php
        include 'db.php';

        $sql = "SELECT * FROM pinjaman";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nama</th><th>Jumlah</th><th>Durasi</th><th>Tanggal Pengajuan</th></tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["jumlah"] . "</td>";
                echo "<td>" . $row["durasi"] . "</td>";
                echo "<td>" . $row["tanggal_pengajuan"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Tidak ada data pinjaman.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
