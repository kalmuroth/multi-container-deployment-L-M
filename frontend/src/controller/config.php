<?php
$db_host = 'db';
$db_user = 'MYSQL_USER';
$db_password = 'MYSQL_PASSWORD';

try {
    $conn = new PDO("mysql:host=$db_host;dbname=projet_bon_coin", $db_user, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}