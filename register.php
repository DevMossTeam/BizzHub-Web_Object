<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi password dan confirm password
    if ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // Cek apakah username atau email sudah ada di database
        $sql = "SELECT id FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error_message = "Username or email already exists.";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert data ke database
            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                // Redirect ke halaman login setelah registrasi berhasil
                header("Location: login.php");
                exit;
            } else {
                $error_message = "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Bizzhub</title>
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
            <form action="register.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Continue</button>
            </form>
            <div class="separator">or use another method</div>
            <button class="google-btn" onclick="googleAuth()">
                <img src="https://img.icons8.com/color/48/000000/google-logo.png" alt="Google Logo">
                Lanjutkan dengan Google
            </button>
            <p>Already have an account? <a href="login.php">Sign in</a></p>
        </div>
    </div>
</body>
</html>