<?php
session_start();
$conn = new mysqli("localhost", "root", "", "salfern_kost");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM kamar");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salfern Kost</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylehome.css">
    <script>
        function handleTanyaLangsung(event) {
            event.preventDefault(); // Mencegah tautan default
            if (!<?php echo isset($_SESSION['email']) ? 'true' : 'false'; ?>) {
                // Jika belum login, arahkan ke halaman login
                window.location.href = 'login.php';
            } else {
                // Jika sudah login, arahkan ke WhatsApp
                window.open('https://wa.me/+6281352594967', '_blank');
            }
        }
    </script>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">SALFERN KOST</h1>
            <nav>
                <ul class="nav-links">
                    <li><a href="#container">Home</a></li>
                    <li><a href="#cari-kos">Cari Kost</a></li>
                    <li><a href="#developer">Profil</a></li>                   
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
            <a href="login.php" class="btn">LOGIN</a>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2 class="hero-title">"Selamat Datang di Salfern Kost – Temukan Hunian Nyaman dan Strategis di YOGYAKARTA"
            </h2>
            <p class="hero-description">
            "Halo, pencari kost! Apakah Anda sedang mencari tempat tinggal yang nyaman, aman,
            dan berada di lokasi strategis? Salfern Kost hadir untuk menjawab kebutuhan Anda.
            Dengan pilihan kamar yang beragam, fasilitas lengkap, dan harga yang terjangkau, 
            kami siap menjadi solusi terbaik untuk tempat tinggal anda di YOGYAKARTA."
            </p>
        </div>
    </section>
    <section id="cari-kos" class="cari-kos">
        <h2>Cari Kos</h2>
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
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="kos-card">
                    <img src="<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama_kost']; ?>">
                    <h3><?php echo $row['nama_kost']; ?></h3>
                    <p>Harga: Rp<?php echo number_format($row['harga'], 2); ?> / bulan</p>
                    <p>Fasilitas: <?php echo $row['fasilitas']; ?></p>
                    <a href="https://wa.me/+6281352594967" target="_blank">Tanyakan Langsung</a>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section id="developer" class="developer">
        <h2>Profil Developer</h2>
        <div class="profile">
            <img src="aset/arya.jpg" alt="Developer">
            <h4>Fernanda Arya</h4>
            <a href="https://www.instagram.com/fernandaaryaa_/" target="blank">@fernandaaryaa</a>
        </div>
        <div class="profile">
            <img src="aset/al.png" alt="Developer">
            <h4>Alpridel Jimnoris</h4>
            <a href="https://www.instagram.com/mr_zinnn/" target="_blank">@mr_zinnn</a>
        </div>
        <div class="profile">
            <img src="aset/sandi.png" alt="Developer">
            <h4>Maria Alexandria</h4>
            <a href="https://www.instagram.com/sandy_waru03/" target="_blank">@sandy_waru03</a>
        </div>
        <div class="profile">
            <img src="aset/raihan.png" alt="Developer">
            <h4>Raihan Siamto</h4>
            <a href="https://www.instagram.com/rhnsmtoo/" target="_blank">@rhnsmtoo</a>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Salfern Contact:</h2>
        <div class="info">
            <div>
                <h3>Email</h3>
                <p>salfernkost@gmail.com</p>
            </div>
            <div>
                <h3>Telepon</h3>
                <p>+62 822 3552 2061</p>
            </div>
            <div>
                <h3>Alamat</h3>
                <p>Gg Sastrosentono, No.34, Kledokan, Caturtunggal, Kec. Depok, Kab. Sleman,DI Yogyakarta 55281 </p>
            </div>
            
        </div>
    </section>

    <footer>
        <div>&copy; 2024 Salfern Kost. All Rights Reserved.</div>
        <div class="socials">
            <a href="https://www.facebook.com/crown.pubg.77?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
            <a href="https://x.com/FernandAry_"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/rhnsmtoo/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/maria-alexandria/"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="info">
            <p>Designed by Salfern Kost:</p>
            <p>Alpridel Jimnoris_22230003</p>
            <p>Fernanda Arya_22230008</p>
            <p>Raihan Siamto_22230015</p>
            <p>Maria Alexandria_22230023</p>
        </div>
    </footer>
</body>
</html>
<?php
$conn->close(); // Tutup koneksi database
?>