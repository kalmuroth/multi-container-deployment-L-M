<?php include('header.php') 
?>
<div class="container pt-4">
    <h3>Les annonces actuellement disponible</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="list_annonce" method="post">
            <div class="mb-3">
            <?php require_once('./controller/config.php');
            $id = htmlspecialchars($_POST['id']);
            $query = "SELECT * FROM advert where id ='$id';"; 
            $req = $conn->prepare($query);
            $req->execute();

            $result = $req->fetchAll();
            foreach ($result as $annonce) { 
            print_r("Annonce N°".$annonce['id'] . " ". $annonce['reservation_message'] . " ".$annonce['title'] . " ( ". $annonce['type'] .") : " . $annonce['description'] . " / " . $annonce['price']. " Euro / " . $annonce['postal_code']);
            
            ?>
            <?php
            print_r("<br>");
            }
            ?>
            </div>
            <div  class="d-flex">
                <button class="btn btn-primary text-light  me-3"  type="submit" value="retour annonce" >Retour à la listes des annonces</button>
            </div>
        </form>
    </div>
</div>