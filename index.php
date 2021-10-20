<?php include('./header.php') ?>
<div class="alrazy-title" data-splitting>
    Nos SUPERBES Annonces
</div>
<!-- Script qui génére l'animation -->
<script src="https://unpkg.com/splitting@1.0.0/dist/splitting.js"></script>
<script>
    Splitting();
</script>
</br>
<div class="container pt-4">
    <table class="accueil">
        <tr>
            <td class="consulter"> <a href="./list_annonce.php">
                    <h3>Consulter toutes les annonces</h3>
                </a></td>
            <td class="ajouter"> <a href="./form_annonce.php">
                    <h3>Ajouter une annonce</h3>
                </a> </td>
        </tr>
    </table>
</div>
<div class="container pt-4">
    <h3>Nos 15 dernières annonces</h3>
    <hr>
</div>
<div class="container pt-4">
    <div class="row">
        <form action="./controller/add_annonce.php" method="post">
            <div class="mb-3">
            <?php require_once('./controller/config.php');

            $query = "SELECT * FROM advert ORDER BY id DESC LIMIT 15"; 
            $req = $conn->prepare($query);
            $req->execute();

            $result = $req->fetchAll();

            foreach ($result as $annonce) { 
            print_r(strtoupper($annonce['title']) . " ( ". $annonce['type'] .") : " . $annonce['description'] . " / " . $annonce['price']. " Euro " . $annonce['postal_code'] . "<br/>");
            }
            ?>
            </div>
        </form>
    </div>
</div>
<?php include('./footer.php'); ?>