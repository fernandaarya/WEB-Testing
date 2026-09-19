<?php
// Membuat koneksi ke database
$config = mysqli_connect("localhost", "root", "", "gufer");

// Memeriksa koneksi
if(!$config) {
    die('Gagal terhubung ! : ' .mysqli_connect_error());
}else{
        echo"Koneksi Berhasil";
    }
?>