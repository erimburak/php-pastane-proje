<?php
$servername = "localhost";
$username = "dbusr21360859024";
$password = "Bfk8T1JZKBSn";
$dbname = "dbstorage21360859024";

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
