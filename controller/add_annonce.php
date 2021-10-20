<?php require_once('./config.php');

$titre = $_POST['titre'];
$description = $_POST['description'];
$postal = $_POST['postal'];
$type = $_POST['type'];
$prix = $_POST['prix'];

$insert_sql = "INSERT INTO advert ( title, description, postal_code ,type,price) VALUES( :titre, :description, :postal,:type,:prix );";

$stmt = $conn->prepare($insert_sql);

$stmt->execute(array(
    'titre' => $titre,
    'description' => $description,
    'postal' => $postal,
    'type' => $type,
    'prix' => $prix,
));

header('Location: ../list_annonce.php');