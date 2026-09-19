<?php
// Membuat koneksi ke database
$config = mysqli_connect("localhost", "root", "", "salfern_kost");

// Memeriksa koneksi
if (!$config) {
    die('Gagal terhubung! : ' . mysqli_connect_error());
}

// Contoh penggunaan query untuk memastikan koneksi bekerja
$query = "SELECT 1"; // Query dummy
$result = mysqli_query($config, $query);

if ($result) {
    echo "Koneksi dan query berhasil!";
} else {
    echo "Query gagal: " . mysqli_error($config);
}
?>
