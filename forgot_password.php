<?php
require_once 'db.php';

$message = "";
$type = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        $token = bin2hex(random_bytes(50));
        $expires = date('U') + 3600;

        $stmt = $pdo->prepare("UPDATE users SET reset_token = ?, reset_expires = ? WHERE email = ?");
        $stmt->execute([$token, $expires, $email]);

        $resetLink = "http://yourdomain.com/reset_password.php?token=" . $token;
        mail($email, "Password Reset", "Click here to reset your password: " . $resetLink);

        $message = "Password reset link has been sent to your email!";
        $type = "success";
    } else {
        $message = "No account found with that email.";
        $type = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MM Academy - Forgot Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="forgot-password-form">
            <h2>Forgot Password</h2>

            <?php if ($message != ""): ?>
                <div class="message <?php echo $type; ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>

            <form action="forgot_password.php" method="POST">
                <label for="email">Enter your registered email:</label>
                <input type="email" name="email" required>
                <button type="submit">Send Reset Link</button>
            </form>
            <p><a href="login.php">Back to Login</a></p>
        </div>
    </div>
</body>
</html>
