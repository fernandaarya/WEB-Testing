<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_kost = htmlspecialchars($_POST['nama_kos']);
    $harga = htmlspecialchars($_POST['harga']);
    $fasilitas = htmlspecialchars($_POST['fasilitas']);
    
    // Upload gambar
    $target_dir = "aset/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);

    // Koneksi ke database
    $conn = new mysqli("localhost", "root", "", "salfern_kost");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Simpan data ke database
    $stmt = $conn->prepare("INSERT INTO kamar (nama_kost, harga, fasilitas, gambar) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $nama_kost, $harga, $fasilitas, $target_file);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect ke halaman index setelah berhasil menambah kamar
    header('Location: index.php');
    exit();
}
?>