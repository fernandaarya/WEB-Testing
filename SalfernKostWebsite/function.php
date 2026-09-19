<?php
session_start();
include("config.php");

$email = $_POST['email'];
$password = $_POST['password'];

// Menggunakan prepared statements untuk keamanan
$stmt = $config->prepare("SELECT email FROM login WHERE email = ? AND password = ?");
if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($config->error));
}

$stmt->bind_param("ss", $email, $password);

if (!$stmt->execute()) {
    die('Execute failed: ' . htmlspecialchars($stmt->error));
}

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    $_SESSION['email'] = $data['email'];
    header("Location: index.php");
    exit();
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Gagal</title>
    </head>
    <body>
        <h2>Login Gagal</h2>
        <a href="login.php">Login Ulang</a>
    </body>
    </html>
    <?php
}

$stmt->close();
$config->close();
?>
