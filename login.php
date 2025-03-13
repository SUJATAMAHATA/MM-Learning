<?php
session_start();
require_once 'db.php';

$message = "";
$type = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        header('Location: dashboard.php');
        exit;
    } else {
        $message = "Invalid email or password.";
        $type = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MM Academy - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login to MM Academy</h2>

            <?php if ($message != ""): ?>
                <div class="message <?php echo $type; ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <button type="submit">Login</button>
                <a href="forgot_password.html">Forgot Password?</a>
            </form>
            <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
        </div>
    </div>
</body>
</html>
