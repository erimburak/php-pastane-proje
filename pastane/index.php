<?php
include('config.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pastane Yönetim Sistemi</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Ürün Listesi</h1>
        <div class="form-container">
            <h2>Yeni Ürün Ekle</h2>
            <form action="add_product.php" method="post">
                <label for="name">Ürün Adı:</label>
                <input type="text" name="name" required>
                <label for="category">Kategori:</label>
                <input type="text" name="category" required>
                <label for="price">Fiyat:</label>
                <input type="number" step="0.01" name="price" required>
                <button type="submit">Ekle</button>
            </form>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Ürün Adı</th>
                        <th>Kategori</th>
                        <th>Fiyat</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['category']); ?></td>
                        <td><?php echo htmlspecialchars($row['price']); ?></td>
                        <td>
                            <a href="edit_product.php?id=<?php echo $row['id']; ?>">Düzenle</a>
                            <a href="delete_product.php?id=<?php echo $row['id']; ?>">Sil</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <a href="logout.php">Çıkış Yap</a>
        <footer>
            <p>Bu projeyi GitHub'da inceleyin: <a href="https://github.com/erimburak/php-pastane-proje">GitHub Projesi</a></p>
        </footer>
    </div>
</body>
</html>
