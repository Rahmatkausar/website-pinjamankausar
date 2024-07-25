<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pinjaman_id = $_POST['pinjaman_id'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["bukti_pembayaran"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa apakah file gambar adalah gambar asli atau bukan
    $check = getimagesize($_FILES["bukti_pembayaran"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }

    // Periksa apakah file sudah ada
    if (file_exists($target_file)) {
        echo "File sudah ada.";
        $uploadOk = 0;
    }

    // Batasi ukuran file
    if ($_FILES["bukti_pembayaran"]["size"] > 500000) {
        echo "Ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Batasi format file
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
    && $imageFileType != "gif" ) {
        echo "Hanya JPG, JPEG, PNG & GIF yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Periksa apakah $uploadOk bernilai 0 karena kesalahan
    if ($uploadOk == 0) {
        echo "File tidak diupload.";
    // jika semua ok, coba upload file
    } else {
        // Periksa apakah direktori 'uploads' ada dan dapat ditulis
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0755, true); // Buat direktori jika tidak ada
        }

        if (move_uploaded_file($_FILES["bukti_pembayaran"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO pembayaran (pinjaman_id, bulan, tahun, bukti_pembayaran)
                    VALUES ('$pinjaman_id', '$bulan', '$tahun', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "Bukti pembayaran berhasil diupload.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Terjadi kesalahan saat mengupload file.";
        }
    }

    $conn->close();
}
?>
