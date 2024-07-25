<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $durasi = $_POST['durasi'];
    $tanggal_pengajuan = date("Y-m-d");

    $sql = "INSERT INTO pinjaman (nama, jumlah, durasi, tanggal_pengajuan)
            VALUES ('$nama', '$jumlah', '$durasi', '$tanggal_pengajuan')";

    if ($conn->query($sql) === TRUE) {
        echo "Pengajuan pinjaman berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
