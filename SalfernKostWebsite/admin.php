<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Salfern Kost</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <a href="logout.php">Logout</a>
    </header>
    <section>
        <h2>Manage Kos</h2>
        <!-- Form untuk menambahkan kamar baru -->
        <form method="POST" action="addkost.php" enctype="multipart/form-data">
        <input type="text" name="nama_kos" placeholder="Nama Kos" required>
        <input type="text" name="harga" placeholder="Harga" required>
        <input type="text" name="fasilitas" placeholder="Fasilitas" required>
        <input type="file" name="gambar" required>
        <button type="submit">Tambah Kamar</button>
        </form>
        <!-- Tampilkan daftar kamar yang ada -->
        <div class="container">
            <!-- Kos card example -->
            <div class="kos-card">
                <img src="aset/kost level bawah.jpg" alt="Kos 1">
                <h3>Kos Cemara</h3>
                <p>Harga: Rp450.000 / bulan</p>
                <p>Kamar Kosongan dan Kamar Mandi Luar </p>
                <a href="<?php echo isset($_SESSION['email']) ? 'https://wa.me/+6281352594967' : 'login.php'; ?>" target="<?php echo isset($_SESSION['email']) ? '_blank' : '_self'; ?>">Tanyakan Langsung</a>
            </div>
            <div class="kos-card">
                <img src="aset/kost standar.jpeg" alt="Kos 2">
                <h3>The Homie Kost</h3>
                <p>Harga: Rp550.000 / bulan</p>
                <p>Kamar Kosongan, Kamar Mandi Luar, dan Parkiran Luas.</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'https://wa.me/+6281352594967' : 'login.php'; ?>" target="<?php echo isset($_SESSION['email']) ? '_blank' : '_self'; ?>">Tanyakan Langsung</a>
            </div>
            <div class="kos-card">
                <img src="aset/kost level ekonomi.jpeg" alt="Kos 3">
                <h3>Kost the Nature</h3>
                <p>Harga: Rp600.000 / bulan</p>
                <p>Kamar kosongan, Kamar Mandi Dalam, Lingkungan Nyaman</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'https://wa.me/+6281352594967' : 'login.php'; ?>" target="<?php echo isset($_SESSION['email']) ? '_blank' : '_self'; ?>">Tanyakan Langsung</a>
            </div>
            <div class="kos-card">
                <img src="aset/kost menengah.jpeg" alt="Kos 4">
                <h3>The Building Kost</h3>
                <p>Harga: Rp575.000 / bulan</p>
                <p>Kamar kosongan, kamar mandi dalam, parkir luas</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'https://wa.me/+6281352594967' : 'login.php'; ?>" target="<?php echo isset($_SESSION['email']) ? '_blank' : '_self'; ?>">Tanyakan Langsung</a>
            </div>
            <div class="kos-card">
                <img src="aset/kost standart.jpg" alt="Kos 5">
                <h3>The Grand Kost</h3>
                <p>Harga:Rp650.000 / bulan</p>
                <p>Kamar kosongan, kamar mandi dalam, mini guest room</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'https://wa.me/+6281352594967' : 'login.php'; ?>" target="<?php echo isset($_SESSION['email']) ? '_blank' : '_self'; ?>">Tanyakan Langsung</a>
            </div>
            <div class="kos-card">
                <img src="aset/kostmedium.jpg" alt="Kos 6">
                <h3>The Med kos</h3>
                <p>Harga: Rp750.000/ bulan</p>
                <p>Kamar isian lemari & kasur, Kamar mandi dalam, full furnish</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'https://wa.me/+6281352594967' : 'login.php'; ?>" target="<?php echo isset($_SESSION['email']) ? '_blank' : '_self'; ?>">Tanyakan Langsung</a>
            </div>
            <div class="kos-card">
                <img src="aset/kamar .jpg" alt="Kos 7">
                <h3>The Diamond Exclusive Kost</h3>
                <p>Harga: Rp950.000 / bulan</p>
                <p>kamar isian lemari meja kasur, kamar mandi dalam, full furnish</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'https://wa.me/+6281352594967' : 'login.php'; ?>" target="<?php echo isset($_SESSION['email']) ? '_blank' : '_self'; ?>">Tanyakan Langsung</a>
            </div>
            <div class="kos-card">
                <img src="aset/kostjos.jpg" alt="Kos 8">
                <h3>The Edelwis Exclusive Kost</h3>
                <p>Harga: Rp 1.200.000 / bulan</p>
                <p>Kamar isian lemari meja kasur + AC, Water Heater, KM dalam, full furnish</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'https://wa.me/+6281352594967' : 'login.php'; ?>" target="<?php echo isset($_SESSION['email']) ? '_blank' : '_self'; ?>">Tanyakan Langsung</a>
            </div>
        </div>
    </section>
</body>
</html>