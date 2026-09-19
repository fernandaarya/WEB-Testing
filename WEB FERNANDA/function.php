<?php
session_start();
include("config.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT email FROM login
        WHERE email = '$email'
        AND password = '$password'";

$hasil = mysqli_query($config, $sql) or exit("Error query : <b?>".$sql."</b>");

if(mysqli_num_rows($hasil)>0){
    $data = mysqli_fetch_array($hasil);
    $_SESSION['email'] = $data['email'];
    header("Location:index.php");
    exit();
}
else{
    ?>
    <h2>Login Gagal</h2>
    <a href="login.php">Login Ulang</a>
<?php
}
?>