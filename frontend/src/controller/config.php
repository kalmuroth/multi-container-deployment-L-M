<?php
$db_host = '35.177.26.109';
$db_user = 'root';
$db_port = 3306;
$db_password = 'MYSQL_ROOT_PASSWORD';

try {
    $conn = new PDO("mysql:host=$db_host;dbname=projet_bon_coin", $db_user, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}