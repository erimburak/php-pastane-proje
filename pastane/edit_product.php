<?php
include('config.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $query = "UPDATE products SET name=?, category=?, price=? WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssdi", $name, $category, $price, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Hata: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ürünü Düzenle</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Ürünü Düzenle</h1>
        <form action="edit_product.php?id=<?php echo $id; ?>" method="post">
            <label for="name">Ürün Adı:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
            <label for="category">Kategori:</label>
            <input type="text" name="category" value="<?php echo htmlspecialchars($product['category']); ?>" required>
            <label for="price">Fiyat:</label>
            <input type="text" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>
            <button type="submit">Güncelle</button>
        </form>
    </div>
</body>
</html>
