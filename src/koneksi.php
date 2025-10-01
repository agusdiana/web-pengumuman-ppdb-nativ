<?php
$host = "db";        // sesuai nama service di docker-compose
$port = "5432";
$dbname = "mydb";
$user = "user";
$password = "user123";

try {
    // Gunakan PDO untuk koneksi
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    // echo "✅ Koneksi ke PostgreSQL berhasil!";
} catch (PDOException $e) {
    echo "❌ Koneksi gagal: " . $e->getMessage();
}
?>
