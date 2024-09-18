<?php
include 'db.php';
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password di database
    $sql = "SELECT id, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        // Set session dan redirect ke halaman utama
        $_SESSION['user_id'] = $id;
        header("Location: index.php");
        exit;
    } else {
        $error_message = "Invalid username or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bizzhub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .auth-container {
            text-align: center;
            margin-top: 50px;
        }

        .auth-box {
            display: inline-block;
            text-align: left;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .auth-logo {
            display: block;
            margin: 0 auto 20px;
            height: 50px;
        }

        .auth-box form input {
            display: block;
            width: calc(100% - 22px); /* Adjust for padding and border */
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .auth-box form button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .auth-box button.google-btn {
            width: 100%;
            padding: 10px;
            background-color: #fff;
            color: #000; /* Warna teks hitam */
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-box button.google-btn img {
            height: 20px;
            margin-right: 10px;
        }

        .auth-box p {
            margin-top: 10px;
            text-align: center;
        }

        .auth-box p a {
            color: #007bff; /* Warna teks biru */
            text-decoration: none;
        }

        .auth-box p a:hover {
            text-decoration: underline;
        }

        .auth-box .separator {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }

        .auth-box .separator::before,
        .auth-box .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ccc;
        }

        .auth-box .separator:not(:empty)::before {
            margin-right: .25em;
        }

        .auth-box .separator:not(:empty)::after {
            margin-left: .25em;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-box">
            <img src="assets/website-logo/Bizzhub-logo.png" alt="Bizzhub Logo" class="auth-logo">
            <?php if (isset($error_message)): ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Continue</button>
            </form>
            <div class="separator">or use another method</div>
            <button class="google-btn" onclick="googleAuth()">
                <img src="https://img.icons8.com/color/48/000000/google-logo.png" alt="Google Logo">
                Lanjutkan dengan Google
            </button>
            <p>Don't have an account? <a href="register.php">Sign up</a></p>
        </div>
    </div>
</body>
</html>