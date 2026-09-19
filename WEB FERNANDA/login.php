<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="functions.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p style="text-align: center;">Belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>