<?php
$db_host = 'localhost';
$db_user = 'root';
$db_port = 3306;


try {
    $conn = new PDO("mysql:host=$db_host;dbname=projet_bon_coin", $db_user);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}