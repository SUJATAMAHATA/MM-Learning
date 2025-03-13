<?php
require_once 'db.php';

$message = "";
$type = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $message = "Passwords do not match.";
        $type = "error";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            $message = "Email already exists.";
            $type = "error";
        } else {
            $stmt = $pdo->prepare("INSERT INTO users (name, email, mobile, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $email, $mobile, $hashed_password]);

            $message = "Sign up successful!";
            $type = "success";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MM Academy - Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="signup-form">
            <h2>Sign Up for MM Academy</h2>

            <?php if ($message != ""): ?>
                <div class="message <?php echo $type; ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>
            <?php endif; ?>

            <form action="signup.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <label for="mobile">Mobile Number:</label>
                <input type="text" name="mobile" required>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
