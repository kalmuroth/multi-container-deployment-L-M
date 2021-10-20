<?php include('header.php');
?>
<div class="container pt-4">
    <h3>Les annonces actuellement disponible</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="one_annonce.php" method="post">
            <div class="mb-3">
            <?php require_once('./controller/config.php');

            $query = "SELECT * FROM advert"; 
            $req = $conn->prepare($query);
            $req->execute();

            $result = $req->fetchAll();

            foreach ($result as $annonce) { 
            print_r("Annonce N°".$annonce['id'] . " ". $annonce['reservation_message'] . " ".$annonce['title'] . " ( ". $annonce['type'] .") : " . $annonce['description'] . " / " . $annonce['price']. " Euro / " . $annonce['postal_code']);
            ?>
            <div  class="d-flex">
                <input class="btn btn-primary text-light  me-3" type="hidden" name="id" value= <?php print_r($annonce['id']) ?> />
                <input class="btn btn-primary text-light  me-3" type="submit" value="Voir Annonce N°<?php print_r($annonce['id']) ?>">
            </div>
            <?php
            print_r("<br>");
            }
            ?>
            </div>
        </form>
    </div>
</div>
<div class="container pt-4">
    <h3>Réserver une Annonce</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/reserver_annonce.php" method="post">
            <div class="mb-3">
                <label for="reserver" class="form-label">Numéro de l'annonce</label>
                <input type="text" class="form-control" id="reserver" name="reserver">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message de réservation</label>
                <input type="text" class="form-control" id="message" name="message">
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-primary text-light  me-3">Réserver l'annonce</button>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>