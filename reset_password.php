<?php
require_once 'db.php';

if ($_GET['token']) {
    $token = $_GET['token'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE reset_token = ? AND reset_expires > ?");
    $stmt->execute([$token, time()]);
    $user = $stmt->fetch();

    if ($user) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $newPassword = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            if ($newPassword !== $confirmPassword) {
                echo "Passwords do not match!";
                exit;
            }

            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_expires = NULL WHERE id = ?");
            $stmt->execute([$hashedPassword, $user['id']]);

            echo "Your password has been reset successfully!";
        }
    } else {
        echo "Invalid or expired token!";
    }
} else {
    echo "No token provided!";
}
?>
