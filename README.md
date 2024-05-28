# php-pastane-proje
### Site Linki
http://95.130.171.20/~st21360859024/
# Pastane Yönetim Sistemi

Bu proje, bir pastane yönetim sistemi için PHP ve MySQL kullanılarak geliştirilmiştir. Proje, ürün ekleme, düzenleme, silme ve kullanıcı giriş/çıkış işlemlerini içermektedir.

## Gereksinimler

- XAMPP veya benzeri bir yerel sunucu
- Web tarayıcısı

## Kurulum

### 1. XAMPP'ı İndirin ve Kurun

XAMPP'ı [buradan](https://www.apachefriends.org/index.html) indirip kurabilirsiniz.

### 2. Veritabanını Oluşturma

1. XAMPP Kontrol Panelini açın ve MySQL servisini başlatın.
2. [phpMyAdmin](http://localhost/phpmyadmin) üzerinden yeni bir veritabanı oluşturun. Örneğin: `pastane`.
3. `pastane.sql` dosyasını phpMyAdmin üzerinden veritabanınıza içe aktarın.

### 3. Dosyaları XAMPP'a Kopyalama

1. Tüm PHP dosyalarını ve diğer gerekli dosyaları XAMPP'ın `htdocs` dizinine kopyalayın. Örneğin: `C:\xampp\htdocs\pastane`.

### 4. Veritabanı Bağlantısını Ayarlama

`config.php` dosyasını açın ve veritabanı bağlantı ayarlarını güncelleyin:

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pastane"; // Veritabanınızın adı

// Bağlantı oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı başarısız: " . $conn->connect_error);
}
?>
```
### Youtube Tanıtım Videosu
https://youtu.be/ki__bF3mmHc


