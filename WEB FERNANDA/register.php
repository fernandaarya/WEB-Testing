<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gufer";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) == TRUE) {
        // Store user information in session
        $_SESSION['email'] = $email;

        // Redirect with JavaScript alert
        echo "<script>
                alert('Registration successful!');
                window.location.href = 'login.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="login-container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="email">Masukkan Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Masukkan Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Daftar</button>
            <p style="text-align: center;">Sudah punya akun? <a href="login.php">Masuk</a></p>
        </form>
    </div>
</body>
</html>