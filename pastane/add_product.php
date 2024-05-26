<?php
include('config.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $query = "INSERT INTO products (name, category, price) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssd", $name, $category, $price);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Hata: " . $conn->error;
    }
}
?>
