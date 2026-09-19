<?php


$server="localhost";
$user="root";
$pass="";
$database="db_uasweb";


$conect=mysqli_connect($server,$user,$pass,$database) or die('Error Connection Network');


if ($conect){
    echo "Koneksi Berhasil";
}
?>
