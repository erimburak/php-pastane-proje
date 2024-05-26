<?php
include('config.php');

$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        $success_message = "Kayıt başarılı! Giriş yapmak için <a href='login.php'>buraya</a> tıklayın.";
    } else {
        $success_message = "Hata: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Kayıt Ol</h1>
        <form action="register.php" method="post">
            <label for="username">Kullanıcı Adı:</label>
            <input type="text" name="username" required>
            <label for="password">Şifre:</label>
            <input type="password" name="password" required>
            <?php if (!empty($success_message)): ?>
                <p class="success-message"><?php echo $success_message; ?></p>
            <?php endif; ?>
            <button type="submit">Kayıt Ol</button>
        </form>
        <a href="login.php">Giriş Yap</a>
    </div>
</body>
</html>
