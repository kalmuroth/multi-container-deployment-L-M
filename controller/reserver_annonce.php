<?php require_once('./config.php');

$reserver = $_POST['reserver'];
$message = $_POST['message'];

$insert_sql = "UPDATE advert SET reservation_message = '[RESERVER]', city = :message WHERE id = :reserver;";

$stmt = $conn->prepare($insert_sql);

$stmt->execute(array(
    'reserver' => $reserver,
    'message' => $message,
));


header('Location: ../list_annonce.php');